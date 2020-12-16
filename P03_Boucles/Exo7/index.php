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
        **En allant** de 1 à 100 avec un pas de 15, afficher le message **On tient le bon bout**.
    </div>

    <?php

    for ($number = 1; $number <= 100; $number += 15) {
        echo "$number - On tient le bon bout <br>";
    }

    ?>

</body>

</html>