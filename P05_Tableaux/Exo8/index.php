<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
</head>

<body>

    <div>
        ## Exercice 8
        Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
    </div>

    <?php

    $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];

    foreach ($months as $monthsList) {
        echo $monthsList . '<br>';
    }

    ?>

</body>

</html>