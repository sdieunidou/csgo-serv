<?php

class statusTask extends sfBaseTask
{
  protected function configure()
  {
    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'doctrine'),
      new sfCommandOption('process', null, sfCommandOption::PARAMETER_REQUIRED, 'Number of process', '80'),
      new sfCommandOption('game', null, sfCommandOption::PARAMETER_REQUIRED, 'Game', false),
    ));

    $this->namespace        = 'steam';
    $this->name             = 'status';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [status|INFO] task does things.
Call it with:

  [php symfony status|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    $conn = new PDO('mysql:dbname=csgo-serv;host=localhost' ,'csgo-serv','N4F8RN1YML');

    $conn->query("SET NAMES 'UTF8'");

    if($options['game'] !== false)
    {
      $prepare = $conn->prepare('SELECT id, class FROM `steam_game` WHERE `class` = :class LIMIT 1');
      $prepare->bindParam(':class', $options['game'], PDO::PARAM_STR);
      $prepare->execute();
      if(!$Game = $prepare->fetch(PDO::FETCH_ASSOC))
      {
        throw new Exception(sprintf('Game object with class %s not exist', $options['game']));
      }
    }

    $filter_banned = 0;
    if(!empty($Game))
    {
      $prepare = $conn->prepare('SELECT steam_server.id AS id, ip, port, class, steam_server.slug as slug FROM `steam_server`
                                 LEFT JOIN steam_game ON steam_server.game_id = steam_game.id
                                 WHERE `is_banned` = :banned
                                        AND `game_id` = :game_id');
      $prepare->bindParam(':banned', $filter_banned, PDO::PARAM_BOOL);
      $prepare->bindParam(':game_id', $Game['id'], PDO::PARAM_INT);
      $prepare->execute();

      $list_server = $prepare->fetchAll(PDO::FETCH_ASSOC);
    }
    else
    {
      $prepare = $conn->prepare('SELECT steam_server.id AS id, ip, port, class, steam_server.slug as slug FROM `steam_server`
                                 LEFT JOIN steam_game ON steam_server.game_id = steam_game.id
                                 WHERE `is_banned` = :banned');
      $prepare->bindParam(':banned', $filter_banned, PDO::PARAM_INT);
      $prepare->execute();
      $list_server = $prepare->fetchAll(PDO::FETCH_ASSOC);
    }

    if(empty($list_server))
    {
      throw new Exception('Server list empty');
    }

    $count_servers = count($list_server);
    if(!$count_servers)
    {
      throw new Exception('No server');
    }

    $limit = round($count_servers / $options['process']);

    $list_pcntl_server = array();
    $key = 0;
    $i = 0;
    foreach($list_server as $server)
    {
      if($i  == $limit)
      {
        $key++;
        $i = 0;
      }

      if(!isset($list_pcntl_server[$key]))
      {
        $list_pcntl_server[$key] = array();
      }

      $list_pcntl_server[$key][] = $server;
      $i++;
    }

    unset($conn);
    foreach($list_pcntl_server as $key_tab => $liste)
    {
      $pid = pcntl_fork();
      if ($pid == -1)
      {
        throw new Exception('Duplication impossible');
      }
      else if ($pid)
      {

      }
      else
      {
        try
        {
          $conn = new PDO('mysql:dbname=csgo-serv;host=localhost' ,'csgo-serv','N4F8RN1YML');
        }
        catch(Exception $e)
        {
          echo $e->getMessage();
          die;
        }

        $conn->query("SET NAMES 'UTF8'");

        // le fils
        foreach($liste as $server)
        {
          $gq = new GameQ();
          $servers = array('server' => array($server['class'],
                                             $server['ip'],
                                             $server['port']
                                             )
          );

          $gq->addServers($servers);

          $gq->setOption('timeout', 400);
          $gq->setFilter('normalise');

          $results = $gq->requestData();
          unset($gq, $servers);

          if($results['server']['gq_online'] == 0)
          {
$country =  @geoip_country_name_by_name($server['ip']);
$isp = @geoip_org_by_name($server['ip']);

$country = ($country === false)?'Inconnu':$country;
$isp     = ($isp     === false)?'Inconnu':$isp;

	#	echo "test".$server['id']."\n";
            $set_online_false = 0;
            $prepare = $conn->prepare('UPDATE  `steam_server`
                                       SET  `is_online` =  :online, `country` = :country, `isp` = :isp
                                       WHERE  `id` = :id');
            $prepare->bindParam(':online', $set_online_false, PDO::PARAM_STR);
            $prepare->bindParam(':id', $server['id'], PDO::PARAM_INT);
            $prepare->bindParam(':isp', $isp, PDO::PARAM_STR);
            $prepare->bindParam(':country', $country, PDO::PARAM_STR);
            $prepare->execute();
          }
          else
          {
            $hostname = trim($results['server']['gq_hostname']);
            
            if(isset($results['server']['map']))
{
	    $trim_map = trim($results['server']['map']);
}
            if(empty($trim_map) || empty($hostname))
            {
              continue;
            }

            if( $results['server']['num_players'] > 0)
            {
              $prepare = $conn->prepare('INSERT INTO  `steam_server_history` (
                                          `id` ,
                                          `server_id` ,
                                          `players` ,
                                          `created_at`
                                          )
                                          VALUES (
                                          NULL ,  :server_id,  :players, NOW( ));');
              $prepare->bindParam(':server_id', $server['id'], PDO::PARAM_INT);
              $prepare->bindParam(':players', $results['server']['num_players'], PDO::PARAM_INT);
              $prepare->execute();
            }

/*
            ServerPlayerTable::getInstance()->updateLastPingByServer($server->id);

            foreach($results['server']['players'] AS $info)
            {
              $name = trim($info['name']);

              if(empty($name) || preg_match('/sourcetv/i', $name) || preg_match('#^bot#i', $name))
              {
                continue;
              }

              $ServerPlayer = ServerPlayerTable::getInstance()->getByServerAndNameNotTimeout($server->id, $name);
              if(!$ServerPlayer)
              {
                $ServerPlayer = new ServerPlayer();
                $ServerPlayer->server_id = $server->id;
              }

              $ServerPlayer->name = $name;
              $ServerPlayer->score = $info['score'];
              $ServerPlayer->last_ping = true;
              $ServerPlayer->save();
              $ServerPlayer->free(true);
              unset($ServerPlayer);
            }
*/
            $slug = $server['slug'];
            if(empty($slug))
            {
              $slug = strtolower(trim(preg_replace('/\W+/', '-', $hostname), '-'));
            }


            $set_online_true = 1;
            $password = ($results['server']['gq_password'])? true:false;
            $prepare = $conn->prepare('UPDATE  `steam_server`
                                       SET  `hostname` =  :hostname,
                                            `maxplayer` =  :maxplayer,
                                            `is_online` =  :online,
                                            `password`  = :password,
                                            `last_online` =  NOW(),
                                            `map` = :map,
                                            `players` = :players ,
                                            `slug` =  :slug
                                       WHERE  `id` = :id');
            $prepare->bindParam(':online', $set_online_true, PDO::PARAM_BOOL);
            $prepare->bindParam(':password', $password, PDO::PARAM_BOOL);
            $prepare->bindParam(':hostname', $hostname, PDO::PARAM_STR);
            $prepare->bindParam(':slug', $slug, PDO::PARAM_STR);
            $prepare->bindParam(':maxplayer', $results['server']['max_players'], PDO::PARAM_INT);
            $prepare->bindParam(':map', $results['server']['map'], PDO::PARAM_STR);
            $prepare->bindParam(':players', $results['server']['num_players'], PDO::PARAM_INT);
            $prepare->bindParam(':id', $server['id'], PDO::PARAM_INT);
            $prepare->execute();

            usleep(500);
          }
        }


        unset($conn);

        exit;
      }
    }

  }
}
