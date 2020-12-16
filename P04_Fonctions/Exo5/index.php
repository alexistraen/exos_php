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
        Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
    </div>

    <?php

        function exo5($num = 10, $sentence = "est un nombre (:x)") {
            return $num . ' ' . $sentence;
        }

        echo exo5();

    ?>

</body>

</html>