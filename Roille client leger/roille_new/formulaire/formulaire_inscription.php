<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roille</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    
    <?php include('../includes/menu.php') ; ?>
</head>
<body class="form"> 
    <section id="signup">
        <h2>S'inscrire</h2>
        <form action="../gestion/gestion_inscription.php" method="post">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>
            
            <label for="adr">Adresse :</label>
           <input type="text" id="adr" name="adr" required>
 
            <label for="tel">Numéro téléphone :</label>
            <input type="tel" id="tel" name="tel" required>

            <label for="type">Type d'utilisateur :</label>
             <select id="type" name="type">
             <option value="particulier">Particulier</option>
             <option value="entreprise">Entreprise</option>
             </select>

             <label for="mdp">Mot de passe :</label>
             <input type="password" id="mdp" name="mdp" required>

             <label for="confirmmdp">Confirmer le mot de passe :</label>
             <input type="password" id="confirm_mdp" name="confirm_mdp" required>

              <input type="submit" value="S'inscrire" >
        </form>
    </section>

</body>
</html>



