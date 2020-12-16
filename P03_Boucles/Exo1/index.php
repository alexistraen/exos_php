<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
</head>

<body>

    <div>
        ## Exercice 1
        Créer une variable et l'initialiser à 0.
        **Tant que** cette variable n'atteint pas 10, il faut :
        - l'afficher
        - l'incrementer
    </div>

    <?php

    $number = 1;

    while ($number <= 10) {
        echo $number++.'<br>';
    }

    ?>

</body>

</html>