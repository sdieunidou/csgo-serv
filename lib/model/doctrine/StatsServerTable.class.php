<?php


class StatsServerTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('StatsServer');
    }

  public function getByDay($day = null)
  {
    if($day === null)
    {
      $day = date('d-m-Y');
    }

    $day = explode('-', $day);
    if(strlen($day[0]) == 1) $day[0] = '0'.$day[0];
    $day = implode('-', $day);    

    return $this->createQuery('a')
                ->andWhere('DATE_FORMAT(a.created_at, \'%d-%m-%Y\') = ?', $day)
                ->execute();
  }
}
