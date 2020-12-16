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
        Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant.
    </div>

    <?php

    $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
    $months[7] = "août";

    echo $months[7];

    ?>

</body>

</html>