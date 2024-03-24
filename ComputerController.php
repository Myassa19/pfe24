<?php
// ComputerController.php

class ComputerController {
    private $computer;

    public function __construct($computer) {
        $this->computer = $computer;
    }
 
  
    public function addComputer($idob, $numserie, $type, $network, $nomgr, $nomL, $description) {
        // Appeler la méthode dans le modèle pour ajouter l'ordinateur
       $result= $this->computer->addComputer($idob, $numserie, $type, $network, $nomgr, $nomL, $description);
        header("Location: ../views/ordinateur.php");
        exit();
    }
    
    
    public function getAllComputers() {
        // Appel de la méthode pour récupérer tous les ordinateurs du modèle
        return $this->computer->getAllComputers();
       
    }
   // ComputerController.php

   public function updateComputer($idob, $type, $network, $numserie, $nomgr, $nomL, $description) {
    // Appel à la méthode du modèle pour mettre à jour l'ordinateur
    $result = $this->computer->updateComputer($idob, $type, $network, $numserie, $nomgr, $nomL, $description);
    
    // Vérifier si la mise à jour a été effectuée avec succès
    if ($result) {
        // Rediriger vers la page appropriée après la mise à jour
        header("Location: ../views/ordinateur.php");
        exit();
    } else {
        // En cas d'erreur lors de la mise à jour, afficher un message d'erreur
        echo "Erreur lors de la modification de l'ordinateur.";
    }
}


    public function addGroupe($groupeName) {
        // Appelez la méthode addGroupe du modèle
       $result=$this->computer->addGroupe($groupeName);
     
        exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
        
        // Vous pouvez également retourner le résultat de l'ajout si nécessaire
        return $result;
    }
    
    public function addLocation($locationName) {
        // Appeler la méthode dans le modèle pour ajouter le lieu
        $result=$this->computer->addLocation($locationName);
        header("Location: ../views/ordinateur.php");

        exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
        
        // Vous pouvez également retourner le résultat de l'ajout si nécessaire
        return $result;
    }
    // Autres actions du contrôleur...

    public function getAllGroupes() {
        $groupes = $this->computer->getAllGroupes();
        // Inclure la vue pour afficher les options de groupe
        include '../views/groupes_options.php';
        
    }
    public function getAllLocation() {
        $lieux = $this->computer->getAllLocation();
        // Inclure la vue pour afficher les options de groupe
        include '../views/lieux_options.php';
        
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


// Assurez-vous que le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == "updatecomputer") {
    // Vérifiez si toutes les données requises sont présentes dans la requête POST
    if (isset($_POST["idob"], $_POST["type"], $_POST["network"], $_POST["numserie"], $_POST["nomgr"], $_POST["nomL"], $_POST["description"])) {
        // Récupérer les données depuis la requête POST
        $idob = $_POST["idob"];
        $type = $_POST["type"];
        $network = $_POST["network"];
        $numserie = $_POST["numserie"];  
        $nomgr = $_POST["nomgr"];
        $nomL = $_POST["nomL"];
        $description = $_POST["description"];

        // Appeler la méthode updateComputer du contrôleur pour mettre à jour l'ordinateur
        if ($controller->updateComputer($idob, $type, $network,$numserie, $nomgr, $nomL, $description)) {
            echo "Ordinateur modifié avec succès.";
        } else {
            echo "Erreur lors de la modification de l'ordinateur.";
        }
    } else {
        echo "Toutes les données requises n'ont pas été fournies.";
    }
}






?>
