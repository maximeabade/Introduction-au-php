<!DOCTYPE html>
<html>
<head>
    <title>Exercice 2</title>
</head>
<body>
  <!-- Fonctions pour l'exercice -->
  <?php
    /* Fonction pour initier un tableau */
    function initTab() {
      $tab = array("0", "0", "0", "0", "0", "0", "0", "0", "0", "0");
      for($i=0; $i<10; $i++) {
        // on prend une valeur aléatoire entre 1 et 100
        $tab[$i] = rand(1, 100);
      }
      return($tab);
    }

    /* Fonction pour afficher un tableau */
    function afficher($tab) {
      echo("<table border=1><tr>");
          //on affiche les indices du tableau
          for ($i=0; $i<10; $i++) {
            echo("<td>". $i ."</td>");
          }
        echo("</tr><tr>");
          //on affiche les valeurs du tableau
          foreach ($tab as $value) {
            echo("<td>". $value ."</td>");
          }
        echo("</tr></table>");
    }

    /* Fonction pour trier un tableau avec la méthode du tri à bulle */
    function triABulle($tab) {
      $cpt = 1; //le compteur vaut "vrai" (=1)
      while ($cpt == 1) {
        $cpt = 0;
        for ($i=0; $i<9; $i++) {
          if ($tab[$i] > $tab[$i+1]) {
            $tab = echanger($tab, $i, $i+1);
            $cpt = 1;
          }
        }
      }
    return($tab);
    }

    /* Fonction pour échanger deux cases dans un tableau */
    function echanger($tab, $indice1, $indice2) {
      $tmp = $tab[$indice1];
      $tab[$indice1] = $tab[$indice2];
      $tab[$indice2] = $tmp;
      return($tab);
    }
  ?>




</body>
</html>
