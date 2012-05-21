<?php


class ServerTable extends Doctrine_Table
{
    
  public static function getInstance()
  {
    return Doctrine_Core::getTable('Server');
  }

  /**
   * Requete qui vérifie si un server est déjà présent
   *
   * @param string $ip
   * @param port $port
   * @return integer
   */
  public function queryByIpAndPort($ip, $port)
  {
    return $this->createQuery('a')
                ->where('a.ip = ?', $ip)
                ->andWhere('a.port = ?', $port)
                ->limit(1);
  }

  /**
   * Retourne un server
   *
   * @param string $ip
   * @param port $port
   * @return integer
   */
  public function getByIpAndPort($ip, $port)
  {
    return $this->queryByIpAndPort($ip, $port)->execute();
  }

  /**
   * Vérifie si un server est déjà présent
   *
   * @param string $ip
   * @param port $port
   * @return integer
   */
  public function countByIpAndPort($ip, $port)
  {
    return $this->queryByIpAndPort($ip, $port)->count();
  }

  public function queryUnbanned()
  {
    return $this->createQuery('a')
                ->where('a.is_banned = ?', false);
  }


  public function countUnbanned()
  {
    return $this->queryUnbanned()
                ->count();
  }

  public function getUnbanned()
  {
    return $this->queryUnbanned()
                ->execute();
  }

  public function queryUnbannedByGame($game_id)
  {
    return $this->queryUnbanned()
                ->andWhere('a.game_id = ?', $game_id);
  }

  public function getUnbannedByGame($game_id)
  {
    return $this->queryUnbannedByGame($game_id)
                ->execute();
  }

  public function countUnbannedByGame($game_id)
  {
    return $this->queryUnbannedByGame($game_id)
                ->count();
  }

  public function queryList($game_id = null)
  {
    $q = $this->queryUnbanned()
              ->leftJoin('a.Game g')
              ->andWhere('a.is_online = ?', 1)
              ->andWhere('a.is_banned = ?', 0)
              ->orderBy('a.players DESC');
              
    if($game_id !== null)
    {
      $q->andWhere('g.id = ?', $game_id);
    }

    return $q;
  }
}