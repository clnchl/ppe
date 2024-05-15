<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de connexion</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <?php include('../includes/menu.php') ; ?>
</head>
<body class="form"> 
<form id="loginForm" action="../gestion/gestion_connexion.php" method="post" onsubmit="return handleLogin()">

    <h1>Se connecter</h1>
    
    <div class="inputs">
      <label for="email">Adresse e-mail :</label> 
      <input type="email" id="email" name="email" placeholder="Email" required> 
      
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" placeholder="Mot de passe" required>
    </div>
    
    <p class="inscription">Je n'ai pas de compte. <a href="formulaire_inscription.php">Inscrivez-vous ici</a></p> 
    <div align="center">
      <button type="submit">Se connecter</button>
    </div>
  </form>
  <div id="connectedIndicator" style="display: none;">
    <p>Connecté <span class="connected">&#x2714;</span></p>
  </div>
</body>
</html>
