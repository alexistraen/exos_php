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
        Créer une variable **isEasy** de type booléan et l'initialiser avec une valeur.
        Afficher **C'est facile!!** si c'est vrai. Dans le cas contraire afficher **C'est difficile !!!**.
        **Bonus :** L'écrire de deux manières différentes.
    </div>

    <?php

    $isEasy = true;

    // Méthode conseillée avec la dernière
    // On place le ! juste avant la variable pour inverser la vérif
    if (!$isEasy) {
        echo "C'est facile ! <br>";
    } else {
        echo "C'est difficile ! <br>";
    }

    //////////////////////////////////////////////////////////////////
    // 0 / 1
    if ($isEasy == 1) {
        echo "C'est facile ! <br>";
    } else {
        echo "C'est difficile ! <br>";
    }

    // true / false
    if ($isEasy == true) {
        echo "C'est facile ! <br>";
    } else {
        echo "C'est difficile ! <br>";
    }

    //////////////////////////////////////////////////////////////////


    // Méthode conseillée
    echo $isEasy ? "C'est facile !" : "C'est difficile !";

    ?>

</body>

</html>