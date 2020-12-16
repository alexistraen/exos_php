<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
</head>

<body>

    <div>
        ## Exercice 2
        Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
        **Tant que** la première variable n'est pas supérieure à 20 :
        - multiplier la première variable avec la deuxième
        - afficher le résultat
        - incrementer la première variable
    </div>

    <?php

        $firstNumber = 0;
        $secondNumber = 80;

        while ($firstNumber < 20) {
            $result = $firstNumber * $secondNumber;
            echo "$result <br>";
            $firstNumber++;
        }

    ?>

</body>

</html>