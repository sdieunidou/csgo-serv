<?php

class statsTask extends sfBaseTask
{
  protected function configure()
  {
    // // add your own arguments here
    // $this->addArguments(array(
    //   new sfCommandArgument('my_arg', sfCommandArgument::REQUIRED, 'My argument'),
    // ));

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'doctrine'),
      // add your own options here
    ));

    $this->namespace        = 'steam';
    $this->name             = 'stats';
    $this->briefDescription = 'generate stats';
    $this->detailedDescription = <<<EOF
The [stats|INFO] task does things.
Call it with:

  [php symfony stats|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    // initialize the database connection
    $conn = new PDO('mysql:dbname=jeuxsteam;host=localhost' ,'root','11794591');
    $conn->query("SET NAMES 'UTF8'");

    // STATS SERVER
    $date_filter = date('Ymd', time() - 86400);
    $date_filter_2 = date('Ymd');

    $prepare = $conn->prepare('SELECT id, game_id FROM `steam_server`
                                WHERE DATE_FORMAT(last_online, \'%Y%m%d\') > :filter');
    $prepare->bindParam(':filter', $date_filter, PDO::PARAM_STR);
    $prepare->execute();

    $stats = array(1 => 0, 2 => 0, 3 => 0);
    while($row = $prepare->fetch(PDO::FETCH_ASSOC))
    {
      $stats[$row['game_id']]++;
    }

    foreach($stats as $game_id => $value)
    {
      $prepare = $conn->prepare('INSERT INTO  `steam_stats_server` (
                                    `id` ,
                                    `game_id` ,
                                    `total_server` ,
                                    `created_at`
                                    ) VALUES (NULL ,  :game_id,  :value, NOW( ));');
      $prepare->bindParam(':game_id', $game_id, PDO::PARAM_INT);
      $prepare->bindParam(':value', $value, PDO::PARAM_INT);
      $prepare->execute();
    }




    // STATS SERVER
    $date_filter = date('Ymd', time() - 86400);
    $date_filter_2 = date('Ymd');

    $prepare = $conn->prepare('SELECT count(isp) as cpt, isp FROM `steam_server`
				WHERE DATE_FORMAT(last_online, \'%Y%m%d\') > :filter
				GROUP BY isp
				ORDER BY  `cpt` DESC LIMIT 20');
    $prepare->bindParam(':filter', $date_filter, PDO::PARAM_STR);
    $prepare->execute();

    $rows = $prepare->fetchAll(PDO::FETCH_ASSOC);

    foreach($rows as $row)
    {
      $prepare = $conn->prepare('INSERT INTO  `steam_stats_gsp` (
                                    `id` ,
                                    `name` ,
                                    `total` ,
                                    `created_at`
                                    ) VALUES (NULL ,  :name,  :value, NOW( ));');
      $prepare->bindParam(':name', $row['isp'], PDO::PARAM_INT);
      $prepare->bindParam(':value', $row['cpt'], PDO::PARAM_INT);
      $prepare->execute();
    }


  }

  /**
   * Output a progress bar
   *
   * @param integer $current The current iteration, must always be 0 on first call
   * @param integer $total Total number of iterations this progressbar will handle
   * @param integer $size Width of the progress bar in characters
   **/
  public function progressBar($current=0, $total=100, $section = 'progress', $size=80)
  {
    // Don't do anything if this isn't a commandline task or verbosity is off
    if (is_null($this->commandApplication) || !$this->commandApplication->isVerbose())
    {
      return;
    }

    $perc = ($current/$total)*100;

    // Show activity by cycling through the array of indicators on each iteration
    $this->counter += $this->counter === count($this->indicators) ? -3 : 1;
    $indicator = $this->indicators[$this->counter - 1];

    // if it's not first iteration, remove the previous bar by outputting a
    // backspace characters
    if($current > 0) echo str_repeat("\x08", $size);

    // generate progess bar
    $progress = floor($current / $total * ($size - 11));
    $soFar      = str_repeat('=', $progress);
    $remaining  = str_repeat(' ', $size - 11 - $progress);

    // prefix the bar with a (padded) percent progress and activity indicator
    // and wrap it in square brackets, with a greater-than as the current
    // position indicator
    printf(" %s %3u%% [%s>%s]",$indicator,$perc,$soFar,$remaining);

    // if it's the end, add a new line
    if($current == $total)
    {
      echo "\n";
    }
  }
}
