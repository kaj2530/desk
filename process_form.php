<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Préparer et exécuter la requête SQL
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<h2> Les informations ont été enregistrées avec succès.</h2>";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Formulaire de Contact</title>
  <link rel="stylesheet" href="styles.css">
</head>
