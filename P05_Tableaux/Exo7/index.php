<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>

<body>

    <div>
        ## Exercice 7
        Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
    </div>

    <?php

    $departs = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-calais', 80 => 'Somme'];

    $departs[51] = 'Reims';

    foreach($departs as $name => $number){
        echo $name . ' - ' . $number . '<br>';
    }

    ?>

</body>

</html>