<?php

  // jointures internes : ne sélectionnent que les données qui ont une correspondance entre les 2 tables

  $myselection =  "SELECT jeux_video.nom AS nom_jeu, proprietaires.prenom AS prenom_proprietaire
                   FROM proprietaires, jeux_video
                   WHERE jeux_video.ID_proprietaire = proprietaires.ID";

  // AS est utilisé pour créer un alias, par ex pour les nom de table on va prendre un alias d'une lettre pour plus de facilité

  $myselection = "SELECT j.nom AS nom_jeu, p.prenom AS prenom_proprietaire
                  FROM proprietaires AS p, jeux_video AS j
                  WHERE j.ID_proprietaire = p.ID";

  // AS est facultatif on peut très bien écrire cette requête comme ceci

  $myselection = "SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
                  FROM proprietaires p, jeux_video j
                  WHERE j.ID_proprietaire = p.ID";

  // avec un JOIN on écrirait cette requête de la façon suivante

  $myselection = "SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
                  FROM proprietaires p
                  INNER JOIN jeux_video j
                  ON j.ID_proprietaire = p.ID";

  // on peut faire des requêtes plus complexe avec des LIMIT,...

  $myselection = "SELECT j.nom nom_jeu, p.prenom prenom_proprio
                  FROM proprietaire p
                  INNER JOIN jeux_video j
                  ON j.ID_proprietaire = p.ID
                  WHERE j.console = 'PC'
                  ORDER BY prix DESC
                  LIMIT 0, 10";

?>

<?php

    // jointures externes : sélectionnent toutes les données, même si certaines n'ont aucune correspondance dans l'autre tables
    // pour récupérer les tables on va utiliser LEFT JOIN ou RIGHT JOIN

    $myselection = "SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
                    FROM proprietaires p
                    LEFT JOIN jeux_video j
                    ON j.ID_proprietaire = p.ID";

    // proprietairesest appelée la « table de gauche » etjeux_videola « table de droite ». LeLEFT JOINdemande à récupérer tout le
    // contenu de la table de gauche, donc tous les propriétaires, même si ces derniers n'ont pas d'équivalence dans la tablejeux_video.

    // LeRIGHT JOINdemande à récupérer toutes les données de la table dite « de droite », même si celle-ci n'a pas d'équivalent dans l'autre table.

    $myselection = "SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
                    FROM proprietaires p
                    RIGHT JOIN jeux_video j
                    ON j.ID_proprietaire = p.ID";

?>
