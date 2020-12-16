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
        Faire une fonction qui prend trois paramètres : **le nom, le prénom et l'âge d'une personne**. Elle doit renvoyer une chaine de la forme :
        "Bonjour" + **nom** + **prénom** + ",tu as" + **age** + "ans".
    </div>

    <?php

        function sentence($firstName = "Alexis", $lastName = "Traen", $age = 500) {
            return "Bonjour $lastName $firstName, tu as $age ans.";
        }

        echo sentence();

    ?>

</body>

</html>