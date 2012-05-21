<?php use_helper('Facebook') ?>
<div>
    <h1>Serveurs de jeux</h1>

    <p>
      Bienvenue sur <em>Jeux Steam</em> !!!<br /><br />

      Vous recherchez un serveur pour jouer ? Vous souhaitez monitorer votre serveur ?! <em>Jeux Steam</em> réponds à ces besoins !<br /><br />

      Nous monitorons tous les serveurs européeens des jeux <strong>Counter-Strike: Source</strong>, <strong>Day of Defeat: Source</strong> et <strong>Team Fortress 2</strong>.
    </p>

    <?php if(!$sf_request->hasParameter('page')): ?>
   
    <div class="fb_like">
    <p><strong>Merci de nous aider en nous recommandant:</strong><br /></p>   
   <?php echo facebook_like() ?>
    </div>
    <?php endif; ?>

    <h2>Pour bientot...</h2>
    <ul>
      <li>Signature web plus poussée...</li>
      <li>Moteur de recherche de joueurs</li>
      <li>Statistiques de fréquentation de chaques serveurs</li>
      <li>Statistiques de disponibilité de chaques sevreurs</li>
      <li>Rank pour vos serveurs</li>
    </ul>


    <h2>Recherchez un serveur</h2>

    <?php include_partial('find', array('form' => $form)) ?>


    <h2>Liste des serveurs</h2>

    <p>
      Il y a actuellement <?php echo $pager->getNbResults() ?> serveurs de jeux online.
    </p>

    <?php include_partial('table', array('pager' => $pager, 'route' => 'server_list_page')) ?>

  </div>