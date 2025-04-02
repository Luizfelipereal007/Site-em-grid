<?php

class Database {

    private $host = "localhost";
    private $port = "3306";
    private $username = "root";
    private $password = "";
    private $dbName = "site_adm_griddb";

    public function conectar() {
        $connUrl = "mysql:host=$this->host;port=$this->port;dbname=$this->dbName;charset=utf8mb4";
        $conn =  new PDO(
            $connUrl, 
            $this->username, 
            $this->password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        return $conn;
    }

}