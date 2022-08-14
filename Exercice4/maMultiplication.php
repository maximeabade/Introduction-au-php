<!DOCTYPE html>
<html>
<head>
    <title>Exercice 4</title>
</head>
<body>
  <?php
    $nb = rand(1, 20);
    echo("Table de ". $nb);
  ?>
  <form id="formulaire" method="post" action="maMultiplication.php">
    <?php
      for($i=0; $i<=10; $i++){
        echo("<p>".$nb." x ".$i." = <input type='text' id=\"".$i."\" name=\"".$i."\"/></p>");
      }
    ?>
  	 <p><input type="submit" value="Corriger" id="boutonValider" class="btn"/></p>
  </form>

  <?php
    if(!empty($_POST)) {
      $score = 0;
      for($i=0; $i<=10; $i++) {
        if ($_POST[$i] == "") {
          $score += 0;
        } else {
          if ($i*$nb == $_POST[$i]) {
            $score += 1;
          } else {
            $score -=1;
          }
        }
      }
      echo("Ton score est : ". $score);
    }
  ?>

  <script type="text/javascript" src="maMultiplication.js"></script>
</body>
</html>
