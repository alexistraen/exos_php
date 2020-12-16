<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>

<body>

    <div>
        ## Exercice 5
        Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.
    </div>

    <?php

    $departs = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-calais', 80 => 'Somme'];

    foreach ($departs as $number => $name) {
        echo $number . ' - ' . $name . '<br>';
    }

    ?>

</body>

</html>