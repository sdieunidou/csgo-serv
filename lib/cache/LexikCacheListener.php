<?php

/*
 * Gestion automatique du cache SQL
 */
class LexikCacheListener extends Doctrine_Record_Listener
{
    protected $_options;

    /*
     * Constructeur
     *
     * @param array $options
     */
    public function __construct(array $options)
    {
      $this->_options = $options;
    }

    /*
     * Mise en cache de la requÃ¨te
     *
     * @param Doctrine_Event $event
     */
    public function preDqlSelect(Doctrine_Event $event)
    {
      $query = $event->getQuery();

      foreach($query->getDqlPart('orderby') as $order)
      {
        if(strtoupper($order) == 'RAND()')
        {
          return;
        }
      }

      if($hash = $this->calculateHash($query))
      {
        $tableName = $this->getTableName($query);

        $query->useQueryCache(true, 3600)
              ->useResultCache(true, 3600, sprintf('cache.sql.%s_%s', $tableName, $hash));
      }
    }



    /*
     * Renvoie le nom du model de la table
     *
     * @param Doctrine_Query $query
     *
     * @return string
     */
    protected function getTableName(Doctrine_Query $query)
    {
      $explode = explode(' ', current($query->getDqlPart('from')));

      return current($explode);
    }

    /*
     * Calcule le hash de la requete
     *
     * @param Doctrine_Query $query
     *
     * @return string
     */
    protected function calculateHash(Doctrine_Query $query)
    {
      $params = $query->getParams();
      $whereValues = $params['where'];
      $dql = $query->getDql();
      if(count($whereValues) != substr_count($dql, '?'))
      {
        return false;
      }

      return md5($dql . implode('', $whereValues));
    }

    /*
     * Suppression du cache lors d'un ajout ou modification
     *
     * @param Doctrine_Event $event
     */
    public function preSave(Doctrine_Event $event)
    {
      $this->deleteCache($event->getInvoker()->getTable());
    }

    /*
     * Suppression du cache lors d'une suppression
     *
     * @param Doctrine_Event $event
     */
    public function preDelete(Doctrine_Event $event)
    {
      $this->deleteCache($event->getInvoker()->getTable());
    }

    /*
     * Supprime le cache d'une table
     * ainsi que le cache des tables en relation
     *
     * @param $table
     */
    protected function deleteCache($table)
    {
      $options = $table->getOptions();

      $cacheDriver = $table->getAttribute(Doctrine_Core::ATTR_RESULT_CACHE);
      $cacheDriver->deleteByPrefix(sprintf('cache.sql.%s_', $options['name']));

      if(isset($this->_options['list']))
      {
        foreach($this->_options['list'] as $relation)
        {
          $cacheDriver->deleteByPrefix(sprintf('cache.sql.%s_', $relation));
        }
      }
    }
}