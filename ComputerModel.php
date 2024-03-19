<?php
// ComputerModel.php

class ComputerModel {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function addComputer( $idob ,$numserie,$type, $network, $groupe, $lieu, $description) {
        $query = "INSERT INTO computers (idob, numserie ,type, network, groupe, lieu, description) VALUES ( ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$idob,$numserie,$type, $network, $groupe, $lieu, $description]);
        return $stmt->rowCount() > 0;
    }
    public function getAllComputers() {
        $query = "SELECT * FROM computers";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
