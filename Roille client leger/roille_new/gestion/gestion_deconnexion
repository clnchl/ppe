<?php
session_start(); // Démarrer la session

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['iduser'])) {
    // Détruire toutes les données de la session
    session_destroy();
    
    // Rediriger l'utilisateur vers la page d'accueil principale
    header("Location: ../index.php"); 
    exit; // Assure que le script s'arrête après la redirection
} else {
    // Rediriger l'utilisateur vers la page de connexion s'il tente d'accéder à ce script sans être connecté
    header("Location: ../formulaire/formulaire_connexion.php");
    exit;
}
?>
