<?php

$messageError = [];
$messageSuccess = [];

$regexName = '/^\D{2,19}$/';
$dateValid = '/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/';
$poleEmploiValid = '/^([0-9]{7}+[A-Z])$/';
$adressValid = '/^[0-9a-z ,.\'-]+$/i';

$degreesArray = [
    1 => 'Sans diplôme',
    2 => 'Bac',
    3 => 'Bac +2',
    4 => 'Bac +3 ou sup'
];

var_dump($_POST);

if (isset($_POST['submit'])) {

    if (isset($_POST['lastName'])) {
        if (empty($_POST['lastName'])) {
            $messageError['lastName'] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['lastName'])) {
            $messageError['lastName'] = 'Le nom n\'est pas valide';
        } else if (strlen($_POST['lastName']) < 2 || strlen($_POST['lastName']) > 20) {
            $messageError['lastName'] = 'Le nom doit contenir 2 à 20 caractères';
        } else {
            $secureLastName = htmlspecialchars($_POST['lastName']);
            $messageSuccess['lastName'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['firstName'])) {
        if (empty($_POST['firstName'])) {
            $messageError[1] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['firstName'])) {
            $messageError[1] = 'Le nom n\'est pas valide';
        } else if (strlen($_POST['firstName']) < 2 || strlen($_POST['firstName']) > 20) {
            $messageError[1] = 'Le nom doit contenir de 2 à 20 caractères';
        } else {
            $secureFirstName = htmlspecialchars($_POST['firstName']);
            $messageError[1] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['birthDate'])) {

        // Le format renvoyé par défaut est yyyy-mm-dd
        // Je convertis le $_POST birthDate en timestamp pour ensuite pouvoir lui attribuer le bon format : dd/mm/yyyy
        $birthDate = strtotime($_POST['birthDate']);
        $dateCorrectFormat = date("d/m/Y", $birthDate);

        if (empty($_POST['birthDate'])) {
            $messageError[2] = 'Le champs est vide';
        } else if (!preg_match($dateValid, $dateCorrectFormat)) {
            $messageError[2] = 'Le format de date n\'est pas valide';
        } else {
            $secureBirthDate = htmlspecialchars($dateCorrectFormat);
            $messageError[2] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['birthCountry'])) {
        if (empty($_POST['birthCountry'])) {
            $messageError[3] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['birthCountry'])) {
            $messageError[3] = 'Le pays de naissance n\'est pas valide';
        } else if (strlen($_POST['birthCountry']) < 2 || strlen($_POST['birthCountry']) > 40) {
            $messageError[3] = 'Le pays doit contenir de 2 à 40 caractères';
        } else {
            $secureBirthCountry = htmlspecialchars($_POST['birthCountry']);
            $messageError[3] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['nationality'])) {
        if (empty($_POST['nationality'])) {
            $messageError[4] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['nationality'])) {
            $messageError[4] = 'Le pays de naissance n\'est pas valide';
        } else if (strlen($_POST['nationality']) < 2 || strlen($_POST['nationality']) > 40) {
            $messageError[4] = 'Le pays doit contenir de 2 à 40 caractères';
        } else {
            $secureNationality = htmlspecialchars($_POST['nationality']);
            $messageError[4] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['adress'])) {
        if (empty($_POST['adress'])) {
            $messageError[5] = 'Le champs est vide';
        } else if (!preg_match($adressValid, $_POST['adress'])) {
            $messageError[5] = 'L\'adresse n\'est pas valide';
        } else if (strlen($_POST['adress']) < 2 || strlen($_POST['adress']) > 50) {
            $messageError[5] = 'L\'adresse doit contenir de 2 à 50 caractères';
        } else {
            $secureAdress = htmlspecialchars($_POST['adress']);
            $messageError[5] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['mail'])) {
        if (empty($_POST['mail'])) {
        }
    }

    // Radio
    if (!array_key_exists('experience', $_POST)) {
        $messageError['experience'] = 'Veuillez faire un choix';
    }

if (count($messageError) == 0)  {
    $secureAdress = htmlspecialchars($_POST['adress']);
}
    
}
