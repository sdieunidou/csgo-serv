<?php use_helper('I18N') ?>

<div class="indent2">

  <h3><span><span><strong><strong>Mot de passe perdu ?</strong></strong></span></span></h3>

  <p>
    <?php echo __('Do not worry, we can help you get back in to your account safely!', null, 'sf_guard') ?>
    <?php echo __('Fill out the form below to request an e-mail with information on how to reset your password.', null, 'sf_guard') ?>
  </p>

  <form action="<?php echo url_for('@sf_guard_forgot_password') ?>" method="post">
    <table>
      <tbody>
        <?php echo $form ?>
      </tbody>
      <tfoot><tr><td><input type="submit" name="change" value="<?php echo __('Request', null, 'sf_guard') ?>" /></td></tr></tfoot>
    </table>
  </form>

</div>

