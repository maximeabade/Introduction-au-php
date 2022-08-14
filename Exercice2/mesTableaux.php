<?php
  require 'Exercice2.php';

  // on initie le tableau avec les valeurs aléatoires
  $tab = initTab();
  echo("<p>Tableau non trié</p>");
  afficher($tab);
  echo("<p>Tableau trié</p>");
  // on trie le tableau
  $tab = triABulle($tab);
  afficher($tab);
?>
