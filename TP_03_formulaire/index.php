<?php

require_once 'index_controller.php';

?>

<!doctype html>
<html lang="fr">

<head>
  <title>TP - Formulaire</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <div class="container-fluid">
    <div class="text-center mt-3">
      <h1><i class="far fa-edit"></i> Formulaire</h1>
    </div>

    <div class="d-flex text-white justify-content-center">

      <form enctype="multipart/form-data" action="index.php" method="post">
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
          <input type="text" id="firstName" name="firstName" value="<?= (isset($_POST['firstName'])) ? $_POST['firstName'] : '' ?>" placeholder="Anousone">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[1])) ? $messageError[1] : '' ?>
        </div>
        <div>
          <label for="birthDate">Date de naissance</label>
        </div>
        <div>
          <input type="date" id="birthDate" name="birthDate" value="<?= (isset($_POST['birthDate'])) ? $_POST['birthDate'] : '' ?>">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[2])) ? $messageError[2] : '' ?>
        </div>
        <div>
          <label for="birthCountry">Pays de naissance</label>
        </div>
        <div>
          <input type="text" id="birthCountry" name="birthCountry" value="<?= (isset($_POST['birthCountry'])) ? $_POST['birthCountry'] : '' ?>" placeholder="France">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[3])) ? $messageError[3] : '' ?>
        </div>
        <div>
          <label for="nationality">Nationalité</label>
        </div>
        <div>
          <input type="text" id="nationality" name="nationality" value="<?= (isset($_POST['nationality'])) ? $_POST['nationality'] : '' ?>" placeholder="Française">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[4])) ? $messageError[4] : '' ?>
        </div>
        <div>
          <label for="adress">Adresse</label>
        </div>
        <div>
          <input type="text" id="adress" name="adress" value="<?= (isset($_POST['adress'])) ? $_POST['adress'] : '' ?>" placeholder="01 rue blablabla">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[5])) ? $messageError[5] : '' ?>
        </div>
        <div>
          <label for="mail">Adresse mail</label>
        </div>
        <div>
          <input type="email" id="mail" name="mail" value="<?= (isset($_POST['mail'])) ? $_POST['mail'] : '' ?>" placeholder="exemple@gmail.com">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[6])) ? $messageError[6] : '' ?>
        </div>
        <div>
          <label for="phoneNumber">Numéro de téléphone</label>
        </div>
        <div>
          <input type="text" id="phoneNumber" name="phoneNumber" value="<?= (isset($_POST['phoneNumber'])) ? $_POST['phoneNumber'] : '' ?>" placeholder="06.01.23.45.67">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[7])) ? $messageError[7] : '' ?>
        </div>
        <div>
          <label for="degree">Diplôme</label>
        </div>
        <div>
          <select name="degree" id="degree">
            <option value="choix" selected>Choisir</option>
            <option value="1">Sans diplôme</option>
            <option value="2">Bac</option>
            <option value="3">Bac+2</option>
            <option value="4">Bac+3 ou supérieur</option>
          </select>
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[8])) ? $messageError[8] : '' ?>
        </div>

        <div>
          <label for="poleEmploi">Numéro pôle emploi</label>
        </div>
        <div>
          <input type="text" id="poleEmploi" name="poleEmploi" value="<?= (isset($_POST['poleEmploi'])) ? $_POST['poleEmploi'] : '' ?>" placeholder="1234567A">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[9])) ? $messageError[9] : '' ?>
        </div>
        <div>
          <label for="badgeNumber">Nombre de badge</label>
        </div>
        <div>
          <input type="number" id="badgeNumber" name="badgeNumber" value="<?= (isset($_POST['badgeNumber'])) ? $_POST['badgeNumber'] : '' ?>" placeholder="00">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[10])) ? $messageError[10] : '' ?>
        </div>
        <div>
          <label for="codeAcademy">Liens codeacademy</label>
        </div>
        <div>
          <input type="text" id="codeAcademy" name="codeAcademy" value="<?= (isset($_POST['codeAcademy'])) ? $_POST['codeAcademy'] : '' ?>" placeholder="https://votre-lien.fr">
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[11])) ? $messageError[11] : '' ?>
        </div>
        <div>
          <label for="superHero">Si vous étiez un super héros/une super <br>héroïne, qui seriez-vous et pourquoi ?</label>
        </div>
        <div>
          <textarea type="text" id="superHero" name="superHero"><?= (isset($_POST['superHero'])) ? $_POST['superHero'] : '' ?></textarea>
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[12])) ? $messageError[12] : '' ?>
        </div>
        <div>
          <label for="hackStory">Racontez-nous un de vos "hacks" (pas <br>forcément technique ou informatique)</label>
        </div>
        <div>
          <textarea type="text" id="hackStory" name="hackStory"><?= (isset($_POST['hackStory'])) ? $_POST['hackStory'] : '' ?></textarea>
        </div>
        <div class="displayMessage">
          <?= (isset($messageError[13])) ? $messageError[13] : '' ?>
        </div>
        <div>
          <label for="experience">Avez vous déjà eu une expérience avec la <br>programmation et/ou l'informatique avant <br>de remplir ce formulaire ?</label>
        </div>
        <div class="row">
          <input class="optionRadio" type="radio" id="experience" name="experience" value="Oui" <?= isset($_POST['experience']) && $_POST['experience'] == 'Oui' ? 'checked' : '' ?>></input>
          <label class="alignRadio" for="experience">Oui</label>

          <input class="optionRadio" type="radio" id="experience" name="experience" value="Non" <?= isset($_POST['experience']) && $_POST['experience'] == 'Non' ? 'checked' : '' ?>></input>
          <label class="alignRadio" for="experience">Non</label>
        </div>
        <div class="displayMessage">
          <?= (isset($messageError['experience'])) ? $messageError['experience'] : '' ?>
        </div>
        <input class="btnColor mb-5" name="submit" type="submit" value="Envoyer">
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