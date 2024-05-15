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
        <h1>Materiels de ponçage</h1>
        <div class="outil-list">
            <div class="outil">
                <img src="../images/ponceuse.jpeg">
                <p>Ponceuse</p>
                <span> La ponceuse , un outil électrique utilisé pour lisser et polir les surfaces en éliminant les irrégularités et les imperfections.
                     elle est utilisée pour préparer les surfaces avant la finition. <br></span>
                     <p>Prix : 40 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="13">
                      <input type="hidden" name="nom" value="Ponceuse">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
         

            </div>
            <div class="outil">
                <img src="../images/languette_de_ponçage.jpg">
                <p>Languette de ponçage</p>
                <span>La languette de ponçage est un accessoire attaché à une ponceuse pour des travaux de finition ou
                     de polissage, contribuant à obtenir une surface lisse après le ponçage initial.<br></span>
                     <p>Prix : Inclus dans la location d'une ponceuse</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="13">
                      <input type="hidden" name="nom" value="Languette de poncage">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
            <div class="outil">
                <img src="../images/ponceuse_sol_beton" style="max-width: 250px">
                <p>Ponceuse de sol en beton</p>
                <span>La ponceuse de sol en béton est un équipement spécialisé utilisé pour poncer et polir les sols en béton,
                     offrant une finition lisse et brillante.<br></span>
                     <p>Prix : 50 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="15">
                      <input type="hidden" name="nom" value="Ponceuse de sol en beton">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
     

            </div>
        </div>
    </section>
     <!-- outillage -->
    
    
</body>
</html>