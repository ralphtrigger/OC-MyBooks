<?php

namespace MyBooks\DAO;

use Doctrine\DBAL\Connection;

/**
 * Abstract class for Data Access Objects.
 *
 * @author trigger
 */
abstract class DAO
{
    /**
     * Database connection.
     * 
     * @var Doctrine\DBAL\Connection
     */
    private $db;
    
    /**
     * 
     * @param Doctrine\DBAL\Connection The database connection object.
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }
    
    /**
     * Grant access to the database connection object.
     * 
     * @return Doctrine/DBAL/Connection The database connection object.
     */
    protected function getDb()
    {
        return $this->db;
    }

    /**
     * Build a domain object from a database row.
     * Must be overriden byprote child classes.
     */
    protected abstract function buildDomainObject($row);

}
