<?php
// ComputerModel.php
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
    public function deleteComputer($idob) {
       
        return $this->conn; // Écrire votre logique pour supprimer l'ordinateur ayant l'ID spécifié de la base de données
    }
}
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


    public function deleteComputer($idob) {
        // Préparer la requête SQL
        $query = "DELETE FROM computers WHERE idob = :id";

        // Préparer la déclaration
        $stmt = $this->conn->prepare($query);

        // Liaison des paramètres
        $stmt->bindParam(':id', $idob);

        // Exécution de la requête
        if ($stmt->execute()) {
            return true; // Suppression réussie
        } else {
            return false; // Échec de la suppression
        }
    }
  

    public function updateComputer($idob, $numserie, $type, $network, $groupe, $lieu, $description) {
        // Mettez à jour la ligne dans la base de données avec les nouvelles informations
        $query = "UPDATE computers SET numserie = :numserie, type = :type, network = :network, groupe = :groupe, lieu = :lieu, description = :description WHERE idob = :idob";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':idob', $idob);
        $stmt->bindParam(':numserie', $numserie);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':network', $network);
        $stmt->bindParam(':groupe', $groupe);
        $stmt->bindParam(':lieu', $lieu);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
    }
}
    



?>
