<?php
// index.php

// Inclure les classes nécessaires

include_once '../models/ComputerModel.php'; 
include_once '../controllers/ComputerController.php'; 

// Créer une instance de la base de données
$database = new Database();
$db = $database->getConnection();

// Créer une instance du modèle
$computerModel = new ComputerModel($db);

// Créer une instance du contrôleur
$controller = new ComputerController($computerModel); 

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idob = $_POST["idob"];
    $numserie = $_POST["numserie"];  
    $type = $_POST["type"];
    $network = $_POST["network"];
    $groupe = $_POST["groupe"];
    $lieu = $_POST["lieu"];
    $description = $_POST["description"];

    // Ajouter l'ordinateur
    if ($controller->addComputer( $idob, $numserie,$type, $network, $groupe, $lieu, $description)) {
        echo "Ordinateur ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'ordinateur.";
    }




}


// Inclure le fichier ComputerModel.php
include_once '../models/ComputerModel.php';

// Créer une instance de la base de données et du modèle d'ordinateur
$database = new Database();
$db = $database->getConnection();
$computerModel = new ComputerModel($db);

// Récupérer la liste des ordinateurs depuis la base de données
$computers = $computerModel->getAllComputers();

foreach ($computers as $computer) {
    echo "<tr>";
    echo "<td>" . (isset($computer['idob']) ? $computer['idob'] : "") . "</td>";
    echo "<td>" . (isset($computer['type']) ? $computer['type'] : "") . "</td>";
    echo "<td>" . (isset($computer['numserie']) ? $computer['numserie'] : "") . "</td>";
    echo "<td>" . (isset($computer['network']) ? $computer['network'] : "") . "</td>";
    echo "<td>" . (isset($computer['groupe']) ? $computer['groupe'] : "") . "</td>";
    echo "<td>" . (isset($computer['lieu']) ? $computer['lieu'] : "") . "</td>";
    echo "<td>" . (isset($computer['description']) ? $computer['description'] : "") . "</td>";
    echo "<td>
            <div class=' mx-3 mb-3 d-flex align-items-center'>
            <!-- Icône de modification -->
            <form action=''controllers/ComputerController.php'' method='post'>
            <svg xmlns='http://www.w3.org/2000/svg' width='23' height='23' fill='currentColor' class='bi bi-pencil-square edit-button' data-id='" . $computer['idob'] . "' data-toggle='modal' data-target='#editModal' viewBox='0 0 16 16'>
                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
            </svg>
            
                <!-- Icône de suppression -->
                <form action='controllers/ComputerController.php' method='post'>
                    <input type='hidden' name='action' value='delete'>
                    <input type='hidden' name='id' value='" . $computer['idob'] . "'>
                    <button type='submit' class='bi bi-trash3-fill delete-button' data-id='" . $computer['idob'] . "'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='23' height='23' fill='currentColor' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                        </svg>
                    </button>
                </form>
            </div>
          </td>";
    echo "</tr>";
}

echo "</table>";












?>


