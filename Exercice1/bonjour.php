<!DOCTYPE html>
<html>
<head>
    <title>Exercice 1</title>
</head>
<body>

  <?php
    echo 'Bonjour tout le monde, on est le : ';
    echo date("m.d.y");
    echo ' et il est : ';
    echo date("G:i:s");
    echo "<br/>";


    function calculAge($value){
      $date = explode("/", $value);
      $annee = $date[2];
      $age = date("Y") - $annee;
      return $age;
    }
  ?>

  <?php
    $joueurs = array (
      array("Giroud",	"Olivier",	"30/09/1986",	"Attaquant"),
      array("Griezman",	"Antoine",	"21/03/1991",	"Attaquant"),
      array("MBappe",	"Kylian",	"20/11/1998",	"Attaquant"),
      array("Kante",	"N'Golo",	"28/03/1991",	"Milieu"),
      array("Umtiti",	"Samuel",	"14/09/1993",	"Défense"),
      array("Lloris",	"Hugo",	"26/12/1986",	"Gardien")
    );
  ?>

  <table>

    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Date de naissance</th>
      <th>Poste</th>
      <th>Age</th>
    </tr>

    <?php
      foreach ($joueurs as $nom) {
        echo "<tr>";
        foreach ($nom as $value) {
          echo "<td> $value </td>";
        }
        echo "<td>". calculAge($nom[2]) ."</td>";
        echo "</tr>";
      }
    ?>

  </table>


</body>
</html>
