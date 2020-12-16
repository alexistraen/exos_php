<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4</title>
</head>

<body>

    <div>
        ## Exercice 4
        Créer une variable et l'initialiser à 1.
        **Tant que** cette variable n'atteint pas 10, il faut :
        - l'afficher
        - l'incrementer de la moitié de sa valeur
    </div>

    <?php

    $number = 1;

    while ($number < 10) {
        echo "$number <br>";
        $number += ($number / 2);
        //$number = $number + ($number / 2);
    }

    ?>

</body>

</html>