<?php
require_once '../controllers/controller.php';

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si les champs Email et Password sont définis et non vides
    if (isset($_POST["Email"]) && isset($_POST["Password"]) && !empty($_POST["Email"]) && !empty($_POST["Password"])) {
        // Récupère les valeurs des champs Email et Password
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        
        // Crée une instance du contrôleur de connexion
        $controller = new controller();
        // Appelle la méthode de connexion du contrôleur
        $controller->login($email, $password);
    } else {
        // Affiche un message d'erreur si les champs requis ne sont pas fournis
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>
