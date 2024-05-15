<?php 
   // Vérifier si une session est déjà active, sinon la démarrer
   if (!isset($_SESSION)) {
      session_start();
   }

   // Connexion à la base de données
   $con = mysqli_connect("localhost", "root", "", "roille_sa");

   // Vérifier la connexion
   if (!$con) {
      die('Erreur : ' . mysqli_connect_error());
   }

   // Supprimer les produits
   if (isset($_GET['del'])) {
      $idmateriel_del = $_GET['del'];
      // Suppression
      if (isset($_SESSION['panier'])) {
         unset($_SESSION['panier'][$idmateriel_del]);
      }
   }

   // Récupération de l'ID depuis le lien
   if (isset($_GET['idmateriel'])) {
      $idmateriel = $_GET['idmateriel'];
      // Vérifier si le produit existe dans la base de données
      $produit = mysqli_query($con, "SELECT * FROM materiel WHERE idmateriel = $idmateriel");
      if (mysqli_num_rows($produit) == 0) {
         // Si le produit n'existe pas
         die("Ce produit n'existe pas");
      }
      // Ajouter le produit dans le panier
      if (isset($_SESSION['panier'][$idmateriel])) {
         // Si le produit est déjà dans le panier, augmenter la quantité
         $_SESSION['panier'][$idmateriel]++;
      } else {
         // Si le produit n'est pas dans le panier, l'ajouter avec une quantité de 1
         $_SESSION['panier'][$idmateriel] = 1;
      }
      // Redirection vers la page index.php
      header("Location: index.php");
      exit; // Terminer le script après la redirection
   }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Ajout des styles Bootstrap Icons -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css" rel="stylesheet">
     
    !<style>
        .container {
            display: flex;
            flex-direction: column;
        }
        .produit {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .btn-supprimer {
            font-size: 10px;
        }
        .center {
            text-align: center;
        }
        .nom-col {
            width: 30%;
        }
        .prix-col {
            width: 20%;
        }
        .quantite-col {
            width: 20%;
        }
        .action-col {
            width: 10%;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Panier</h1>
    <section>
        <table>
            
            <tr>
                    <th class="nom-col">Nom</th>
                    <th class="prix-col">Prix</th>
                    <th class="quantite-col">Quantité</th>
                    <th class="action-col">Action</th>
                </tr>

            <?php 
              $total = 0 ;
              // Liste des produits
              if (isset($_SESSION['panier'])) {
                 $ids = array_keys($_SESSION['panier']);
                 if(empty($ids)){
                    echo "<tr><td colspan='5'>Votre panier est vide</td></tr>";
                 } else {
                    foreach ($ids as $idmateriel) {
                        // Utilisation de la variable $idmateriel pour récupérer les détails du produit
                        $materiel = mysqli_query($con, "SELECT * FROM materiel WHERE idmateriel = $idmateriel");
                        if ($materiel && $row = mysqli_fetch_assoc($materiel)) {
                            // Récupération de la quantité à partir de $_SESSION['panier']
                            $quantite = $_SESSION['panier'][$idmateriel];
                            $prix_materiel = floatval($row['prix']);
                            $subtotal = $prix_materiel * intval($quantite);
                            $total += $subtotal;
                            ?>
                            <tr>
                                <td><img src="images/<?= $row['img'] ?>" style="max-width: 100px; max-height: 100px;"></td>
                                <td><?= $row['nom'] ?></td>
                                <td><?= $prix_materiel ?>€</td>
                                <td><?= $quantite ?></td>

                                <td><a href="panier.php?del=<?= $row['idmateriel'] ?>"><img src="images/delete.jpeg" style="max-width: 30px; max-height: 30px; margin-left: 300px;"></a></td>
                            </tr>
                            <?php
                        }
                    }
                 }
              }
            ?>
            <tr class="total">
                <th colspan="5">Total : <?= $total ?>€</th>
            </tr>
        </table>
    </section>
          
        <div class="center">
            <a href="reservation.php" class="btn">Valider le panier</a>
        </div>
    </div>

    
</body>
</html>
