<?php

require_once '../config/config.php';

class Db
{

    private $host;
    private $db;
    private $user;
    private $pass;
    public $connection;



    public function __construct()
    {
        $this->host = constant('DB_HOST');
        $this->db = constant('DB');
        $this->user = constant('DB_USER');
        $this->pass = constant('DB_PASS');

        $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db, 3306);

        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}