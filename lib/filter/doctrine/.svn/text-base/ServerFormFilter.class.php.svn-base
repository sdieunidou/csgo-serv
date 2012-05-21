<?php

/**
 * Server filter form.
 *
 * @package    jeuxsteam
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServerFormFilter extends BaseServerFormFilter
{
  public function configure()
  {
    unset($this['last_online'],
          $this['is_banned'],
          $this['is_online'],
          $this['last_online'],
          $this['user_id'],
          $this['slug'],
          $this['created_at'],
          $this['updated_at']
         );

    $this->widgetSchema->setLabels(
      array(
          'map' => 'Carte',
          'game_id' => 'Jeu',
          'players' => 'Nb joueurs'
      )
    );


    $this->disableCSRFProtection();
  }
}
