<?php

/**
 * Génération de statistiques
 * sur le nombre de quizz créés / jours
 */
class CalendarStatsServer
{
  protected $date_start;
  protected $date_end;

  protected $stats = array();
  protected $stats_game = array();


  /*
   * Constructeur
   *
   * @param date $date_start
   * @param date $date_end
   */
  public function __Construct($date_start, $date_end)
  {
    $this->date_start = $date_start;
    $this->date_end   = $date_end;
  }
  
  /**
   *
   * Retourne le nombre de jours de chaques mois
   *
   * @return array
   */
  protected function getNbJours($year)
  {
    return (($year % 4) == 0)? array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31) : array(31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
  }

  /**
   * Calcule les statistiques
   *
   */
  public function generate()
  {
    // extract dates
    $debut   = explode('-', $this->date_start);
    $end     = explode('-', $this->date_end);

    $nbrjour = $this->getNbJours($debut[0]);

    // YEAR
    for($year = $debut[0]; $year <= $end[0]; $year++)
    {
      $month = (int) ($debut[0] == $year)? $debut[1]:1;

      // MONTH
      for($month; $month <= 12; $month ++)
      {
        $day = ($debut[0] == $year && $debut[1] == $month)? $debut[2]:1;

        // DAY
        for($day; $day <= $nbrjour[($month - 1)]; $day++)
        {
          $current_date = sprintf('%s-%s-%s', $day, $month, $year);

          $this->stats[$current_date] = 0;
          $this->stats_game[$current_date] = array();
          $_s = StatsServerTable::getInstance()->getByDay($current_date);
          if($_s->count())
          {
            foreach($_s as $object)
            {
              $this->stats_game[$current_date][$object->getGameId()] = $object->getTotalServer();
              $this->stats[$current_date] += $object->getTotalServer();
            }
          }

          // On s'arrete là si on est arrivé à $dayate_end (check jour/mois/annee)
          if($month == $end[1] && $year == $end[0] && $day == $end[2])
          {
            break;
          }
        }

        // On s'arrete là si on est arrivé à $dayate_end (check mois/annee)
        if($month == $end[1] && $year == $end[0])
        {
          break;
        }
      }
    }

  }

  /**
   * Retourne la période sur laquelle est générée les stastiques
   *
   * @param boolean $highchart
   * @return array
   */
  public function getPeriode($highchart = false)
  {
    if(!$highchart)
    {
      return array_keys($this->stats);
    }

    $list_date = array();
    foreach(array_keys($this->stats) as $date)
    {
      $date = explode('-', $date);
      unset($date[count($date)-1]);
      $date = implode('-', $date);

      $list_date[] = $date;
    }

    $return = $highchart?json_encode($list_date):$list_date;
    return $return;
  }

  /**
   * Retourne un tableau contenant toutes les statistiques / jours
   *
   * @return array
   */
  public function getStats()
  {
    return $this->stats;
  }

  /**
   *
   * @return 
   */
  public function getDataServeur()
  {
    return json_encode(array_values($this->getStats()));
  }

  /**
   *
   * @return
   */
  public function getDataServeurGame($game_id)
  {
    $list_data = array_values($this->stats_game);

    $list_data_tmp = array();
    foreach($list_data as $key => $data)
    {
      $list_data_tmp[$key] = isset($data[$game_id])?(int)$data[$game_id]:0;
    }
    return json_encode($list_data_tmp);
  }
}
?>
