<?php

/**
 * server actions.
 *
 * @package    jeuxsteam
 * @subpackage server
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class serverActions extends sfActions
{
 /**
  * Liste des serveurs
  *
  * @param sfRequest $request A request object
  */
  public function executeList(sfWebRequest $request)
  {
    $this->form = new ServerFormFilter();

    $this->pager = new sfDoctrinePager('Server', sfConfig::get('app_server_list', 50) );
    $this->pager->setQuery(ServerTable::getInstance()->queryList());
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();

    $page = $request->getParameter('page', 1);
    if($page > 1)
    {
      $this->getResponse()->prependTitle(sprintf('Liste serveurs de jeux - page %d', $page));
      $this->getResponse()->prependDescription(sprintf('Retrouvez la liste des serveurs de jeux monitorés - page %d', $page));
    }
  }

 /**
  * Liste des serveurs d'un jeu
  *
  * @param sfRequest $request A request object
  */
  public function executeListGame(sfWebRequest $request)
  {
    $this->game = $this->getRoute()->getObject();

    $this->form = new ServerFormFilter();

    $this->pager = new sfDoctrinePager('Server', sfConfig::get('app_server_list', 50) );
    $this->pager->setQuery(ServerTable::getInstance()->queryList($this->game->getId()));
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();

    $page = $request->getParameter('page', 1);
    if($page > 1)
    {
    $this->getResponse()->prependTitle(sprintf('Serveurs de jeux %s - page %d', $this->game->getName(), $page));
    $this->getResponse()->prependDescription(sprintf('Retrouvez la liste des serveurs de jeux monitorés du jeu %s - page %d', $this->game->getName(), $page));
    }
    else
    {
    $this->getResponse()->prependTitle(sprintf('Serveurs de jeux %s', $this->game->getName()));
    $this->getResponse()->prependDescription(sprintf('Retrouvez la liste des serveurs de jeux monitorés du jeu %s', $this->game->getName()));
    }
  }

  /**
   * recherche
   *
   * @param sfWebRequest $request
   */
  public function executeFind(sfWebRequest $request)
  {
    $this->form = new ServerFormFilter();

    $bind = $request->getParameter($this->form->getName(), false);
    if(!$bind)
    {
      $bind = $this->getUser()->getAttribute('find_values');
    }
    else
    {
      $this->getUser()->setAttribute('find_values', $bind);
    }

    $this->form->bind($bind);
    if($this->form->isValid())
    {
      $query = $this->form->getQuery();
      $query->leftJoin($query->getRootAlias().'.Game g');

      $this->pager = new sfDoctrinePager('Server', sfConfig::get('app_server_list', 50) );
      $this->pager->setQuery($query);
      $this->pager->setPage($request->getParameter('page', 1));
      $this->pager->init();
    }

    $this->getResponse()->prependTitle('Recherche serveurs de jeux');
    $this->getResponse()->prependDescription('Trouvez votre serveur de jeux favoris !!!');
  }

  public function executeView(sfWebRequest $request)
  {
    $this->server = $this->getRoute()->getObject();
    $this->form = new ServerFormFilter();

        if(!$request->hasParameter('color'))
            $this->color = '1e3983';
        else
            $this->color = $request->getParameter('color');

        if(!$request->hasParameter('background'))
            $this->background = 'bacbe6';
        else
            $this->background = $request->getParameter('background');

        if(!$request->hasParameter('border'))
            $this->border = '486ba2';
        else
            $this->border = $request->getParameter('border');

    $gq = new GameQ();
    $servers = array('server' => array($this->server->getGame()->getClass(),
                                       $this->server->getIp(),
                                       $this->server->getPort()
                                       )
    );

    $gq->addServers($servers);
    $gq->setOption('timeout', 500);
    $gq->setFilter('normalise');

    $this->results = $gq->requestData();

    $this->getResponse()->prependTitle(sprintf('Serveur %s', $this->server->getHostname()));
    $this->getResponse()->prependDescription(sprintf('Statistiques du serveur %s', $this->server->getHostname()));
  }

  public function executeSignature(sfWebRequest $request)
  {
    $this->server = $this->getRoute()->getObject();

    $gq = new GameQ();
    $servers = array('server' => array($this->server->getGame()->getClass(),
                                       $this->server->getIp(),
                                       $this->server->getPort()
                                       )
    );

    $gq->addServers($servers);
    $gq->setOption('timeout', 500);
    $gq->setFilter('normalise');

    $results = $gq->requestData();

    $image = imagecreatefrompng(sprintf('/var/www/jeux-steam.fr/web/images/signature/%s.png', $this->server->getGame()->getClass()));

    $textcolor = imagecolorallocate($image, 0, 0, 0);

    imagestring($image, 2, 10, 20, 'Hostname:', $textcolor);
    imagestring($image, 2, 70, 20, wordwrap($results['server']['gq_online']?$results['server']['gq_hostname']:$this->server->getHostname(), 15), $textcolor);


    if(!$results['server']['gq_online'])
    {
        imagestring($image, 2, 10, 30, 'Serveur OFFLINE', $textcolor);
    }
    else
    {
        imagestring($image, 2, 10, 30, 'Map:', $textcolor);
        imagestring($image, 2, 70, 30, trim($results['server']['map']), $textcolor);

        imagestring($image, 2, 10, 40, 'Joueurs:', $textcolor);
        imagestring($image, 2, 70, 40, sprintf('%d/%d', $results['server']['num_players'], $this->server->getMaxPlayer()), $textcolor);

        imagestring($image, 2, 10, 50, 'Password?', $textcolor);
        imagestring($image, 2, 70, 50, ($results['server']['gq_password'])? 'oui':'non', $textcolor);
    }

    header ("Content-type: image/png");
    imagepng($image);

    return sfView::NONE;
  }

  public function executeMonitor(sfWebRequest $request)
  {
    $this->server = $this->getRoute()->getObject();

    $gq = new GameQ();
    $servers = array('server' => array($this->server->getGame()->getClass(),
                                       $this->server->getIp(),
                                       $this->server->getPort()
                                       )
    );

    $gq->addServers($servers);
    $gq->setOption('timeout', 500);
    $gq->setFilter('normalise');

    $this->results = $gq->requestData();

        if(!$request->hasParameter('color'))
            $this->color = '1e3983';
        else
            $this->color = $request->getParameter('color');

        if(!$request->hasParameter('background'))
            $this->background = 'bacbe6';
        else
            $this->background = $request->getParameter('background');

        if(!$request->hasParameter('border'))
            $this->border = '486ba2';
        else
            $this->border = $request->getParameter('border');

        if($request->hasParameter('players'))
            $this->showPlayers = true;
        else
            $this->showPlayers = false;

    $this->setLayout(false);
  }
}
