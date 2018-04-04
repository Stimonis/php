<?php
  include 'PDO.php';

  $myselection = 'INSERT INTO hiking (name, difficulty, distance, duration, height_difference, available)
                  VALUES (:name, :difficulty, :distance, :duration, :height_difference, :available)';


  // var_dump($id);
  $name = $_POST['name'];
  $difficulty = $_POST['difficulty'];
  $distance = $_POST['distance'];
  $duration = $_POST['duration'];
  $height_diff = $_POST['height_difference'];
  $available = $_POST['available'];

  $myrequest = $bdd->prepare($myselection);

  $myrequest -> bindParam(':name', $name);
  $myrequest -> bindParam(':distance', $distance);
  $myrequest -> bindParam(':difficulty', $difficulty);
  $myrequest -> bindParam(':duration', $duration);
  $myrequest -> bindParam(':height_difference', $height_diff);
  $myrequest -> bindParam(':available', $available);

  // var_dump($myrequest);
  $myrequest->execute();

  header('Location: create.php');
?>
