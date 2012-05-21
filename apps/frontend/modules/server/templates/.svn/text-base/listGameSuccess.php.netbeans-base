<?php use_helper('Text') ?>
<div>
  <h1>Serveurs de jeux <?php echo $game->getName() ?></h1>

    <h2>Recherchez un serveur</h2>

    <?php include_partial('find', array('form' => $form)) ?>


    <h2>Liste des serveurs</h2>

    <p>
      Il y a actuellement <?php echo $pager->getNbResults() ?> serveurs de jeux <?php echo $game->getName() ?> online.
    </p>

    <?php $route = 'server_list_game_page' ?>

    <?php if ($pager->haveToPaginate()): ?>
    <div class="spacing1">
      <div class="pagination center">
        <a href="<?php echo url_for($route, array('page' => 1, 'slug' => $game->getSlug())) ?>">
          <img src="/images/first.png" alt="Première page" />
        </a>

        <a href="<?php echo url_for($route, array('page' => $pager->getPreviousPage(), 'slug' => $game->getSlug())) ?>">
          <img src="/images/previous.png" alt="Previous page" title="Serveurs prévédents" />
        </a>

        <?php foreach ($pager->getLinks(20) as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
            <?php echo $page ?>
          <?php else: ?>
            <a href="<?php echo url_for($route, array('page' => $page, 'slug' => $game->getSlug())) ?>" class="pagination_link"><?php echo $page ?></a>
          <?php endif; ?>
        <?php endforeach; ?>

        <a href="<?php echo url_for($route, array('page' => $pager->getNextPage(), 'slug' => $game->getSlug())) ?>">
          <img src="/images/next.png" alt="Next page" title="Serveurs suivants" />
        </a>

        <a href="<?php echo url_for($route, array('page' => $pager->getLastPage(), 'slug' => $game->getSlug())) ?>">
          <img src="/images/last.png" alt="Last page" title="Dernière page" />
        </a>
      </div>
    </div>
    <?php endif; ?>

     <table width="100%">
     <thead>
      <tr>
        <th></th>
        <th>Hostname</th>
        <th>Adresse</th>
        <th>Joueurs</th>
        <th>Map</th>
        <th>Pass ?</th>
      </tr>
     </thead>
     <tbody>
    <?php foreach($pager->getResults() as $key => $server): ?>
        <tr class="<?php echo fmod($key, 2)?'pair':'impair' ?>">
          <td><?php echo image_tag(sprintf('game/%s.gif', $server->getGame()->getId()), array('alt' => $server->getGame()->getName())) ?></td>
          <td><a href="<?php echo url_for('server_view', $server) ?>"><span style="color: #837C79;"><?php echo truncate_text($server->getHostname(), 60) ?></span></a></td>
          <td><?php echo $server->getAddress() ?></td>
          <td><?php echo $server->getPlayers() ?> / <?php echo $server->getMaxPlayer() ?></td>
          <td><?php echo $server->getMap() ?></td>
          <td><?php echo ($server->getPassword())? 'oui':'non' ?></td>
        </tr>
    <?php endforeach; ?>
     </tbody>
   </table>

     <?php if ($pager->haveToPaginate()): ?>
    <div class="spacing1">
      <div class="pagination center">
        <a href="<?php echo url_for($route, array('page' => 1, 'slug' => $game->getSlug())) ?>">
          <img src="/images/first.png" alt="Première page" />
        </a>

        <a href="<?php echo url_for($route, array('page' => $pager->getPreviousPage(), 'slug' => $game->getSlug())) ?>">
          <img src="/images/previous.png" alt="Previous page" title="Serveurs prévédents" />
        </a>

        <?php foreach ($pager->getLinks(20) as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
            <?php echo $page ?>
          <?php else: ?>
            <a href="<?php echo url_for($route, array('page' => $page, 'slug' => $game->getSlug())) ?>" class="pagination_link"><?php echo $page ?></a>
          <?php endif; ?>
        <?php endforeach; ?>

        <a href="<?php echo url_for($route, array('page' => $pager->getNextPage(), 'slug' => $game->getSlug())) ?>">
          <img src="/images/next.png" alt="Next page" title="Serveurs suivants" />
        </a>

        <a href="<?php echo url_for($route, array('page' => $pager->getLastPage(), 'slug' => $game->getSlug())) ?>">
          <img src="/images/last.png" alt="Last page" title="Dernière page" />
        </a>
      </div>
    </div>
    <?php endif; ?>

  </div>
