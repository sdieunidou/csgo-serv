<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
      <?php include_http_metas() ?>
      <?php include_metas() ?>
      <?php include_title() ?>
      <link rel="shortcut icon" href="/favicon.ico" />
      <?php include_stylesheets() ?>
      <?php include_javascripts() ?>
      <meta name="google-site-verification" content="45IyRlGMDnj_4vlh4oGXnsNUGnTrSMF_qCM7WztXyD0-qdR9Da-Hio" />
  </head>

  <body>

    <div class="container">

      <div id="menu">
        <ul id="onglets">
          <li><a href="<?php echo url_for('@homepage') ?>" class="first" title="Serveur de jeux">Accueil</a></li>
          <li><a href="<?php echo url_for('@server_list_game?slug=counter-strike-source') ?>" title="Serveur CSS">Counter-Strike: Source</a></li>
          <li><a href="<?php echo url_for('@server_list_game?slug=counter-strike-go') ?>" title="Serveur CS:GO">Counter-Strike: Go</a></li>
          <li><a href="<?php echo url_for('@statistics') ?>" title="Statistiques">Statistiques</a></li>
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
      <a href="<?php echo url_for('@server_list_game?slug=counter-strike-go') ?>" title="serveur tf2">Counter-Strike: GO</a> -
      <br />
      © 2011 - 2012 csgo-serv.fr - Tous droits réservés
    </div>

</body>
</html>
