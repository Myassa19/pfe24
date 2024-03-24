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

    public function addComputer($idob, $numserie, $type, $network, $nomgr, $nomL, $description) {
        try {
            // Récupérer l'id du groupe en fonction du nom du groupe
            $query_group = "SELECT idgr FROM groupes WHERE nomgr = ?";
            $stmt_group = $this->conn->prepare($query_group);
            $stmt_group->execute([$nomgr]);
            $group_row = $stmt_group->fetch(PDO::FETCH_ASSOC);
            $idgr = $group_row['idgr'];
    
            // Récupérer l'id du lieu en fonction du nom du lieu
            $query_location = "SELECT idL FROM lieux WHERE nomL = ?";
            $stmt_location = $this->conn->prepare($query_location);
            $stmt_location->execute([$nomL]);
            $location_row = $stmt_location->fetch(PDO::FETCH_ASSOC);
            $idL = $location_row['idL'];
    
            // Insérer les données dans la table computers avec les clés étrangères récupérées
            $query_insert = "INSERT INTO computers (idob, numserie, type, network, idgr, idL, description) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt_insert = $this->conn->prepare($query_insert);
            $stmt_insert->bindParam(1, $idob);
            $stmt_insert->bindParam(2, $numserie);
            $stmt_insert->bindParam(3, $type);
            $stmt_insert->bindParam(4, $network);
            $stmt_insert->bindParam(5, $idgr);
            $stmt_insert->bindParam(6, $idL);
            $stmt_insert->bindParam(7, $description);
            
            return $stmt_insert->execute(); // Exécuter la requête et retourner le résultat de l'exécution
        } catch (PDOException $e) {
            // Gestion des erreurs PDO
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
    
    
    
    public function getAllGroupes() {
        $query = "SELECT nomgr FROM groupes";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllLocation() {
        $query = "SELECT nomL FROM lieux";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    public function getAllComputers() {
        $query = "SELECT c.idob, c.type, c.network, c.numserie, c.description, l.nomL, g.nomgr
        FROM computers c
        INNER JOIN lieux l ON c.idL = l.idL
        INNER JOIN groupes g ON c.idgr = g.idgr";

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
  

 // Assurez-vous que les données du formulaire sont correctement récupérées et transmises à la méthode updateComputer() du modèle
 
    // Requête pour mettre à jour les colonnes de la table computers en utilisant JOIN avec les tables groupes et lieux
    public function updateComputer($idob,  $type , $network ,$numserie, $nomgr, $nomL, $description) {
        $query = "UPDATE computers c
                  INNER JOIN groupes g ON c.idgr = g.idgr
                  INNER JOIN lieux l ON c.idL = l.idL
                  SET c.numserie = ?, c.type = ?, c.network = ?, c.description = ?, l.nomL = ?, g.nomgr = ?
                  WHERE c.idob = ?";
        
        $stmt = $this->conn->prepare($query);
       $stmt->execute([$numserie, $type, $network, $description, $nomL, $nomgr, $idob]);
        
        return $stmt->rowCount() > 0;
    }
    
    



public function searchComputer($searchInput) {
    $query = "SELECT * FROM computers WHERE idob = :searchInput OR type LIKE :searchInput OR numserie LIKE :searchInput";
    $stmt = $this->conn->prepare($query);
    $searchInput = "%$searchInput%"; // Ajoute des jokers de caractères pour rechercher les parties correspondantes du type ou du numéro de série
    $stmt->bindParam(":searchInput", $searchInput);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function addGroupe($groupName) {
    try {
        $stmt = $this->conn->prepare("INSERT INTO groupes (nomgr) VALUES (?)");
        $stmt->bindParam(1, $groupName);
        return $stmt->execute();
    } catch (PDOException $e) {
        // Gestion des erreurs PDO
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}
public function addLocation($locationName) {
    try {
        $stmt = $this->conn->prepare("INSERT INTO lieux(nomL) VALUES (?)");
        $stmt->bindParam(1, $locationName);
        return $stmt->execute();
    } catch (PDOException $e) {
        // Gestion des erreurs PDO
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}

}



?>
