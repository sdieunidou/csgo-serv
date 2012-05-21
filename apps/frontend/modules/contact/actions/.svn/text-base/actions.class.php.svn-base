<?php

/**
 * contact actions.
 *
 * @package    jeuxsteam
 * @subpackage contact
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->getResponse()->prependTitle('Devenir partenaire');
    $this->getResponse()->prependDescription('Nous sommes ouvert à toute propostion de partenariat');

    $this->form = new ContactForm();
  }

  public function executeSend(sfWebRequest $request)
  {
    $this->getResponse()->prependTitle('Devenir partenaire');
    $this->getResponse()->prependDescription('Nous sommes ouvert à toute propostion de partenariat');

    $this->form = new ContactForm();

    $this->form->bind($request->getParameter($this->form->getName()));
    if($this->form->isValid())
    {
      $values = $this->form->getValues();

      $message = $this->getMailer()->compose($values['email'],
                                             'trakiss@gmail.com',
                                             '[Jeux-Steam] Proposition de partenariat',
                                             $values['message']
                                            );

      $this->getMailer()->send($message);

      $this->getUser()->setFlash('notice', 'Le message a bien été envoyé');
      $this->redirect('@partenaire');
    }

    $this->setTemplate('index');
  }
}
