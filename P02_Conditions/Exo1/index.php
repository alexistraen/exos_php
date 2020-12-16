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
        Créer une variable **age** et l'initialiser avec une valeur.
        Si l'âge est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.
    </div>

    <?php

        $age = 17;

        if ($age >= 18) {
            echo "Vous êtes majeur <br>";
        } else {
            echo "Vous êtes mineur <br>";
        }

        // Exemple sentence / déclaration de variable dans le if

        // On peut aussi déclarer sentence avant mais pas obligatoire

        $sentence = "";

        if ($age >= 18) {
            $sentence = "Vous êtes majeur";
        } else {
            $sentence = "Vous êtes mineur";
        }
        echo $sentence;

    ?>

</body>

</html>