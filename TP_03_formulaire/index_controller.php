<?php

$messageError = [];
$messageSuccess = [];

$regexName = '/^\D{2,19}$/';
$dateValid = '/^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/';
$regexPoleEmploi = '/^([0-9]{7}+[A-Z])$/';
$adressValid = '/^[0-9a-z ,.\'-]+$/i';
$regexPhone = '/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/';
$regexBadges = '/^[0-9]{0,2}$/';

$degreesArray = [
    1 => 'none',
    2 => 'bac',
    3 => 'bac2',
    4 => 'bac3supp'
];

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

    if (isset($_POST['birthDate'])) {
        if (empty($_POST['birthDate'])) {
            $messageError['birthDate'] = 'Le champs est vide';
        } else if (!preg_match($dateValid, $_POST['birthDate'])) {
            $messageError['birthDate'] = 'Le format de date n\'est pas valide';
        } else {
            $messageSuccess['birthDate'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['birthCountry'])) {
        if (empty($_POST['birthCountry'])) {
            $messageError['birthCountry'] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['birthCountry'])) {
            $messageError['birthCountry'] = 'Le pays de naissance n\'est pas valide';
        } else if (strlen($_POST['birthCountry']) < 2 || strlen($_POST['birthCountry']) > 50) {
            $messageError['birthCountry'] = 'Le pays doit contenir de 2 à 50 caractères';
        } else {
            $messageSuccess['birthCountry'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['nationality'])) {
        if (empty($_POST['nationality'])) {
            $messageError['nationality'] = 'Le champs est vide';
        } else if (!preg_match($regexName, $_POST['nationality'])) {
            $messageError['nationality'] = 'Le pays de naissance n\'est pas valide';
        } else if (strlen($_POST['nationality']) < 2 || strlen($_POST['nationality']) > 50) {
            $messageError['nationality'] = 'Le pays doit contenir de 2 à 50 caractères';
        } else {
            $messageSuccess['nationality'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['adress'])) {
        if (empty($_POST['adress'])) {
            $messageError['adress'] = 'Le champs est vide';
        } else if (!preg_match($adressValid, $_POST['adress'])) {
            $messageError['adress'] = 'L\'adresse n\'est pas valide';
        } else if (strlen($_POST['adress']) < 2 || strlen($_POST['adress']) > 50) {
            $messageError['adress'] = 'L\'adresse doit contenir de 2 à 50 caractères';
        } else {
            $messageSuccess['adress'] = '<i class="fas fa-check formValid"></i>';
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

    if (isset($_POST['phoneNumber'])) {
        if (empty($_POST['phoneNumber'])) {
            $messageError['phoneNumber'] = 'Le champs est vide';
        } else if (!preg_match($regexPhone, $_POST['phoneNumber'])) {
            $messageError['phoneNumber'] = 'Le numéro de téléphone n\'est pas valide';
        } else {
            $messageSuccess['phoneNumber'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['degree'])) {
        if (empty($_POST['degree'])) {
            $messageError['degree'] = 'Le champs est vide';
        } else if (!in_array($_POST['degree'], $degreesArray)) {
            $messageError['degree'] = 'Choisissez une option';
        } else {
            $messageSuccess['degree'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['poleEmploi'])) {
        if (empty($_POST['poleEmploi'])) {
            $messageError['poleEmploi'] = 'Le champs est vide';
        } else if (!preg_match($regexPoleEmploi, $_POST['poleEmploi'])) {
            $messageError['poleEmploi'] = 'Identifiant pôle emploi invalide';
        } else {
            $messageSuccess['poleEmploi'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['badgeNumber'])) {
        if (empty($_POST['badgeNumber'])) {
            $messageError['badgeNumber'] = 'Le champs est vide';
        } else if (!preg_match($regexBadges, $_POST['badgeNumber'])) {
            $messageError['badgeNumber'] = 'Doit contenir des chiffres. (1 à 2 maximum)';
        } else {
            $messageSuccess['badgeNumber'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['codeAcademy'])) {
        if (empty($_POST['codeAcademy'])) {
            $messageError['codeAcademy'] = 'Le champs est vide';
        } else if (!filter_var($_POST['codeAcademy'], FILTER_VALIDATE_URL)) {
            $messageError['codeAcademy'] = 'La syntaxe du lien n\'est pas bonne';
        } else {
            $messageSuccess['codeAcademy'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['heroStory'])) {
        if (empty($_POST['heroStory'])) {
            $messageError['heroStory'] = 'Le champs est vide';
        } else if (strlen($_POST['heroStory']) < 2 || strlen($_POST['heroStory']) > 300) {
            $messageError['heroStory'] = 'Doit contenir entre 2 et 300 caractères';
        } else {
            $messageSuccess['heroStory'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['hackStory'])) {
        if (empty($_POST['hackStory'])) {
            $messageError['hackStory'] = 'Le champs est vide';
        } else if (strlen($_POST['hackStory']) < 2 || strlen($_POST['hackStory']) > 300) {
            $messageError['hackStory'] = 'Doit contenir entre 2 et 300 caractères';
        } else {
            $messageSuccess['hackStory'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    // Si l'index 'experience' n'existe pas dans le $_POST, c'est que l'user n'a pas coché le radio, donc on retourne le message d'erreur
    if (!array_key_exists('experience', $_POST)) {
        $messageError['experience'] = 'Veuillez faire un choix';
    } else {
        $messageSuccess['experience'] = '<i class="fas fa-check formValid"></i>';
    }

    if (count($messageError) == 0) {
        $secureLastName = htmlspecialchars($_POST['lastName']);
        $secureFirstName = htmlspecialchars($_POST['firstName']);
        $secureBirthDate = htmlspecialchars($_POST['birthDate']);
        $secureBirthCountry = htmlspecialchars($_POST['birthCountry']);
        $secureNationality = htmlspecialchars($_POST['nationality']);
        $secureAdress = htmlspecialchars($_POST['adress']);
        $secureMail = htmlspecialchars($_POST['mail']);
        $securePhoneNumber = htmlspecialchars($_POST['phoneNumber']);
        $secureDegree = htmlspecialchars($_POST['degree']);
        $securePoleEmploi = htmlspecialchars($_POST['poleEmploi']);
        $secureBadgeNumber = htmlspecialchars($_POST['badgeNumber']);
        $secureHeroStory = htmlspecialchars($_POST['heroStory']);
        $secureHackStory = htmlspecialchars($_POST['hackStory']);
        $secureExperience = htmlspecialchars($_POST['experience']);
    }
}
