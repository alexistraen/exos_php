<!doctype html>
<html lang="fr">

<head>
    <title>Exo 1 - Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark text-center">

    <p class="text-warning">## Exercice 1
        Faire une page HTML permettant de donner à l'utilisateur :<br>
        - son User Agent<br>
        - son adresse ip<br>
        - le nom du serveur</p>

    <div class="m-5 text-light">

        <div>

            <?php

            echo '<span class="font-weight-bold text-info">Signature du navigateur : </span>' . htmlEntities($_SERVER["HTTP_USER_AGENT"]) . '<br> <span class="font-weight-bold text-info">Votre Ip : </span>' . $_SERVER['REMOTE_ADDR'] . '<br> <span class="font-weight-bold text-info">Nom du serveur : </span>' . $_SERVER['SERVER_NAME'];

            ?>

        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>