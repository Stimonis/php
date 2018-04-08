<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    try {
        $db = new PDO('mysql:host=localhost;dbname=classDb;charset=utf8', 'root', 'simoonn891011',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }

    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>