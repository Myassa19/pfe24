<?php
class UserModel {
    // Méthode pour vérifier les informations d'identification de l'utilisateur
    public static function checkCredentials($email, $password) {
        // Placez ici vos informations de connexion à la base de données
        $servername = "localhost"; // ou l'adresse IP du serveur MySQL
        $username = "root"; // votre nom d'utilisateur MySQL
        $password_db = ""; // votre mot de passe MySQL
        $dbname = "bnh"; // le nom de votre base de données

        // Crée une connexion à la base de données
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        // Vérifie la connexion
        if ($conn->connect_error) {
            die("Échec de la connexion à la base de données: " . $conn->connect_error);
        }
        
        // Échapper les données d'entrée pour éviter les injections SQL
        $email = $conn->real_escape_string($email);
        $password = $conn->real_escape_string($password);
        
        // Prépare la requête SQL pour vérifier les informations d'identification de l'utilisateur
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        
        // Exécute la requête
        $result = $conn->query($sql);
        
        // Vérifie si des résultats ont été trouvés
        if ($result->num_rows > 0) {
            return true; // Les informations d'identification sont valides
        } else {
            return false; // Les informations d'identification sont incorrectes
        }
        
        // Ferme la connexion à la base de données
        $conn->close();
    }
}
?>

