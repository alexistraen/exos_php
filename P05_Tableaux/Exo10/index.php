<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
</head>

<body>

    <div>
        ## Exercice 10
        Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
        Cela pourra être, par exemple, de la forme : **"Le département" + nom du département + "a le numéro" + numéro du département**
    </div>

    <?php

    $departs = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-calais', 80 => 'Somme'];

    foreach ($departs as $number => $name) {
        echo 'Le département ' . $name . ' a le numéro ' . $number . '<br>';
    }

    ?>

</body>

</html>