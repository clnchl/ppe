<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php include('../includes/menu.php') ; ?>
    <title>Roille</title>
</head>
<body>
    <section class="outillage">
        <h1>Materiels de nettoyage</h1>
        <div class="outil-list">
            <div class="outil">
                <img src="../images/souffleur.jpeg">
                <p>Souffleure</p>
                <span>La souffleuse est un appareil motorisé utilisé pour souffler de l'air à haute 
                    vélocité afin de nettoyer des surfaces, comme les feuilles mortes,
                     la neige légère, ou d'autres débris légers. <br></span>
                     <p>Prix : 40 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="4">
                      <input type="hidden" name="nom" value="Souffleure">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>


            </div>
            <div class="outil">
                <img src="../images/balayeuse_accompa.jpg">
                <p>Balayeuse accompagner</p>
                <span>La balayeuse accompagnée est une machine motorisée conçue pour nettoyer les surfaces
                     extérieures en balayant et en collectant les débris.
                      Elle est souvent utilisée pour le nettoyage de grandes zones, comme les parkings ou les espaces publics.<br></span>
                      <p>Prix : 75 euros par jour</p>
                      <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="5">
                      <input type="hidden" name="nom" value="Balayeuse accompagner">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
            <div class="outil">
                <img src="../images/karcher.jpg">
                <p>Nettoyeur haut pression</p>
                <span> Un nettoyeur haute pression est un équipement qui utilise de l'eau sous pression pour 
                    éliminer la saleté, la crasse et d'autres contaminants de surfaces telles que les murs, les terrasses, les véhicules.<br></span>
                    <p>Prix : 85 euros par jour</p>
                    <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="6">
                      <input type="hidden" name="nom" value="Nettoyeur haut pression">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
        </div>
    </section>
     <!-- outillage -->
</body>
</html>