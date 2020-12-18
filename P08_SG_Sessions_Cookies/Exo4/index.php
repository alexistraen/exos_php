<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true);
    header('Location: user.php');
}


// Affichage des cookies
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    $displayCookies = '<span class="font-weight-bold text-info">Cookies <br> Login :</span> ' . $_COOKIE['login'] . '<br> <span class="font-weight-bold text-info">Password :</span> ' . $_COOKIE['password'];
} else {
    $displayCookies = '<span class="text-danger">Le formulaire n\'a pas été rempli</span>';
}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Exo 4 - Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark text-center">

    <p class="text-warning col-4 mx-auto">
        ## Exercice 4
        Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>

    <div class="m-5">
        <div class="mx-auto">

            <form enctype="multipart/form-data" action="index.php" method="post">
                <div>
                    <input class="text-center" placeholder="Login" type="text" id="login" name="login">
                </div>
                <div>
                    <input class="text-center" placeholder="Password" type="text" id="password" name="password">
                </div>
                <input class="btn btn-info mt-3" type="submit" value="Envoyer">
            </form>

        </div>
        <div class="mt-3 text-warning">

            <?php

            echo $displayCookies;

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