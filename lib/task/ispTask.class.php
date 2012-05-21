<?php

class ispTask extends sfBaseTask
{
  private
    $counter = 1,
    $indicators = array('-', '\\', '|', '/');

  protected function configure()
  {
    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'doctrine'),
      // add your own options here
    ));

    $this->namespace        = 'steam';
    $this->name             = 'isp';
    $this->briefDescription = 'Recupere la liste des serveurs depuis le master';
    $this->detailedDescription = <<<EOF
The [list|INFO] task does things.
Call it with:

  [php symfony list|INFO]
EOF;
  }

  /**
   *
   * @param array $arguments
   * @param array> $options
   */
  protected function execute($arguments = array(), $options = array())
  {
    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $connection      = $databaseManager->getDatabase($options['connection'])->getConnection();

    $list_server = ServerTable::getInstance()->createQuery('a')->select('a.id, a.ip, a.isp')->where('a.is_online = 1')->andWhere('a.isp = ?', '')->fetchArray();

    $count = count($list_server);
    foreach($list_server as $key => $server)
    {
      $isp = geoip_isp_by_name($server['ip']);
      $isp = (!$isp)?'Inconnu':$isp;
      if($isp != $server['isp'])
      {
        Doctrine_Query::create()->update('Server')->set('isp', '?', $isp)->where('id = ?', $server['id'])->execute();
      }

      $this->progressBar($key, $count);
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
