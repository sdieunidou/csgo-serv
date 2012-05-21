<div class="indent2">

  <h1>Recherche un serveur de jeux</h1>

    <?php include_partial('find', array('form' => $form)) ?>

    <?php if($form->isValid()): ?>
      <h2>Liste des serveurs</h2>

      <p>
        Il y a <?php echo $pager->getNbResults() ?> serveurs de jeux qui répondent à ces critères.
      </p>

      <?php include_partial('table', array('pager' => $pager, 'route' => 'server_find_page')) ?>
    <?php endif; ?>

</div>