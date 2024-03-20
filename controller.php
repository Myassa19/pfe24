<?php
require_once '../models/UserModel.php';

class controller {
    public function login($email, $password) {
        // Vérifie les informations d'identification à l'aide du modèle
        if (UserModel::checkCredentials($email, $password)) {
            // Redirige l'utilisateur vers le tableau de bord approprié
            header("Location: accueil.php");
            exit();
        } else {
            // Affiche un message d'erreur si les informations d'identification sont incorrectes
            echo "Email ou mot de passe incorrect.";
        }
    }
}
?>

