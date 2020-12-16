<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>

<body>

    <div>
        ## Exercice 3
        Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines
    </div>

    <?php

    function sentences($sentence1 = "Début de la phrase", $sentence2 = "fin de la phrase.")
    {
        return $sentence1 .' '. $sentence2;
    }

    echo sentences();

    ?>

</body>

</html>