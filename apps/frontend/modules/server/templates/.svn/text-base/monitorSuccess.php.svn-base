<?php use_helper('I18N') ?>

<?php if (!$results['server']['gq_online']) { ?>
<table width="180">
  <tr>
    <td><div style="text-align:center;"><u><?php echo __('Serveur OFFLINE') ?></u></div></td>
  </tr>
</table>
<?php } else { ?>

<style>
#status {
    font-family:Arial;
    font-size:8pt;
    color: #<?php echo $color; ?>;
    border:1px solid #<?php echo $border; ?>;
    margin: auto;
    text-align:left;
    max-width:200px;
    background: #<?php echo $background; ?>;
}
<?php if($showPlayers) { ?>
#players {
    font-family:Arial;
    font-size:8pt;
    color: #<?php echo $color; ?>;
}
<?php } ?>
a {
    color: #<?php echo $color; ?>;
    text-decoration:none;
}
</style>
<?php if($server->getGameId() == 10): ?>
<table width="180" id="status">
  <tr>
    <td colspan="2"><div style="text-align:center;"><u><?php echo $results['server']['gq_hostname'] ?></u></div></td>
  </tr>
  <tr>
    <td style="width:34%;"><strong><?php echo __('IP') ?> : </strong></td>
    <td><a class="noir" href="steam://connect/<?php echo $results['server']['gq_address'] ?>:<?php echo $results['server']['gq_port'] ?>"><?php echo $results['server']['gq_address'] ?>:<?php echo $results['server']['gq_port'] ?></a></td>
  </tr>
  <tr>
    <td><strong><?php echo __('Jeu') ?> :</strong></td>
    <td><?php echo $results['server']['gq_type'] ?></td>
  </tr>
  <tr>
    <td><strong><?php echo __('Joueurs') ?> : </strong></td>
    <td><?php echo $results['server']['gq_numplayers'] ?>/<?php echo $results['server']['sv_maxclients'] ?>	</td>
  </tr>
  <tr>
    <td><strong><?php echo __('Carte') ?> :</strong></td>
    <td><?php echo $results['server']['mapname'] ?></td>
  </tr>
  <tr>
    <td><strong><?php echo __('Pass') ?> :</strong></td>
    <td><?php echo ($results['server']['gq_password'])? __('oui'):__('non') ?></td>
  </tr>
<?php if($showPlayers) : ?>
  <tr>
    <td colspan="2">
        <div style="border:1px solid #93abcf;height:100px;margin-bottom:3px;overflow:auto">
        <table width="100%" id="players">
          <tr>
             <td style="width:70%;"><strong><u><?php echo __('Name') ?></u></strong></th>
             <td><div style="text-align: center;"><strong><u><?php echo __('Score') ?></u></strong></div></th>
          </tr>
          <?php foreach($results['server']['players'] AS $player => $info) { ?>
          <tr>
             <td style="width:70%;"><?php echo substr($info['name'], 0, 16) ?></th>
             <td><div style="text-align: center;"><?php echo $info['score'] ?></div></th>
          </tr>
          <?php } ?>
        </table></div>
    </td>
  </tr>
<?php endif; ?>
  <tr>
    <td colspan="2"><div align="right"><a href="http://www.mtxserv.fr" target="_blank"><strong>mysTix Serveurs</strong></a><strong> </strong></div></td>
  </tr>
</table>
<?php else: ?>
<table width="180" id="status">
  <tr>
    <td colspan="2"><div style="text-align:center;"><u><?php echo $results['server']['gq_hostname'] ?></u></div></td>
  </tr>
  <tr>
    <td style="width:34%;"><strong><?php echo __('IP') ?> : </strong></td>
    <td><a class="noir" href="steam://connect/<?php echo $results['server']['gq_address'] ?>:<?php echo $results['server']['gq_port'] ?>"><?php echo $results['server']['gq_address'] ?>:<?php echo $results['server']['gq_port'] ?></a></td>
  </tr>
  <tr>
    <td><strong><?php echo __('Jeu') ?> :</strong></td>
    <td><?php echo $results['server']['game_descr'] ?></td>
  </tr>
  <tr>
    <td><strong><?php echo __('Joueurs') ?> : </strong></td>
    <td><?php echo $results['server']['num_players'] ?>/<?php echo $results['server']['max_players'] ?>	</td>
  </tr>
  <tr>
    <td><strong><?php echo __('Carte') ?> :</strong></td>
    <td><?php echo $results['server']['map'] ?></td>
  </tr>
  <tr>
    <td><strong><?php echo __('Pass') ?> :</strong></td>
    <td><?php echo ($results['server']['password'])? __('oui'):__('non') ?></td>
  </tr>
<?php if($showPlayers) : ?>
  <tr>
    <td colspan="2">
        <div style="border:1px solid #93abcf;height:100px;margin-bottom:3px;overflow:auto">
        <table width="100%" id="players">
          <tr>
             <td style="width:70%;"><strong><u><?php echo __('Name') ?></u></strong></th>
             <td><div style="text-align: center;"><strong><u><?php echo __('Score') ?></u></strong></div></th>
          </tr>
          <?php foreach($results['server']['players'] AS $player => $info) { ?>
          <tr>
             <td style="width:70%;"><?php echo substr($info['name'], 0, 16) ?></th>
             <td><div style="text-align: center;"><?php echo $info['score'] ?></div></th>
          </tr>
          <?php } ?>
        </table></div>
    </td>
  </tr>
<?php endif; ?>
  <tr>
    <td colspan="2"><div align="right"><a href="<?php echo url_for('server_view', $server) ?>" target="_blank"><strong>Moniteur serveur</strong></a><strong> </strong></div></td>
  </tr>
</table>
<?php endif; ?>
<?php } ?>