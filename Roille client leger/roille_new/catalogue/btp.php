<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php include('../includes/menu.php') ; ?>
    <title>Roille</title>
</head>
<body>

    <section class="outillage">
        <h1>Materiels de BTP</h1>
        <div class="outil-list">
            <div class="outil">
                <img src="../images/Tournevis_etoile">
                <p>Tournevis etoile</p>
                <span>Le tournevis étoile
                    est un outil manuel doté d'une pointe en forme d'étoile.
                     Il est spécialement conçu pour s'adapter aux vis à tête cruciforme
                      et est largement utilisé dans divers travaux de montage et de démontage. <br></span>
                      <p>Prix : 5 euros par jour</p>
                      <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="3"> 
                     <input type="hidden" name="nom" value="Tournevis etoile">
                   <button type="submit" class="orange_link btn-louer">Louer</button>
                </form>

            </div>
            <div class="outil">
                <img src="../images/tournevis_plat.png">
                <p>Tournevis plat</p>
                <span>Le tournevis plat est un outil manuel avec une pointe plate utilisée pour serrer 
                    ou desserrer des vis à tête fendue. Il est couramment utilisé dans une variété d'applications 
                    domestiques et industrielles.<br></span>
                    <p>Prix : 5 euros par jour</p>
                    <form action="../gestion/gestion_panier.php" method="post">
                    <input type="hidden" name="idmateriel" value= "1">
                    <input type="hidden" name="nom" value="Tournevis plat">
                   <button type="submit" class="orange_link btn-louer">Louer</button>
                   </form>

            </div>
            <div class="outil">
                <img src="../images/pince_a_bec.jpg">
                <p>Pince à bec</p>
                <span> Une pince à bec, également appelée pince à bec long,
                     est une pince manuelle avec des mâchoires effilées et allongées.
                      Elle est utilisée pour saisir, tordre, ou couper des fils, des câbles, ou d'autres objets dans des espaces restreints.<br></span>
                      <p>Prix : 7 euros par jour</p>
                      <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="2">
                      <input type="hidden" name="nom" value="Pince a bec">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
        </div>
    </section>
     <!-- outillage -->
    
     
    
</body>
</html>
