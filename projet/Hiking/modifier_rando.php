<?php
  include 'PDO.php';

  $id = $_POST['hike'];
  $name = $_POST['name'];
  $difficulty = $_POST['difficulty'];
  $distance = $_POST['distance'];
  $duration = $_POST['duration'];
  $height_diff = $_POST['height_difference'];
  $available = $_POST['available'];

  $myselection = "UPDATE hiking SET name = :name, difficulty = :difficulty, distance = :distance, duration = :duration, height_difference = :height_difference, available = :available
                  WHERE id = '$id' ";

  $myrequest = $bdd->prepare($myselection);


  $myrequest->bindParam(':name', $name);
  $myrequest->bindParam(':difficulty', $difficulty);
  $myrequest->bindParam(':distance', $distance);
  $myrequest->bindParam(':duration', $duration);
  $myrequest->bindParam(':height_difference', $height_diff);
  $myrequest->bindParam(':available', $available);

  $myrequest -> execute();

  header('Location: read.php');
 ?>
