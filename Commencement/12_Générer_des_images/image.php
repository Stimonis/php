<?php
    // on annonce au navigateur que l'on va renvoyer une image PNG
    header("Content-type: image/jpeg");
    
    // on envoie une image existante
    $image2 = imagecreatefromjpeg("coucherDeSoleil.jpg");
    // imagecreatefrompng si c'est un format PNG
    
    // maintenant on va afficher l'image
    imagepng($image2);

    
    header("Content-type: image/png");
    // On crée une nouvelle image (inexistante), on met la largeur et hauteur entre ()
    $image = imagecreate(600,350);

    // on va mettre des couleurs dans l'image
    $bleuclair = imagecolorallocate($image, 156, 227, 254);
    $orange = imagecolorallocate($image, 255, 128, 0);
    $bleu = imagecolorallocate($image, 0, 0, 255);
    $noir = imagecolorallocate($image, 0, 0, 0);
    $blanc = imagecolorallocate($image, 255, 255 , 255);
    // Une chose très importante à noter : la première fois que vous faites un appel à la fonctionimagecolorallocate, cette couleur devient la couleur de fond de votre image.

    // écrire du texte dans l'image
    //  imagestring($image, $police, $x, $y, $texte_à_écrire, $couleur)
    imagestring($image, 4, 47, 17, "hello world", $noir);


    // dessiner une forme
    // dessiner un pixel ImageSetPixel($image, $x, $y, $couleur)
    ImageSetPixel($image, 20, 20, $noir);
    ImageSetPixel($image, 20, 30, $noir);
    ImageSetPixel($image, 20, 40, $noir);
    
    // dessiner une ligne ImageLine ($image, $x1, $y1, $x2, $y2, $couleur);
    ImageLine($image, 30, 0, 30, 120, $noir);

    // dessiner une ellipse ImageEllipse ($image, $x, $y, $largeur, $hauteur, $couleur);
    ImageEllipse ($image, 100, 100, 100, 50, $blanc);
    
    // dessiner un rectangleImage Rectangle ($image, $x1, $y1, $x2, $y2, $couleur);
    ImageRectangle($image, 130, 130, 260, 220, $noir);

    // dessiner un polygone ImagePolygon ($image, $array_points, $nombre_de_points, $couleur);
    $points = array(110, 240, 220, 250, 260, 330);
    ImagePolygon($image, $points, 3, $noir);

    // rendre une image transparente, ça ne fonctionne que sur un format PNG
    imagecolortransparent($image, $orange);  
    
    imagepng($image);

    // on enregistre l'image
    imagepng($image,"monimage.png");
    // la variable $image contient une image
    // On dit que $image est une « ressource ». Une ressource est une variable un peu spéciale qui contient toutes les informations sur un objet

   

?>