<?php

class Model {

    protected $db;

    function __construct() {

        try {
            global $config;
            $this->db = new PDO("mysql:dbname=".$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
