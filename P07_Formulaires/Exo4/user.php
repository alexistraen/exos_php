<?php

$regexName = "/^[a-zA-Z]+$/";

if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {

    // Sécurisation des données, regex pour verifier prénom et nom
    if (preg_match($regexName, $_POST["firstname"])) {
        $securedFirstname = htmlspecialchars($_POST["firstname"]);
    } else {
        $securedFirstname = "<i>Mauvais format</i>";
    }

    if (preg_match($regexName, $_POST["lastname"])) {
        $securedLastname = htmlspecialchars($_POST["lastname"]);
    } else {
        $securedLastname = "<i>Mauvais format</i>";
    }

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Partie 7 - Exo 2 & 4</title>
</head>
<body>

<p>
Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**.
</p>

<?php var_dump($_POST);?>
<p>Bonjour <?= $securedFirstname . " " . $securedLastname; ?></p>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>