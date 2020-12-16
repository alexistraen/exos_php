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
        Traduire ce code avec des if et des else :

        <?php

        $age = 30;

        echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';

        ?>
    </div>

    <?php

    if ($age >= 18) {
        echo "Tu es majeur";
    } else {
        echo "Tu n'es pas majeur";
    }

    ?>

</body>

</html>