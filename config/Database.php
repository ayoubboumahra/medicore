<?php

namespace Config;

class Database {
    private $servername = "localhost";
    private $database = "medicore";
    private $username = "root";
    private $password = "";
    private $pdo;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->servername};dbname={$this->database}";
            $this->pdo = new \PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            die("Database connection failed: " . $e->getMessage() );
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }

}