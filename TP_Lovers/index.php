<?php

$messageError = [];
$messageSuccess = [];

$regexName = '/^\D{2,19}$/';
$regexAge = '/^[0-9]{0,2}$/';
$regexZipCode = '/^([0-9]{2,6})$/';

$genderArray = [
    1 => 'Homme',
    2 => 'Femme'
];

if (!empty($_COOKIE)) {
    header('Location: lovers.php');
}

if (isset($_POST['submit'])) {

    if (isset($_POST['lastName'])) {
        if (empty($_POST['lastName'])) {
            $messageError['lastName'] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['lastName'])) {
            $messageError['lastName'] = 'Le nom n\'est pas valide';
        } else if (strlen($_POST['lastName']) < 2 || strlen($_POST['lastName']) > 50) {
            $messageError['lastName'] = 'Le nom doit contenir 2 à 50 caractères';
        } else {
            $messageSuccess['lastName'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['firstName'])) {
        if (empty($_POST['firstName'])) {
            $messageError['firstName'] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['firstName'])) {
            $messageError['firstName'] = 'Le nom n\'est pas valide';
        } else if (strlen($_POST['firstName']) < 2 || strlen($_POST['firstName']) > 50) {
            $messageError['firstName'] = 'Le nom doit contenir de 2 à 50 caractères';
        } else {
            $messageSuccess['firstName'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['age'])) {
        if (empty($_POST['age'])) {
            $messageError['age'] = 'Le champs est vide';
        } else if (!preg_match($regexAge, $_POST['age'])) {
            $messageError['age'] = 'Doit contenir des chiffres. (1 à 2 maximum)';
        } else {
            $messageSuccess['age'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['gender'])) {
        if (empty($_POST['gender'])) {
            $messageError['gender'] = 'Le champs est vide';
        } else if (!in_array($_POST['gender'], $genderArray)) {
            $messageError['gender'] = 'Choisissez une option';
        } else {
            $messageSuccess['gender'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['zipcode'])) {
        if (empty($_POST['zipcode'])) {
            $messageError['zipcode'] = 'Le champs est vide';
        } else if (!preg_match($regexZipCode, $_POST['zipcode'])) {
            $messageError['zipcode'] = 'Code postal invalide';
        } else {
            $messageSuccess['zipcode'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['mail'])) {
        if (empty($_POST['mail'])) {
            $messageError['mail'] = 'Le champs est vide';
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $messageError['mail'] = 'L\'adresse mail n\'est pas valide';
        } else {
            $messageSuccess['mail'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (!array_key_exists('genderSearch', $_POST)) {
        $messageError['genderSearch'] = 'Veuillez faire un choix';
    } else {
        $messageSuccess['genderSearch'] = '<i class="fas fa-check formValid"></i>';
    }

    if (count($messageError) == 0) {
        $secureLastName = htmlspecialchars($_POST['lastName']);
        $secureFirstName = htmlspecialchars($_POST['firstName']);
        $secureAge = htmlspecialchars($_POST['age']);
        $secureGender = htmlspecialchars($_POST['gender']);
        $secureZipCode = htmlspecialchars($_POST['zipcode']);
        $secureMail = htmlspecialchars($_POST['mail']);
        $secureGenderSearch = htmlspecialchars($_POST['genderSearch']);

        setcookie('user_lastName', $_POST['lastName'], time() + 24*3600, null, null, false, true);
        setcookie('user_firstName', $_POST['firstName'], time() + 24*3600, null, null, false, true);
        setcookie('user_age', $_POST['age'], time() + 24*3600, null, null, false, true);
        setcookie('user_gender', $_POST['gender'], time() + 24*3600, null, null, false, true);
        setcookie('user_zipCode', $_POST['zipcode'], time() + 24*3600, null, null, false, true);
        setcookie('user_mail', $_POST['mail'], time() + 24*3600, null, null, false, true);
        setcookie('user_genderSearch', $_POST['genderSearch'], time() + 24*3600, null, null, false, true);

        header('Location: lovers.php');
    }
}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Dual Love</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="container-fluid text-center">
        <h1 class="mt-3">Dual Love</h1>
        <h2 class="mt-3">Inscrivez-vous sur notre site !</h1>
            <div class="bg-dark col-lg-3 col-sm-12 mx-auto">
                <form class="mt-5" action="index.php" enctype="multipart/form-data" method="post">
                    <div>
                        <label for="lastName">Nom</label>
                    </div>
                    <div>
                        <input type="text" id="lastName" name="lastName" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>" placeholder="Mounivongs">
                    </div>
                    <p class="displayMessage">
                        <?= isset($messageError['lastName']) ? $messageError['lastName'] : '' ?><?= isset($messageSuccess['lastName']) ? $messageSuccess['lastName'] : '' ?>
                    </p>
                    <div>
                        <label for="firstName">Prénom</label>
                    </div>
                    <div>
                        <input type="text" id="firstName" name="firstName" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>" placeholder="Mounivongs">
                    </div>
                    <p class="displayMessage">
                        <?= isset($messageError['firstName']) ? $messageError['firstName'] : '' ?><?= isset($messageSuccess['firstName']) ? $messageSuccess['firstName'] : '' ?>
                    </p>
                    <div>
                        <label for="age">Age</label>
                    </div>
                    <div>
                        <input type="number" id="age" name="age" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>" placeholder="50">
                    </div>
                    <p class="displayMessage">
                        <?= isset($messageError['age']) ? $messageError['age'] : '' ?><?= isset($messageSuccess['age']) ? $messageSuccess['age'] : '' ?>
                    </p>
                    <div>
                        <label for="gender">Genre</label>
                    </div>
                    <div>
                        <select name="gender" id="gender">
                            <option>Choisir</option>
                            <option value="Homme" <?= isset($_POST['gender']) && $_POST['gender'] == 'Homme' ? 'selected' : '' ?>>Homme</option>
                            <option value="Femme" <?= isset($_POST['gender']) && $_POST['gender'] == 'Femme' ? 'selected' : '' ?>>Femme</option>
                        </select>
                    </div>
                    <p class="displayMessage">
                        <?= isset($messageError['gender']) ? $messageError['gender'] : '' ?><?= isset($messageSuccess['gender']) ? $messageSuccess['gender'] : '' ?>
                    </p>
                    <div>
                        <label for="zipcode">Code postal</label>
                    </div>
                    <div>
                        <input type="text" id="zipcode" name="zipcode" value="<?= isset($_POST['zipcode']) ? $_POST['zipcode'] : '' ?>" placeholder="80500">
                    </div>
                    <p class="displayMessage">
                        <?= isset($messageError['zipcode']) ? $messageError['zipcode'] : '' ?><?= isset($messageSuccess['zipcode']) ? $messageSuccess['zipcode'] : '' ?>
                    </p>
                    <div>
                        <label for="mail">Adresse mail</label>
                    </div>
                    <div>
                        <input type="email" id="mail" name="mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" placeholder="michel@gmail.com">
                    </div>
                    <p class="displayMessage">
                        <?= isset($messageError['mail']) ? $messageError['mail'] : '' ?><?= isset($messageSuccess['mail']) ? $messageSuccess['mail'] : '' ?>
                    </p>
                    <div>
                        <label for="genderSearch">Je recherche</label>
                    </div>
                    <div class="text-white">
                        <input type="radio" id="genderSearch" name="genderSearch" value="Homme"<?= isset($_POST['genderSearch']) && $_POST['genderSearch'] == 'Homme' ? 'checked' : '' ?>>
                        <label for="genderSearch">Homme</label>
                        <input type="radio" id="genderSearch" name="genderSearch" value="Femme"<?= isset($_POST['genderSearch']) && $_POST['genderSearch'] == 'Femme' ? 'checked' : '' ?>>
                        <label for="genderSearch">Femme</label>
                    </div>
                    <p class="displayMessage">
                        <?= isset($messageError['genderSearch']) ? $messageError['genderSearch'] : '' ?><?= isset($messageSuccess['genderSearch']) ? $messageSuccess['genderSearch'] : '' ?>
                    </p>
                    <input class="mb-3" name="submit" type="submit" value="Envoyer">
                </form>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
</body>

</html>