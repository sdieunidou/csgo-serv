<?php use_helper('I18N') ?>

<div class="indent2">

  <h3><span><span><strong><strong>Identification</strong></strong></span></span></h3>

  <?php if ($form->getErrorSchema()): ?>
  <ul class="error_list">
    <?php foreach ($form->getErrorSchema() as $error): ?>
      <li><?php echo $error ?></li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>


  <div class="box" style="width: 300px; margin: auto; margin-bottom: 10px;">
		<div>
			<div class="box2 border border1">
        <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
			</div>
	  </div>
	</div>

</div>