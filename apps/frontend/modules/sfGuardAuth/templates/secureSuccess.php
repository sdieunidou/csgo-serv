<?php use_helper('I18N') ?>

<h2><?php echo __('Oops! La page que vous demandez est sécurisé.', null, 'sf_guard') ?></h2>

<p><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo __('Identifiez vous avant d\'accéder à cette page', null, 'sf_guard') ?></h3>

<?php echo get_component('sfGuardAuth', 'signin_form') ?>