<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8</title>
</head>

<body>

    <div>
        ## Exercice 8
        Traduire ce code avec des if et des else :

        <?php

        $isOk = 1;

        echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
        ?>
    </div>

    <?php

    if ($isOk) {
        echo "c'est ok !!";
    } else {
        echo "c'est pas bon !!!";
    }

    ?>

</body>

</html>