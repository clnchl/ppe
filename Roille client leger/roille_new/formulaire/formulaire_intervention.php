
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Intervention</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <?php include('../includes/menu.php') ; ?>
</head>
<body class="form"> 
   <form action="../gestion/gestion_intervention.php" method="post">

        <ul class="info-list">
        
            <li class="section">
                <h3>Détails de l'Intervention</h3>
                <label class="label" for="description">Description :</label>
                <textarea class="input-text" id="description" name="description" rows="4" placeholder="Décrivez l'intervention en détail" required></textarea>

                <label class="label" for="dateheuredebut">Date et Heure :</label>
                <input class="input-datetime-local" type="datetime-local" id="dateheure" name="dateheure" required>

            </li>
        </ul>

        <input class="btn-submit" type="submit" value="Soumettre">
    </form>
</body>
</html>
