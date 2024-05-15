<?php
session_start();

// Vérifier si une session est déjà active, sinon la démarrer
if (!isset($_SESSION)) {
    session_start();
}

// Connexion à la base de données
$con = mysqli_connect("localhost", "root", "", "roille_sa");

// Vérifier la connexion
if (!$con) {
    die('Erreur : ' . mysqli_connect_error());
}

// Supprimer les produits
if (isset($_GET['del'])) {
    $idmateriel_del = $_GET['del'];
    // Suppression
    if (isset($_SESSION['panier'])) {
        unset($_SESSION['panier'][$idmateriel_del]);
    }
}

// Ajouter un produit au panier s'il est soumis via POST
if (isset($_POST['idmateriel'])) {
    $idmateriel = $_POST['idmateriel'];
    $nom = $_POST['nom'];

    // Ajouter le produit au panier
    if (isset($_SESSION['panier'][$idmateriel])) {
        // Si le produit est déjà dans le panier, augmenter la quantité
        $_SESSION['panier'][$idmateriel]++;
    } else {
        // Si le produit n'est pas dans le panier, l'ajouter avec une quantité de 1
        $_SESSION['panier'][$idmateriel] = 1;
    }

    // Rediriger l'utilisateur vers la page de produits
    header("Location: ../panier.php");
    exit;
}
?>
