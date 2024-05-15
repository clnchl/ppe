<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Envoyer l'email de notification à l'administrateur
    $destinataire = "votre_email@domaine.com";
    $sujet = "Nouveau message depuis le formulaire de contact";
    $corps_message = "Nom: $nom\n\nEmail: $email\n\nMessage:\n$message";
    $entetes = "From: $email\r\nReply-To: $email\r\n";
    mail($destinataire, $sujet, $corps_message, $entetes);
    
    // Rediriger l'utilisateur vers une page de confirmation
    header("Location: confirmation_contact.php");
    exit();
}
?>
