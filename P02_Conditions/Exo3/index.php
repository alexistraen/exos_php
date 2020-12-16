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
        Créer deux variables **age** et **gender**. La variable **gender** peut prendre comme valeur :
        - Homme
        - Femme

        En fonction de l'âge et du genre afficher la phrase correspondante :
        - **Vous êtes un homme et vous êtes majeur**
        - **Vous êtes un homme et vous êtes mineur**
        - **Vous êtes une femme et vous êtes majeur**
        - **Vous êtes une femme et vous êtes mineur**

        Gérer tous les cas.
    </div>

    <?php

    $age = 50;
    $gender = "femme";

    if ($age >= 18 && $gender == "homme") {
        echo "Vous êtes un homme et vous êtes majeur";
    } else if ($age < 18 && $gender == "homme") {
        echo "Vous êtes un homme et vous êtes mineur";
    } else if ($age >= 18 && $gender == "femme") {
        echo "Vous êtes une femme et vous êtes majeure";
    } else {
        echo "Vous êtes une femme et vous êtes mineure";
    }

    ?>

</body>

</html>