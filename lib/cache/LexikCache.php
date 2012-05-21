<?php

/*
 * Gestion automatique de cache
 *   list: [ ModelName ]
 */
class LexikCache extends Doctrine_Template
{
  protected $_options = array(
     'list' => array()
  );

  /*
   * Ajout d'un listener
   */
  public function setTableDefinition()
  {
    $this->addListener(new LexikCacheListener($this->_options));
  }
}
