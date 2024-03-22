<?php
// ComputerController.php

class ComputerController {
    private $computer;

    public function __construct($computer) {
        $this->computer = $computer;
    }
 
  
    public function addComputer($idob, $numserie, $type, $network, $groupe, $lieu, $description) {
        // Ajouter l'ordinateur en utilisant la méthode appropriée (remplacez $this->computer par l'objet approprié)
        $result = $this->computer->addComputer($idob, $numserie, $type, $network, $groupe, $lieu, $description);
        
        // Rediriger vers la page ordinateur.php après l'ajout
        header("Location: ../views/ordinateur.php");
        exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
        
        // Vous pouvez également retourner le résultat de l'ajout si nécessaire
        return $result;
    }
    
    public function getAllComputers() {
        // Appel de la méthode pour récupérer tous les ordinateurs du modèle
        return $this->computer->getAllComputers();
       
    }
    public function updatecomputer($idob, $numserie, $type, $network, $groupe, $lieu, $description) {
        // Ajouter l'ordinateur en utilisant la méthode appropriée (remplacez $this->computer par l'objet approprié)
        $result = $this->computer->updatecomputer($idob, $numserie, $type, $network, $groupe, $lieu, $description);
        
        // Rediriger vers la page ordinateur.php après l'ajout
        header("Location: ../views/ordinateur.php");
        exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
        
        // Vous pouvez également retourner le résultat de l'ajout si nécessaire
        return $result;
    }
    
}

// ComputerController.php

// Inclure le modèle d'ordinateur
include_once '../models/ComputerModel.php';

// Créer une instance du modèle d'ordinateur
$database = new Database();
$db = $database->getConnection();
$computerModel = new ComputerModel($db);
$controller = new ComputerController($computerModel); 


// Vérifier si une action est demandée
if(isset($_POST['action'])) {
    $action = $_POST['action'];

    // Si l'action est de supprimer un ordinateur
    if($action === 'delete' && isset($_POST['id'])) {
        $id = $_POST['id'];
        // Appeler la méthode de suppression de l'ordinateur dans le modèle
        $computerModel->deleteComputer($id);
        // Rediriger vers la page d'accueil après la suppression
        header("Location: ../views/ordinateur.php");
        exit();
    }
    
}



// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editbtn'])) {
    $idob = $_POST["idob"];
    $numserie = $_POST["numserie"];  
    $type = $_POST["type"];
    $network = $_POST["network"];
    $groupe = $_POST["groupe"];
    $lieu = $_POST["lieu"];
    $description = $_POST["description"];
    // Ajouter l'ordinateur
    if ($controller->updatecomputer( $idob, $numserie,$type, $network, $groupe, $lieu, $description)) {
        echo "Ordinateur modifier avec succès.";
    } else {
        echo "Erreur lors de modification de l'ordinateur.";
    }



}

?>

