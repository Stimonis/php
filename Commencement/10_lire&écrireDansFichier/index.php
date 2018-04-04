<!-- Nous allons voir ici comment modifier un ficher (txt par ex) grâce à php -->

<?php

  // 1 : on ouvre le fichier
  $monfichier = fopen('new.txt', 'r+'); // on dit quel fichier on veut ouvrir et comment on veut l'ouvrir
                                        // ici r+ pour ouvrir en lecture/écriture (r pour la lecture seule)
  // il existe r, r+, a, a+ (a pour l'écriture)                          
  // 2 : on lit la première ligne du fichier (faire une boucle pour lire les autres)
  $ligne = fgets($monfichier);
  // echo $ligne;

  // 2 bis : on écrit dans le fichier
  fputs($monfichier, 'A ajouter !!!!');

  // 3 : quand on a fini de l'utiliser, on ferme le $monfichier
  fclose($monfichier);

  echo $ligne;

  // dans ce cas-ci on rajoute le texte après la première ligne, vu que l'on s est placé à la fin de la 1ère ligne
  // !!! Si on écrit en début de ligne, on remplace ce qui était écrit dans le fichier
?>


<?php

  $monfichier2 = fopen('new2.txt', 'r+');

  $pages_vues = fgets($monfichier2); // On lit la première ligne
  $pages_vues += 1; // On augmente de 1 ce nombres de pages vues
  fseek($monfichier2, 0); // On remet le curseur au début du fichier
  fputs($monfichier2, $pages_vues); // On écrit le nouveau nombre de pages vues

  fclose($monfichier);

  echo '<p>Cette page a été vue ' .$pages_vues .' fois!</p>';

?>
