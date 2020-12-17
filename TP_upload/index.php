<?php

$extensions = array('.png', '.jpg', '.gif');
$maxSize = 1000000;
$repertory = 'img/';

$error = "";
$success = "";

// On vérifie qu'un fichier a bien été envoyé via le formulaire 'fileToUpload' et qu'il n'y a pas eu d'erreur pendant l'envoi
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
    // On récupère l'extension du fichier
    $extensionFile = strrchr($_FILES['fileToUpload']['name'], '.');
    // On vérifie que l'extension de notre fichier match avec celles autorisées dans le tableau 'extensions'
    if (in_array($extensionFile, $extensions)) {
        // On récupère le poids du fichier
        $fileSize = $_FILES['fileToUpload']['size'];
        // On compare le poids du fichier avec le max autorisé dans la variable 'maxSize'
        if ($fileSize <= $maxSize) {
            // On renomme notre fichier avec un ID unique (un nom random) et on lui redonne son extension
            $fileName = uniqid() . $extensionFile;
            // On upload le fichier avec la fonction 'move_uploaded_file' qui comprend 2 paramètres : 
            // - Notre fichier temporaire
            // - La destination du fichier et le nom qui a été renommé précedemment
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $repertory . $fileName)) {
                $success = 'Le fichier ' . $_FILES['fileToUpload']['name'] . ' a été upload !';
            }
        } else {
            $error = 'Désolé, votre fichier doit faire moins de 1Mo. <br> Votre fichier n\'a pas été upload.';
        }
    } else {
        $error = 'Votre fichier n\'est pas une image. <br> Votre fichier n\'a pas été upload.';
    }
}

?>

<!doctype html>
<html lang="fr">

<head>
    <title>TP Upload</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="bg-dark">

    <div class="container-fluid test text-center mt-3 text-info">

        <h1>Upload d'images</h1>

        <img class="mx-auto mb-2" id="imgPreview">
        <form enctype="multipart/form-data" action="index.php" method="post">
            <div>
                <label class="h5" for="fileToUpload">Choisir un fichier :</label>
            </div>
            <div>
                <input class="text-white" type="file" id="fileToUpload" name="fileToUpload" accept=".png, .jpg, .gif">
            </div>
            <div class="mt-3">
                <input class="btn btn-secondary" type="submit" value="Envoyer">
            </div>

            <div class="mt-3">
                <p><?php echo $error; ?></p>
                <p><?php echo $success; ?></p>
            </div>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="assets/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>