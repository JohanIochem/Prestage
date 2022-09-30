<?php
 
session_start();
include("infos.php");
@$valider = $_POST["valider"];
$erreur = "";
if (isset($valider)) {
include("connexion.php");
$verify = $pdo->prepare("select * from users where pseudo=? and password=? limit 1");
$verify->execute(array($pseudo, $pass_crypt));
$user = $verify->fetchAll();
if (count($user) > 0) {
$_SESSION["prenom_nom"] = ucfirst(strtolower($user[0]["prenom"])) .
" "  .  strtoupper($user[0]["nom"]);
$_SESSION["connecter"] = "yes";
header("location:session.php");
} else
$erreur = "Mauvais login ou mot de passe!";
}
?>
 
<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />

<link rel="stylesheet" href="/bootstrap.css">
<link rel="stylesheet" href="/style.css">

</head>
<body  onLoad="document.fo.login.focus()">
<h1>Authentification</h1>
<div  class="erreur"><?php  echo  $erreur  ?></div>
<form action="/config/connexion/infos.php" method="post">
<input  type="text"  name="pseudo"  placeholder="Votre Pseudo"  /><br  />
<input  type="password"  name="password"  placeholder="Mot de passe"  /><br  />
<input  type="submit"  name="valider"  value="S'authentifier"  />
<a href="/config/connexion/inscription.php">Créer votre Compte</a>
</form>
</body>
</html>