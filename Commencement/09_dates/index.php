<?php
//  echo "<h1>Exercise 1</h1>";
//  echo date("d/m/Y");

//  echo "<h1>Exercise 2</h1>";
//  echo date("d-m-Y");

//  echo "<h1>Exercise 3</h1>";
//  echo date("l d F Y") ."<br>";
//  setlocale(LC_TIME, 'fr_FR.utf8');
//  echo strftime("%A %e %B %Y %R");

//  echo "<h1>Exercise 4</h1>";
//  $certainDate = strtotime('Tue, 02 Aug 2016 15:00:00');
//  $certainDateFr = strftime('%A %e %B %Y %R',$certainDate);
//  echo $certainDate .' : ' .$certainDateFr;

//  echo "<h1>Exercise 5</h1>";
//  $today = strtotime(date("d-m-Y"));
//  $subsDay = strtotime("16-05-2016");
//  $secs = ($today - $subsDay)/86400;    //==> return sec in difference
//  echo "(" .date("d-m-Y") .") - (" ."01-02-2018" .") = " .round($secs) ." jour(s)";

//  echo "<h1>Exercise 6</h1>";
//  $number = cal_days_in_month(CAL_GREGORIAN, 2, 2017);
//  echo "Il y avait {$number} jours en février 2017";

//  echo "<h1>Exercise 7</h1>";
//  $date = date("d-m-Y");
//  echo "dans 20 jours on sera le " .date('d-m-Y', strtotime($Date. ' + 20 days'));

//  echo "<h1>Exercise 8</h1>";
//  echo "On était le " .date('Y-m-d', strtotime($Date. ' - 22 days')) ." il y a 22 jours";

  //<h1>Exercise TP</h1>"


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table {
        border: 1px solid black;
        width: 50%;
      }
      tr{
        border: 1px solid black;
      }
      th {
        text-align: center;
        color: red;
        width: 100%;
        border: 1px solid black;
      }
      td {
        text-align: center;
        border: 1px solid black;
        width: 14%;
      }
    </style>
  </head>
  <body>
      <h1>Exercise TP</h1>
      <fieldset>
        <form action="index.php" method="POST">
          Mois : <br>
          <select name="mois">
            <option></option>
            <option>Janvier</option>
            <option>Février</option>
            <option>Mars</option>
            <option>Avril</option>
            <option>Mai</option>
            <option>Juin</option>
            <option>Juillet</option>
            <option>Août</option>
            <option>Septembre</option>
            <option>Octobre</option>
            <option>Novembre</option>
            <option>Décembre</option>
          </select> <br>
          Année : <br>
          <select name="annee">
            <option></option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2006</option>
            <option>2007</option>
            <option>2008</option>
            <option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
          </select> <br> <br>
          <input type="submit" name="send" value="Envoyer">
          <br>
  <?php
    echo "<br>";
    if (isset($_POST["send"])) {
      $mois = $_POST["mois"];
      $annee = $_POST["annee"];
      $JourDsMois = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
      echo "il y a " .$JourDsMois;

      echo "<table>";
      echo "<th>".$_POST["mois"] ." " .$_POST["annee"] ."</th>";
      echo "</table>";
      echo "<table>";
      echo "<tr><td>Lundi</td><td>Mardi</td><td>Mercredi</td><td>Jeudi</td><td>Vendredi</td><td>Samedi</td><td>Dimanche</td></tr>";
      echo "</table>";
  }
  ?>
        </form>
      </fieldset>
  </body>
</html>
