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
        <p class="displayMessage">
          <?= isset($messageError['firstName']) ? $messageError['firstName'] : '' ?><?= isset($messageSuccess['firstName']) ? $messageSuccess['firstName'] : '' ?>
        </p>
        <div>
          <label for="birthDate">Date de naissance</label>
        </div>
        <div>
          <input type="date" id="birthDate" name="birthDate" value="<?= (isset($_POST['birthDate'])) ? $_POST['birthDate'] : '' ?>">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['birthDate']) ? $messageError['birthDate'] : '' ?><?= isset($messageSuccess['birthDate']) ? $messageSuccess['birthDate'] : '' ?>
        </p>
        <div>
          <label for="birthCountry">Pays de naissance</label>
        </div>
        <div>
          <input type="text" id="birthCountry" name="birthCountry" value="<?= (isset($_POST['birthCountry'])) ? $_POST['birthCountry'] : '' ?>" placeholder="France">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['birthCountry']) ? $messageError['birthCountry'] : '' ?><?= isset($messageSuccess['birthCountry']) ? $messageSuccess['birthCountry'] : '' ?>
        </p>
        <div>
          <label for="nationality">Nationalité</label>
        </div>
        <div>
          <input type="text" id="nationality" name="nationality" value="<?= (isset($_POST['nationality'])) ? $_POST['nationality'] : '' ?>" placeholder="Française">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['nationality']) ? $messageError['nationality'] : '' ?><?= isset($messageSuccess['nationality']) ? $messageSuccess['nationality'] : '' ?>
        </p>
        <div>
          <label for="adress">Adresse</label>
        </div>
        <div>
          <input type="text" id="adress" name="adress" value="<?= (isset($_POST['adress'])) ? $_POST['adress'] : '' ?>" placeholder="01 rue blablabla">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['adress']) ? $messageError['adress'] : '' ?><?= isset($messageSuccess['adress']) ? $messageSuccess['adress'] : '' ?>
        </p>
        <div>
          <label for="mail">Adresse mail</label>
        </div>
        <div>
          <input type="email" id="mail" name="mail" value="<?= (isset($_POST['mail'])) ? $_POST['mail'] : '' ?>" placeholder="exemple@gmail.com">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['mail']) ? $messageError['mail'] : '' ?><?= isset($messageSuccess['mail']) ? $messageSuccess['mail'] : '' ?>
        </p>
        <div>
          <label for="phoneNumber">Numéro de téléphone</label>
        </div>
        <div>
          <input type="tel" id="phoneNumber" name="phoneNumber" value="<?= (isset($_POST['phoneNumber'])) ? $_POST['phoneNumber'] : '' ?>" placeholder="06.01.02.03.04">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['phoneNumber']) ? $messageError['phoneNumber'] : '' ?><?= isset($messageSuccess['phoneNumber']) ? $messageSuccess['phoneNumber'] : '' ?>
        </p>
        <div>
          <label for="degree">Diplôme</label>
        </div>
        <div>
          <select name="degree" id="degree">
            <option>Choisissez une option</option>
            <option value="none" <?= isset($_POST['degree']) && $_POST['degree'] == 'none' ? 'selected' : '' ?>>Sans diplôme</option>
            <option value="bac" <?= isset($_POST['degree']) && $_POST['degree'] == 'bac' ? 'selected' : '' ?>>Bac</option>
            <option value="bac2" <?= isset($_POST['degree']) && $_POST['degree'] == 'bac2' ? 'selected' : '' ?>>Bac+2</option>
            <option value="bac3supp" <?= isset($_POST['degree']) && $_POST['degree'] == 'bac3supp' ? 'selected' : '' ?>>Bac+3 ou supérieur</option>
          </select>
        </div>
        <p class="displayMessage">
          <?= isset($messageError['degree']) ? $messageError['degree'] : '' ?><?= isset($messageSuccess['degree']) ? $messageSuccess['degree'] : '' ?>
        </p>

        <div>
          <label for="poleEmploi">Numéro pôle emploi</label>
        </div>
        <div>
          <input type="text" id="poleEmploi" name="poleEmploi" value="<?= (isset($_POST['poleEmploi'])) ? $_POST['poleEmploi'] : '' ?>" placeholder="1234567A">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['poleEmploi']) ? $messageError['poleEmploi'] : '' ?><?= isset($messageSuccess['poleEmploi']) ? $messageSuccess['poleEmploi'] : '' ?>
        </p>
        <div>
          <label for="badgeNumber">Nombre de badge</label>
        </div>
        <div>
          <input type="number" id="badgeNumber" name="badgeNumber" value="<?= (isset($_POST['badgeNumber'])) ? $_POST['badgeNumber'] : '' ?>" placeholder="10">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['badgeNumber']) ? $messageError['badgeNumber'] : '' ?><?= isset($messageSuccess['badgeNumber']) ? $messageSuccess['badgeNumber'] : '' ?>
        </p>
        <div>
          <label for="codeAcademy">Liens codeacademy</label>
        </div>
        <div>
          <input type="text" id="codeAcademy" name="codeAcademy" value="<?= (isset($_POST['codeAcademy'])) ? $_POST['codeAcademy'] : '' ?>" placeholder="https://votre-lien.fr">
        </div>
        <p class="displayMessage">
          <?= isset($messageError['codeAcademy']) ? $messageError['codeAcademy'] : '' ?><?= isset($messageSuccess['codeAcademy']) ? $messageSuccess['codeAcademy'] : '' ?>
        </p>
        <div>
          <label for="heroStory">Si vous étiez un super héros/une super <br>héroïne, qui seriez-vous et pourquoi ?</label>
        </div>
        <div>
          <textarea type="text" id="heroStory" name="heroStory"><?= (isset($_POST['heroStory'])) ? $_POST['heroStory'] : '' ?></textarea>
        </div>
        <p class="displayMessage">
          <?= isset($messageError['heroStory']) ? $messageError['heroStory'] : '' ?><?= isset($messageSuccess['heroStory']) ? $messageSuccess['heroStory'] : '' ?>
        </p>
        <div>
          <label for="hackStory">Racontez-nous un de vos "hacks" (pas <br>forcément technique ou informatique)</label>
        </div>
        <div>
          <textarea type="text" id="hackStory" name="hackStory"><?= (isset($_POST['hackStory'])) ? $_POST['hackStory'] : '' ?></textarea>
        </div>
        <p class="displayMessage">
          <?= isset($messageError['hackStory']) ? $messageError['hackStory'] : '' ?><?= isset($messageSuccess['hackStory']) ? $messageSuccess['hackStory'] : '' ?>
        </p>
        <div>
          <label for="experience">Avez vous déjà eu une expérience avec la <br>programmation et/ou l'informatique avant <br>de remplir ce formulaire ?</label>
        </div>
        <div class="row">
          <input class="optionRadio" type="radio" id="experience" name="experience" value="Oui" <?= isset($_POST['experience']) && $_POST['experience'] == 'Oui' ? 'checked' : '' ?>></input>
          <label class="alignRadio" for="experience">Oui</label>

          <input class="optionRadio" type="radio" id="experience" name="experience" value="Non" <?= isset($_POST['experience']) && $_POST['experience'] == 'Non' ? 'checked' : '' ?>></input>
          <label class="alignRadio" for="experience">Non</label>
        </div>
        <p class="displayMessage">
          <?= isset($messageError['experience']) ? $messageError['experience'] : '' ?><?= isset($messageSuccess['experience']) ? $messageSuccess['experience'] : '' ?>
        </p>
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