<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "roille_sa";

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $adr = isset($_POST['adr']) ? $_POST['adr'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : '';
    $confirm_mdp = isset($_POST['confirm_mdp']) ? $_POST['confirm_mdp'] : '';
    
    // Vérification si les mots de passe correspondent
    if ($mdp !== $confirm_mdp) {
        $error_message = "Les mots de passe ne correspondent pas.";
    } else {
        // Hachage du mot de passe
        $hashed_password = password_hash($mdp, PASSWORD_DEFAULT);

        // Connexion à la base de données
        $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

        if ($connexion->connect_error) {
            die("La connexion à la base de données a échoué : " . $connexion->connect_error);
        }

        // Début de la transaction
        $connexion->begin_transaction();

        // Préparation de la requête SQL pour insérer l'utilisateur
        $sql_insert_user = "INSERT INTO utilisateur (nom, prenom, email, mdp, roles) VALUES ('$nom', '$prenom', '$email', '$hashed_password', 'client')";

        // Exécution de la requête pour insérer l'utilisateur
        if ($connexion->query($sql_insert_user) === TRUE) {
            // Récupération de l'identifiant de l'utilisateur
            $iduser = $connexion->insert_id;

            // Préparation de la requête SQL pour insérer le client
            $sql_insert_client = "INSERT INTO client (nom, prenom, email, adr, tel, mdp) VALUES ('$nom', '$prenom', '$email','$adr', '$tel', '$hashed_password' )";

            // Exécution de la requête pour insérer le client
            if ($connexion->query($sql_insert_client) === TRUE) {
                // Validation des opérations de la transaction
                $connexion->commit();
                $success_message = "Inscription réussie.";
            } else {
                // Annulation des opérations de la transaction en cas d'échec
                $connexion->rollback();
                $error_message = "Erreur lors de l'inscription du client : " . $connexion->error;
            }
        } else {
            $error_message = "Erreur lors de l'inscription de l'utilisateur : " . $connexion->error;
        }

        // Fermeture de la connexion à la base de données
        $connexion->close();
    }
}
?>
