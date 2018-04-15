<?php 

    // on va d'abord indiquer le chemin JSON
    $json = file_get_contents("biblio.json");

    // récupération de données :
    $parsed_json = json_decode($json);

    // json_decode permet de récupérer une chaîne encodée en Json
    $date_jour = $parsed_json->{'response'}->{'features'}->{'date'};

    $heure_cac40 = $parsed_json->{'cotation_bourse'}[0]->{'bourse'}->{'heure'};
    $minute_cac40 = $parsed_json->{'cotation_bourse'}[0]->{'bourse'}->{'minute'};
    $nom_compagnie = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'compagnie'};
    $cotation_total = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'cotation'};
    $tendance_total = $parsed_json->{'cotation_bourse'}[0]->{'total'}->{'tendance'};

    
    echo "Le ".$date_jour." à ".$heure_cac40."h ".$minute_cac40.", la cotation de ".$nom_compagnie." est de ".$cotation_total." et sa tendance de ".$tendance_total." %";

    // Encoder des données dans le fichier Json
    
    $json2 = file_get_contents("myjson.json");
    $json2 = json_decode($json);

    $newDonnees = array (
        'heure' => "3",
        'minute' => "45"
    );

    $finalData = json_encode($newDonnees);

    file_put_contents('myjson.json', $finalData);

    $newDonnees2 = array (
        'heure' => "15",
        'minute' => "00"
    );

    // $finalData2 = json_encode($newDonnees2);

    file_put_contents('myjson.json', $newDonnees2);


    

    
?>