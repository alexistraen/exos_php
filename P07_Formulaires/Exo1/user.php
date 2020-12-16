<?php
if (isset($_GET["firstname"]) && isset($_GET["lastname"])) {
    if (preg_match("/^[a-zA-Z]+$/", $_GET["firstname"])) {
        $securedFirstName = htmlspecialchars($_GET["firstname"]);
    }
    if (preg_match("/^[a-zA-Z]+$/", $_GET["lastname"])) {
        $securedLastName = htmlspecialchars($_GET["lastname"]);
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Exo 1 - User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <p>## Exercice 1
        Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **GET**.</p>

    <div class="m-5 text-center">

        <button class="btn btn-secondary"><a class="text-white" href="index.php">Index</a></button>

        <div>

            <?= var_dump($_GET); ?>
            <p>Bonjour <?= $securedFirstName . " " . $securedLastName; ?></p>

        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>