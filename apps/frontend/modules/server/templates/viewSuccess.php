<?php use_helper('I18N') ?>

<div>
  <?php if(!$results['server']['gq_online']): ?>
    <h1><?php echo trim($server->getHostname()) ?></h1>
  <?php else: ?>
    <h1><?php echo trim($results['server']['gq_hostname']) ?></h1>
  <?php endif; ?>

    <h2>Recherchez un serveur</h2>

    <?php include_partial('find', array('form' => $form)) ?>

    <h2>Signature</h2>

    <p>
      Nous mettons à votre disposition une signature que vous pouvez facilement inclure sur les différents sites / forums :
    </p>

    <div class="signature">
      <img src="<?php echo url_for('server_signature', $server) ?>" alt="<?php $server->getHostname() ?>" />

      <p>
        <input size="60" type="text" value='<a href="<?php echo url_for('server_view', $server, true) ?>" title="<?php echo $results['server']['gq_online']?$results['server']['gq_hostname']:$server->getHostname() ?>"><img src="<?php echo url_for('server_signature', $server, true) ?>" alt="<?php echo $results['server']['gq_online']?$results['server']['gq_hostname']:$server->getHostname() ?>" /></a>' /><br />
        <input size="60" type="text" value='[url=<?php echo url_for('server_view', $server, true) ?>][img]<?php echo url_for('server_signature', $server, true) ?>[/img][/url]' />
      </p>
    </div>

    <p>
      Vous pouvez aussi bénéficiez d'un serveur status pour votre site web, vous trouverez plus d'informations en bas de la page.
    </p>

    <?php if($server->game_id == 1): ?>
     <h2><a style="color: #277AF5" href="http://www.mtxserv.fr" title="serveur css">Location serveur css</a></h2>
      <p>Si vous aussi vous recherchez un prestataire de qualité pour votre <strong>serveur de jeux counter-strike source</strong>, alors n'hésitez pas ! Rendez vous sur le site de notre partenaire, l'association mysTix et son service mTxServ.</p>
      <p style="margin-top: 10px;">mTxServ à été décerné du label qualité qualité par l'association Gamer Certified.</p>
      <p style="text-align: center;margin-top: 15px;"><a href="http://www.mtxserv.fr" title="location serveur css"><img alt="location serveur css" src="http://www.dodfrance.com/images/partenaires/logo_mtxserv.png" /></a></p>
    <?php endif; ?>
    <?php if($server->game_id == 2): ?>
     <h2>Location serveur dods</h2>
      <p>Si vous aussi vous recherchez un prestataire de qualité pour votre <strong> serveur de jeux day of defeat source</strong>, alors n'hésitez pas ! Rendez vous sur le site de notre partenaire, l'association mysTix et son service mTxServ.</p>
      <p style="margin-top: 10px;">mTxServ à été décerné du label qualité qualité par l'association Gamer Certified.</p>
      <p style="text-align: center; margi-top: 15px;"><a href="http://www.mtxserv.fr" title="location serveur css"><img alt="location serveur css" src="http://www.dodfrance.com/images/partenaires/logo_mtxserv.png" /></a></p>
    <?php endif; ?>
    <?php if($server->game_id == 3): ?>
     <h2>Location serveur tf2</h2>
      <p>Si vous aussi vous recherchez un prestataire de qualité pour votre <strong>serveur de jeux team fortress 2</strong>, alors n'hésitez pas ! Rendez vous sur le site de notre partenaire, l'association mysTix et son service mTxServ.</p>
      <p style="margin-top: 10px;">mTxServ  �é été décerné du label qualité qualité par l'association Gamer Certified.</p>
      <p style="text-align: center; margin-top: 15px;"><a href="http://www.mtxserv.fr" title="location serveur css"><img alt="location serveur css" src="http://www.dodfrance.com/images/partenaires/logo_mtxserv.png" /></a></p>
    <?php endif; ?>


    <h2>Serveur monitor</h2>

    <?php if(!$results['server']['gq_online']): ?>
      <p class="center">Ce serveur est momentanément OFFLINE.</p>
    <?php endif; ?>

    <table style="width: 400px; margin: auto; margin-top: 40px;" id="infos_server">
      <tr class="impair">
        <th><strong>Adresse:</strong></th>
        <td><?php echo $server->getIp() ?>:<?php echo $server->getPort() ?></td>
      </tr>
     <tr>
      <th><strong>Localisation:</strong></th>
      <td><?php echo $server->country ?></td>
     </tr>
     <tr class="impair">
      <th><strong>Prestataire:</strong></th>
      <td><?php echo $server->isp ?></td>
     </tr>
      <tr>
        <th><strong>Jeu:</strong></th>
        <td><?php echo $server->getGame()->getName() ?></td>
      </tr>
      <tr class="impair">
        <th><strong>Carte:</strong></th>
        <td><?php echo trim($results['server']['map']) ?></td>
      </tr>
      <tr>
        <th><strong>Joueurs:</strong></th>
        <td><?php echo $results['server']['num_players'] ?> / <?php echo $server->getMaxPlayer() ?></td>
      </tr>
      <tr class="impair">
        <th><strong>Mot de passe:</strong></th>
        <td><?php echo ($results['server']['gq_password'])? 'oui':'non' ?></td>
      </tr>
    </table>

    <table style="width: 500px; margin: auto; margin-top: 40px;">
      <thead>
        <tr>
          <th>Joueur</th>
          <th>Score</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($results['server']['players'] AS $key => $info): ?>
          <?php $name = trim($info['name']); ?>
          <tr class="<?php echo fmod($key, 2)?'pair':'impair' ?>">
             <td style="width:70%;"><?php echo $name ?></th>
             <td><div style="text-align: center;"><?php echo $info['score'] ?></div></th>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>

    <h2>Serveur status pour votre site</h2>
    <div>
    				<p>Vous pouvez bénéficier pour votre site web d'un serveur status. Pour l'utiliser, copiez simplement ce code HTML dans votre page.</p>
			        <p><strong>Personnalisez votre widget</strong></p>
			        <div style="width: 30%; margin: auto"><p>
			            <form method="post" action="<?php url_for('server_view', $server) ?>">
			              <table>
			                <tr>
			                  <td><?php echo __('Texte') ?> : </td>
			                  <td><input type="text" name="color" id="color" value="<?php echo $color ?>" style="width: 55px;" /></td>
			                </tr>
			                <tr>
			                  <td><?php echo __('Fond') ?> : </td>
			                  <td><input type="text" name="background" id="background" value="<?php echo $background ?>" style="width: 55px;" /></td>
			                </tr>
			                <tr>
			                  <td><?php echo __('Bordure') ?> : </td>
			                  <td><input type="text" name="border" id="border" value="<?php echo $border ?>" style="width: 55px;" /></td>
			                </tr>
			              </table>

			                <p><input type="submit" value="<?php echo __('Générer !') ?>" /></p>
			            </form>
			        </p></div>

                    <div class="center">
			        <p style="margin-top: 30px;"></p>
			        <div style="width: 450px; margin: auto">
			            <table>
			              <tr>
			                <td style="text-align: center"><strong>Sans joueur</strong></td>
			                <td style="text-align: center"><strong>Avec joueurs</strong></td>
			              </tr>
			              <tr>
			                <td valign="top"><iframe src="<?php echo url_for('@server_monitor?id='.$server->getId().'&color='.$color.'&background='.$background.'&border='.$border) ?>" frameborder="0" scrolling="no" width="200" height="160"></iframe></td>
			                <td valign="top"><iframe src="<?php echo url_for('@server_monitor?id='.$server->getId().'&players=1&color='.$color.'&background='.$background.'&border='.$border) ?>" frameborder="0" scrolling="no" width="200" height="270"></iframe></td>
			              </tr>
			            </table>
			        </div>

			        <p style="margin-top: 30px;"><strong><?php echo __('Code HTML') ?> - <?php echo __('sans les joueurs') ?></strong></p>
			        <p>
			            <input type="text" size="70" value='<iframe src="<?php echo url_for('@server_monitor?id='.$server->getId().'&color='.$color.'&background='.$background.'&border='.$border, true) ?>" frameborder="0" scrolling="no" width="200" height="160"></iframe>' readonly />
			        </p>
			        <p><strong><?php echo __('Code HTML') ?> - <?php echo __('avec les joueurs') ?></strong></p>
			        <p>
			            <input type="text" size="70" value='<iframe src="<?php echo url_for('@server_monitor?id='.$server->getId().'&players=1&color='.$color.'&background='.$background.'&border='.$border, true) ?>" frameborder="0" scrolling="no" width="200" height="270"></iframe>' readonly />
			        </p>
			        </div>

    </div>
</div>


<script language="JavaScript">

$(document).ready(function() {
	$('#color, #border, #background').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			$(el).val(hex);
			$(el).ColorPickerHide();
		},
		onBeforeShow: function () {
			$(this).ColorPickerSetColor(this.value);
		}
	})
	.bind('keyup', function(){
		$(this).ColorPickerSetColor(this.value);
	});
});

</script>
