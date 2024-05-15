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
        <h1>Materiels de perforation</h1>
        <div class="outil-list">
            <div class="outil">
                <img src="../images/perforateur.jpg">
                <p>Perceuse viseuse</p>
                <span> Une perceuse visseuse est un outil électroportatif polyvalent utilisé pour percer des trous et visser/dévisser des vis.
                     Elle est largement utilisée dans les travaux de construction, de menuiserie et de bricolage. <br></span>
                     <p>Prix : 25 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="10">
                      <input type="hidden" name="nom" value="Perceuse viseuse">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
            </div>
            <div class="outil">
                <img src="../images/perforatrice_hydraulique.jpg">
                <p>Perforatrice hydraulique</p>
                <span> Une perforatrice hydraulique est un outil puissant utilisé dans 
                    la construction et les travaux de démolition pour percer des trous dans des
                     matériaux durs tels que le béton ou la pierre. Elle fonctionne avec la puissance
                      hydraulique pour une performance optimale.<br></span>
                      <p>Prix : 110 euros par jour</p>
                      <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="11">
                      <input type="hidden" name="nom" value="Perforatrice hydraulique">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
       

            </div>
            <div class="outil">
                <img src="../images/marteau_perforateur.jpg">
                <p>Marteau perforateur</p>
                <span>Un marteau perforateur est un outil électroportatif conçu pour percer des trous dans des matériaux durs
                     tels que le béton et la maçonnerie. 
                     Il combine les fonctions de perçage et de martelage pour une efficacité accrue.<br></span>
                     <p>Prix : 35 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="12">
                      <input type="hidden" name="nom" value="Marteau perforateur">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
       
            </div>
        </div>
    </section>
     <!-- outillage-->
    
</body>
</html>