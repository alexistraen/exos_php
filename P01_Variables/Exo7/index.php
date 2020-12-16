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
        Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.
        **Attention** age est de type entier.
        Afficher : "Bonjour" + **lastname** + **firstname** + ",tu as" + **age** + "ans".
    </div>

    <?php

        $lastname = "Michel";
        $firstname = "Jean-michel";
        $age = 300;

        echo "Bonjour $lastname $firstname, tu as $age ans.<br>";

        // Version concat
        echo 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans.';

    ?>

</body>

</html>