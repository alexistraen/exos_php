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
        **En allant** de 200 à 0 avec un pas de 12, afficher le message **Enfin !!!!**.
    </div>

    <?php

    for ($number = 200; $number >= 0; $number -= 12) {
        echo "$number - Enfin !!!! <br>";
    }

    ?>

</body>

</html>