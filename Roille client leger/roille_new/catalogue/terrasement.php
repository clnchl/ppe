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
        <h1>Materiels de terrasement</h1>
        <div class="outil-list">
            <div class="outil">
                <img src="../images/engin_terrassement.jpeg" >
                <p>Excavatrice de taille standars </p>
                <span>Une excavatrice de taille standard est une machine polyvalente utilisée dans la construction pour creuser, 
                    déplacer et soulever des matériaux. Elle est équipée d'un bras extensible,
                     d'une pelle et d'autres accessoires pour effectuer diverses tâches de terrassement. <br></span>
                     <p>Prix : 360 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="22">
                      <input type="hidden" name="nom" value="Excavatrice de taille standars">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
            <div class="outil">
                <img src="../images/terrassement1.jpeg">
                <p>Compacteur à plaque vibrante</p>
                <span> Un compacteur à plaque vibrante est un engin de construction conçu pour compacter les sols granulaires, les graviers et les matériaux similaires.
                     Il est équipé d'une plaque vibrante qui exerce une pression vers le bas, compressant le matériau sous-jacent et améliorant sa stabilité.<br></span>
                     <p>Prix : 110 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="23">
                      <input type="hidden" name="nom" value="Compacteur a plaque vibrante">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
            <div class="outil">
                <img src="../images/terrassement2.jpg" style="max-width: 250px">
                <p>Pilonneuse husqvarna</p>
                <span>Une pilonneuse Husqvarna est un équipement de construction utilisé pour compacter le sol de manière efficace.
                     Elle est équipée d'un moteur à combustion interne qui alimente un mécanisme de compactage vibratoire, 
                     généralement muni d'une plaque métallique à la base.<br></span>
                     <p>Prix : 90 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="24">
                      <input type="hidden" name="nom" value="Pilonneuse husqvarna">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
            </div>
        </div>
    
</body>
</html>
