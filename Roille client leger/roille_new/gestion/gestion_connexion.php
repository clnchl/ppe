<?php

// Informations de connexion à la base de données
$serveur = "localhost"; 
$utilisateur = "root"; 
$motdepasse = ""; 
$basededonnees = "roille_sa"; 

// Créer une connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
}

// Démarrer la session
session_start();

// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $mdp = $_POST['password'];
    
    //echo "mdp :".$hashed_password;
    // Préparer la requête SQL pour vérifier les informations de connexion
    $sql = "SELECT * FROM utilisateur WHERE email = ? ;";
    $stmt = $connexion->prepare($sql);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result = $stmt->get_result();
 
    if ($result->num_rows == 1) {
        // L'utilisateur est authentifié avec succès
        $row = $result->fetch_assoc();
        if (password_verify($mdp, $row['mdp'])){
                // Stocker l'identifiant de l'utilisateur dans la session
                $_SESSION['iduser'] = $row['iduser'];

                // Rediriger l'utilisateur vers une page sécurisée (par exemple, la page d'accueil)
                header("Location: ../index2.php");
                exit; // Terminer le script après la redirection
        }else{
            $error_message = "mot de passe incorrect.";
        }
    } else {
        // L'authentification a échoué
        $error_message = "Adresse e-mail  incorrect.";
        // Rediriger l'utilisateur vers la page de connexion avec un message d'erreur
        //header("Location: ../formulaire/formulaire_connexion.php?error=" . urlencode($error_message));
        // exit; // Terminer le script après la redirection
    }
} else {
    // Rediriger l'utilisateur vers la page de connexion s'il tente d'accéder à ce script directement sans soumettre le formulaire
    header("Location: ../formulaire/formulaire_connexion.php");
    exit; // Terminer le script après la redirection
}

// Fermer la connexion à la base de données
$connexion->close();
?>
