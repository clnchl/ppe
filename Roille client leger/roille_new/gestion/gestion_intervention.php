<?php
// Connexion à la base de données
$serveur = "localhost"; 
$utilisateur = "root"; 
$motdepasse = ""; 
$basededonnees = "roille_sa"; 

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $description = $_POST['description'];
    $dateheure = $_POST['dateheure'];

    // Préparer et exécuter la requête SQL pour insérer les données dans la table 'intervention'
    $sql = "INSERT INTO intervention (descriptions, dateheure) VALUES ('$description', '$dateheure')";
    if ($connexion->query($sql) === TRUE) {
        // Afficher un message de succès
        echo "Votre demande a été soumise avec succès.";
    } else {
        // Afficher un message d'erreur en cas d'échec de l'insertion
        echo "Erreur lors de la soumission de votre demande : " . $connexion->error;
    }
}

// Fermer la connexion à la base de données
$connexion->close();

// Rediriger l'utilisateur vers l'index après avoir soumis le formulaire
header("Location: ../index.php");
exit; // Assure que le script s'arrête après la redirection
?>
