<?php use_helper('I18N') ?>
<?php $routes = $sf_context->getRouting()->getRoutes() ?>

<form id="LoginForm" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
	<div>
		<label><span>Utilisateur</span><?php echo $form['username']->render(array('class' => 'input')) ?></label>
		<label><span>Password</span><?php echo $form['username']->render(array('class' => 'input width')) ?><input type="image" src="/images/input-img1.gif" /></label>
		<div class="register">
      <?php if (isset($routes['sf_guard_forgot_password'])): ?>
        <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Pass perdu ?', null, 'sf_guard') ?></a>
      <?php endif; ?>
			 &nbsp; | &nbsp; 
      <?php if (isset($routes['sf_guard_register'])): ?>
       &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Inscription', null, 'sf_guard') ?></a>
      <?php endif; ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="http://music.nme.com/images/fbconnect.gif" />
	  </div>
	</div>
  <?php echo $form->renderHiddenFields() ?>
</form>
          

          