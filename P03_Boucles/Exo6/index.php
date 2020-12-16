<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6</title>
</head>

<body>

    <div>
        ## Exercice 6
        **En allant** de 20 à 0 avec un pas de 1, afficher le message **C'est presque bon**.
    </div>

    <?php

    for ($number = 20; $number >= 0; $number--) {
        echo "$number - C'est presque bon <br>";
    }

    ?>

</body>

</html>