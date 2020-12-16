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
        Faire une fonction qui prend deux paramètres : **l'âge et le genre d'une personne**. Le genre peut être :
        - Homme
        - Femme

        La fonction doit renvoyer en fonction des paramètres :
        - **Vous êtes un homme et vous êtes majeur**
        - **Vous êtes un homme et vous êtes mineur**
        - **Vous êtes une femme et vous êtes majeur**
        - **Vous êtes une femme et vous êtes mineur**
    </div>

    <?php

    function exo7($age = 50, $gender = "Homme") {
        if ($age >= 18 && $gender == "Homme") {
            return "Vous êtes un homme et vous êtes majeur";
        } else if ($age < 18 && $gender == "Homme") {
            return "Vous êtes un homme et vous êtes mineur";
        } else if ($age >= 18 && $gender == "Femme") {
            return "Vous êtes une femme et vous êtes majeure";
        } else {
            return "Vous êtes une femme et vous êtes mineure";
        }
    }

    echo exo7();

    ?>

</body>

</html>