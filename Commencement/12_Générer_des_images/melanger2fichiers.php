<?php
    header ("Content-type: image/jpeg");
    // mélanger deux images
    // on charge d'abord les images
    $source = imagecreatefrompng("logo.png");
    $destination = imagecreatefromjpeg("coucherDeSoleil.jpg");

    // les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
    $largeur_source = imagesx($source);
    $hauteur_source = imagesy($source);
    $largeur_destination = imagesx($destination);
    $hauteur_destination = imagesy($destination);

    // On veut placer le logo en bas à droite de l'image
    $destination_x = $largeur_destination - $largeur_source;
    $destination_y = $hauteur_destination - $hauteur_source;

    // On met le logo (source) dans l'image de destination (la photo)
    // imagecopymerge(($destination, $source, $destination_x, $destination_y, $source_x, $source_y, $largeur_source, $hauteur_source, % de transparence)
    imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, 60);

    imagejpeg($destination);

?>