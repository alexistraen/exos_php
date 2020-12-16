<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4</title>
</head>

<body>

    <div>
        ## Exercice 4
        Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
        - **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
        - **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
        - **Les deux nombres sont identiques** si les deux nombres sont égaux
    </div>

    <?php

        function numbers($num1 = 5, $num2 = 5) {
            if ($num1 > $num2) {
                return "Le premier nombre est plus grand";
            } else if ($num1 < $num2) {
                return "Le premier nombre est plus petit";
            } else {
                return "Les deux nombres sont identiques";
            }
        }

        echo numbers();

    ?>

</body>

</html>