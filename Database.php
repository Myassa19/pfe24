<?php
// Database.php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "bnh";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Erreur de connexion à la base de données: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>

