<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3</title>
</head>
<body>
  <?php
    $tab = array (
      "HarryDu93"=>"giny<3",
      "HermioneDu64"=>"pattenrond",
      "RonDu33"=>"tfcForEver"
    );

    if(array_key_exists($_GET['login'], $tab)  &&  $tab[$_GET['login']] == $_GET['mdp']) {
      header('Location: http://localhost/TP5/Exercice3/accueil.php');
    } else {
      header('Location: http://localhost/TP5/Exercice3/connexion.html');
    }

   ?>

</body>
</html>
