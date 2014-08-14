<?php
/**
 * Created by PhpStorm.
 * User: jlong
 * Date: 14/08/2014
 * Time: 19:39
 */

namespace TestApp\Db;

/**
 * Class PdoConnection
 * @package TestApp\Db
 */
class Connection
{
    /**
     * @var \PDO
     */
    protected $db;

    /**
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function query($sql)
    {
        return $this->db->query($sql)->fetch(\PDO::FETCH_ASSOC);
    }
}