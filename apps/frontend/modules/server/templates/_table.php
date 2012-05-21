<?php use_helper('Text') ?>

    <?php if ($pager->haveToPaginate()): ?>
    <div class="spacing1">
      <div class="pagination center">
        <a href="<?php echo url_for($route, array('page' => 1)) ?>">
          <img src="/images/first.png" alt="Première page" />
        </a>

        <a href="<?php echo url_for($route, array('page' => $pager->getPreviousPage())) ?>">
          <img src="/images/previous.png" alt="Previous page" title="Serveurs prévédents" />
        </a>

        <?php foreach ($pager->getLinks(20) as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
            <?php echo $page ?>
          <?php else: ?>
            <a href="<?php echo url_for($route, array('page' => $page)) ?>" class="pagination_link"><?php echo $page ?></a>
          <?php endif; ?>
        <?php endforeach; ?>

        <a href="<?php echo url_for($route, array('page' => $pager->getNextPage())) ?>">
          <img src="/images/next.png" alt="Next page" title="Serveurs suivants" />
        </a>

        <a href="<?php echo url_for($route, array('page' => $pager->getLastPage())) ?>">
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
        <a href="<?php echo url_for($route, array('page' => 1)) ?>">
          <img src="/images/first.png" alt="Première page" />
        </a>

        <a href="<?php echo url_for($route, array('page' => $pager->getPreviousPage())) ?>">
          <img src="/images/previous.png" alt="Previous page" title="Serveurs prévédents" />
        </a>

        <?php foreach ($pager->getLinks(20) as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
            <?php echo $page ?>
          <?php else: ?>
            <a href="<?php echo url_for($route, array('page' => $page)) ?>" class="pagination_link"><?php echo $page ?></a>
          <?php endif; ?>
        <?php endforeach; ?>

        <a href="<?php echo url_for($route, array('page' => $pager->getNextPage())) ?>">
          <img src="/images/next.png" alt="Next page" title="Serveurs suivants" />
        </a>

        <a href="<?php echo url_for($route, array('page' => $pager->getLastPage())) ?>">
          <img src="/images/last.png" alt="Last page" title="Dernière page" />
        </a>
      </div>
    </div>
    <?php endif; ?>