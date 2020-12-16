<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
</head>

<body>

    <div>
        ## Exercice 9
        Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
    </div>

    <?php

    $departs = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-calais', 80 => 'Somme'];

    foreach ($departs as $number => $name) {
        echo $number . ' - ' . $name . '<br>';
    }

    ?>

</body>

</html>