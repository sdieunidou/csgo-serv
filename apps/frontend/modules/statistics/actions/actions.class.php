<?php

/**
 * statistics actions.
 *
 * @package    jeuxsteam
 * @subpackage statistics
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class statisticsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeServer(sfWebRequest $request)
  {
    $debut =  date('Y-m-d', time() - (15 *  86400));
    $end   =  date('Y-m-d', time() - 86400);

    $this->calendar = new CalendarStatsServer($debut, $end);
    $this->calendar->generate();
  }
}
