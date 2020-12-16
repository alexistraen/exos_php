<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>

<body>

    <div>
        ## Exercice 5
        Traduire ce code avec des if et des else :


        <?php

        $gender = "Homme";

        echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        ?>
    </div>

    <?php

        if ($gender == "Homme") {
            echo "C'est un développeur !!!";
        } else {
            echo "C'est une développeuse !!!";
        }
        
    ?>

</body>

</html>