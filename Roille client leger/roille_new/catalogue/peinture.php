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
        <h1>Materiels de peinture</h1>
        <div class="outil-list">
            <div class="outil">
                <img src="../images/pinceau_plat">
                <p>Pinceau plat</p>
                <span>Le pinceau plat est un outil de peinture avec des poils plats et larges.
                     Il est utilisé pour appliquer de la peinture sur des surfaces plus petites, 
                     comme les coins ou les moulures, et pour créer des lignes nettes. <br></span>
                     <p>Prix : 15 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="7">
                      <input type="hidden" name="nom" value="Pinceau plat">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
            <div class="outil">
                <img src="../images/rouleau.jpeg">
                <p>Rouleau</p>
                <span>Le rouleau est un outil de peinture cylindrique avec une poignée, 
                    utilisé pour appliquer de la peinture sur des surfaces plus grandes et planes. 
                    Il est efficace pour couvrir rapidement de grandes zones.<br></span>
                    <p>Prix : 10 euros par jour</p>
                    <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="9">
                      <input type="hidden" name="nom" value="Rouleau">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
          
            </div>
            <div class="outil">
                <img src="../images/ensemble-pompe-peinture.jpg">
                <p>Ensemble pompe à peinture</p>
                <span>L' ensemble de pompe à peinture est un système complet qui comprend une pompe, 
                    des tuyaux et un pistolet pulvérisateur. Il est utilisé pour appliquer uniformément
                     la peinture sur de grandes surfaces, offrant une couverture rapide et une finition lisse.<br></span>
                     <p>Prix : 110 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="8">
                      <input type="hidden" name="nom" value="Ensemble pompe a peinture">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
        

            </div>
        </div>
    </section>
     <!-- outillage -->
    
</body>
</html>