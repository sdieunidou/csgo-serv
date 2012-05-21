<div>
    <h1>Devenir partenaire</h1>

    <p>
      Nous sommes ouverts à toute proposition de partenariat, échange de liens, de logos/bannières, ...
    </p>

    <h2>Formulaire</h2>

    <form method="post" action="<?php echo url_for('@partenaire_send') ?>">
      <table>
        <tfoot>
          <td colspan="2">
            <?php echo $form->renderHiddenFields(false) ?>
            <input type="submit" value="Envoyer le message" />
          </td>
        </tfoot>
        <?php echo $form ?>
      </table>
    </form>

  </div>
