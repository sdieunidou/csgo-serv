<?php


class GameTable extends Doctrine_Table
{
    
  public static function getInstance()
  {
    return Doctrine_Core::getTable('Game');
  }

  /**
   * Retourne un enregistrement actif
   *
   * @param Doctrine_Query $q
   * @return Doctrine_Query
   */
  public function retrieveActive(Doctrine_Query $q)
  {
    return $q->andWhere($q->getRootAlias().'.is_active = ?', 1)
              ->limit(1)
              ->fetchOne();
  }
}