<?php

/*
 * Formulaire de contact
 *
 * Options:
 *   sfGuardUser => sfGuardUser Object
 */
class ContactForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'email'   => new sfWidgetFormInput(),
      'message' => new sfWidgetFormTextarea(array(), array('rows' => 20, 'cols' => 60)),
      ));

    $this->setValidators(array(
      'email'   => new sfValidatorEmail(array(),array('invalid' => 'Email invalide','required' => 'Ce champ est obligatoire.')),
      'message' => new sfValidatorString(array('min_length' => 20),
                                          array(
                                            'required' => 'Ce champ est obligatoire.',
                                            'min_length' => 'Votre message est trop court (%min_length% caractères min).'
                                          )),
    ));

    $this->widgetSchema->setLabels(array(
                                    'message' => 'Message',
                                    'email' => 'Votre email'
    ));

    $this->widgetSchema->setNameFormat('contact[%s]');
  }

}
?>
