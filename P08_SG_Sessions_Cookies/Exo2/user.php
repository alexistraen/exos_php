<?php

session_start();

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Exo - User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark text-center">

    <p class="text-warning col-4 mx-auto">## Exercice 2
        Sur la page index, faire un liens vers une autre page.
        Passer d'une page à l'autre le contenu des variables **lastname**,
        **firstname** et **age** grâce aux sessions. Ces variables auront
        été définies directement dans le code.
        Il faudra afficher le contenu de ces variables sur la deuxième page.</p>

    <div class="m-5">

        <div>

            <a class="btn btn-secondary" href="index.php">Index</a>

        </div>

        <div class="mt-5">

            <?php

            echo '<span class="text-white">Bonjour, je m\'appelle ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ' et j\'ai ' . $_SESSION['age'] . ' ans.</span>';

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