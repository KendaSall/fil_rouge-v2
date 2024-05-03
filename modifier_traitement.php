<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "profil";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Vérifier si les données ont été soumises
if(isset($_GET['$id_utilisateur'] ,$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['dateNaissance'])) {
    // Récupérer les données du formulaire
    $id_utilisateur = $_GET['$id_utilisateur'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $dateNaissance = $_POST['dateNaissance'];

    // Mettre à jour les informations utilisateur dans la base de données
    $sql = "UPDATE utilisateurs SET nom = '$nom', prenom = '$prenom', email = '$email', dateNaissance = '$dateNaissance' WHERE id = 1"; // Changer '1' avec l'id de l'utilisateur à modifier
    if ($conn->query($sql) === TRUE) {
        echo "Les informations de l'utilisateur ont été mises à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour des informations de l'utilisateur : " . $conn->error;
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
