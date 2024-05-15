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
        <h1>Materiels de soudure</h1>
        <div class="outil-list">
            <div class="outil">
                <img src="../images/soudeuse_fibre.jpeg">
                <p>Soudeuse Fibre</p>
                <span> La soudeuse fibre est un équipement utilisé dans le domaine 
                    des télécommunications pour fusionner ensemble les extrémités de fibres optiques. 
                    Elle utilise une technique de soudage par fusion pour assurer une connexion précise 
                    et à faible perte entre les fibres, ce qui est essentiel dans la construction et la 
                    maintenance des réseaux de communication à fibre optique. <br></span>
                     <p>Prix : 70 euros par jour</p>
                     <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="19">
                      <input type="hidden" name="nom" value="Soudeuse Fibre">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
                     
            </div>
            <div class="outil">
                <img src="../images/positionneur_de_soudage_500Kg.png">
                <p>Positionneur de soudage 500Kg</p>
                <span>Le positionneur de soudage 500Kg est un dispositif utilisé dans les opérations de soudage pour maintenir et positionner les pièces à souder de manière optimale.
                     Sa capacité de 500 kg indique qu'il peut manipuler des charges relativement lourdes,
                      améliorant ainsi la précision et l'efficacité du processus de soudage.<br></span>
                      <p>Prix : 200 euros par jour</p>
                      <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="20">
                      <input type="hidden" name="nom" value="Positionneur de soudage 500Kg">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>

            </div>
            <div class="outil">
                <img src="../images/poste_a_souder.jpg">
                <p>Poste à souder</p>
                <span> Le poste à souder est un appareil utilisé pour effectuer des opérations de soudage. 
                    Il génère la chaleur nécessaire pour fondre les métaux à souder et crée une liaison solide entre eux. 
                    Les postes à souder peuvent utiliser différentes sources d'énergie, telles que l'électricité, 
                    le gaz, ou d'autres méthodes.<br></span>
                    <p>Prix : 70 euros par jour</p>
                    <form action="../gestion/gestion_panier.php" method="post">
                      <input type="hidden" name="idmateriel" value="21">
                      <input type="hidden" name="nom" value="Poste a souder">
                      <button type="submit" class="orange_link btn-louer">Louer</button>
                      </form>
            </div>
           
        </div>
    </section>
     <!-- outillage -->

</body>
</html>