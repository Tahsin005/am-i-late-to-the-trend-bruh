<?php

namespace Core;

use PDO;

// Database connection settings
class Database {
    public $connection;
    public $statement;

    public function __construct($config, $username = "dbeaver_user", $password = "your_password_here") {
        // dd('mysql:' . http_build_query($config, '', ';')); // mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params = []) {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function find() {
        return $this->statement->fetch();
    }

    public function get() {
        return $this->statement->fetchAll();
    }

    public function findOrFail() {
        $result = $this->find();
        if (!$result) {
            abort();
        }
        return $result;
    }
}