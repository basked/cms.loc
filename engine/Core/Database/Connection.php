<?php

namespace Engine\Core\Database;

use PDO;

/**
 * Class Connection
 */
class Connection
{
    /**
     * @var PDO
     */
    private $link;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * Connection to DB
     * @return $this
     */
    private function connect()
    {
//        $config = require_once 'config.php';
        $config = [
            'host' => 'localhost',
            'dbname' => 'cms_db',
            'charset' => 'utf8',
            'username' => 'basked',
            'password' => 'basked',
        ];
        $dns = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname']. ';charset=' . $config['charset'];
        $this->link = new PDO($dns, $config['username'], $config['password']);
        return $this;
    }

    /**
     * @param $sql
     * @return array
     */
    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($res === false) {
            return [];
        }
        return $res;
    }
}