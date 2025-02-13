<?php
// Informations de connexion
$servername = "localhost";  // Si tu es sur un serveur distant, utilise l'URL de ton serveur
$username = "rklg4755";  // Ton nom d'utilisateur MySQL (obtenu sur phpMyAdmin)
$password = "O2switch1603*";  // Ton mot de passe MySQL
$dbname = "rklg4755_entry";  // Le nom de ta base de données

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données !";  // Pour vérifier si la connexion fonctionne
}
//git config git-ftp.url ftp://rklg4755:O2switch1603*@https://nirrti.o2switch.net/public_html/entry
?>
