<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
      <?php include_http_metas() ?>
      <?php include_metas() ?>
      <?php include_title() ?>
      <link rel="shortcut icon" href="/favicon.ico" />
      <?php include_stylesheets() ?>
      <?php include_javascripts() ?>
      <meta name="google-site-verification" content="ODTg6ageh3tnxxdh19k5bKZmGULngRNQ-qdR9Da-Hio" />
  </head>

  <body>

    <div class="container">

      <div id="menu">
        <ul id="onglets">
          <li><a href="<?php echo url_for('@homepage') ?>" class="first" title="Monitoring de serveurs de jeux">Accueil</a></li>
          <li><a href="<?php echo url_for('@server_list_game?slug=counter-strike-source') ?>" title="Serveur de jeux css">Counter-Strike: Source</a></li>
          <li><a href="<?php echo url_for('@server_list_game?slug=team-fortress-2') ?>" title="Serveur de jeux tf2">Team Fortress 2</a></li>
	  <li><a href="<?php echo url_for('@server_list_game?slug=day-of-defeat-source') ?>" title="Serveur de jeux dods">Day of Defeat: Source</a></li>
          <li><a href="<?php echo url_for('@statistics') ?>" title="Statistiques">Statistiques</a></li>
	  <li><a href="http://www.terra-nova-serie.fr" title="Terra Nova">Série Terra Nova</a></li>
        </ul>
      </div>

      <div id="content">

        <?php if($sf_user->hasFlash('error')): ?>
          <div class="notification note-error center">
            <a href="#" class="close" title="Close notification"><span>close</span></a>
            <span class="icon"></span>
            <p><?php echo $sf_user->getFlash('error') ?></p>
          </div>
        <?php elseif($sf_user->hasFlash('notice')): ?>
          <div class="notification note-success center">
            <a href="#" class="close" title="Close notification"><span>close</span></a>
            <span class="icon"></span>
            <p><?php echo $sf_user->getFlash('notice') ?></p>
          </div>
        <?php endif; ?>

        <?php echo $sf_content ?>
        <div class="barre"></div>
      </div>

    </div>

    <div id="footer">
      <a href="<?php echo url_for('@server_list_game?slug=counter-strike-source') ?>" title="serveur css">Counter-Strike: Source</a> -
      <a href="<?php echo url_for('@server_list_game?slug=team-fortress-2') ?>" title="serveur tf2">Team Fortress 2</a> -
      <a href="<?php echo url_for('@server_list_game?slug=day-of-defeat-source') ?>" title="serveur dods">Day of Defeat: Source</a>
      <br />
      © 2010 - 2011 jeux-steam.fr - Tous droits réservés
    </div>

</body>
</html>