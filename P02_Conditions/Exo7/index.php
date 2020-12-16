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
        Traduire ce code avec des if et des else :

        <?php

        $isOk = true;

        echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
        ?>
    </div>

    <?php

        if ($isOk == false) {
            echo "c'est pas bon !!!";
        } else {
            echo "c'est ok !!";
        }

    ?>

</body>

</html>