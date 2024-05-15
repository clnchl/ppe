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
        <h1>Materiels de sciage</h1>
        <div class="outil-list">
            <div class="outil">
                <img src="../images/scie-egoine-stanley.jpg">
                <p >Scie egoine stanley</p>
                <span>La scie égoïne Stanley est une scie à main dotée d'une lame fine et dentée, 
                    conçue pour couper du bois.
                     Elle est généralement utilisée pour des coupes droites ou légèrement courbes.
                      La scie égoïne Stanley est souvent appréciée pour sa portabilité et sa facilité d'utilisation, 
                      en particulier pour les travaux de menuiserie et de bricolage. <br></span>
                      <p>Prix : 20 euros par jour</p>
                      <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="16">
                      <input type="hidden" name="nom" value="Scie egoine stanley">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>


            </div>
            <div class="outil">
                <img src="../images/scie_circulaire.jpg">
                <p>Scie circulaire</p>
                <span> La scie circulaire est une scie électrique équipée d'une lame circulaire rotative.
                     Elle est utilisée pour effectuer des coupes droites et précises dans divers matériaux,
                      tels que le bois, le plastique, ou le métal léger.
                       La scie circulaire est souvent utilisée dans la construction et la menuiserie pour des coupes rapides et nettes.<br></span>
                       <p>Prix : 40 euros par jour</p>
                       <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="17">
                      <input type="hidden" name="nom" value="Scie circulaire">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>


            </div>
            <div class="outil">
                <img src="../images/scie-plongeante.jpg">
                <p>Scie plongeante</p>
                <span>La scie plongeante est une scie circulaire spéciale qui permet à la lame de plonger directement dans le matériau,
                     offrant ainsi une coupe plus précise et la possibilité de commencer la coupe à n'importe quel endroit du matériau. 
                     Elle est souvent utilisée pour des coupes en profondeur contrôlées, notamment dans le bois massif.<br></span>
                     <p>Prix : 60 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="18">
                      <input type="hidden" name="nom" value="Scie plongeante">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
            
        </div>
    </section>
     <!-- outillage -->
</body>
</html>