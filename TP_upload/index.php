<?php

$extensions = array('.png', '.jpeg', '.jpg', '.gif');
$extensionsType = array('image/png', 'image/jpeg', 'image/gif');
$maxSize = 1024 * 1024;
$repertory = 'img/';
$scanImg = scandir('img');

// On vérifie qu'un fichier a bien été envoyé via le formulaire 'fileToUpload' et qu'il n'y a pas eu d'erreur pendant l'envoi
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == 0) {
    // On récupère l'extension du fichier
    $extensionFile = strrchr($_FILES['fileToUpload']['name'], '.');
    // On récupère le type du fichier temporaire pour le comparer plus bas avec le tableau 'extensionsType'
    $fileType = mime_content_type($_FILES['fileToUpload']['tmp_name']);
    // On vérifie que l'extension de notre fichier match avec celles autorisées dans le tableau 'extensions'
    // Après &&, on vérifie le type match avec le tableau 'extensionsType'
    if (in_array($extensionFile, $extensions) && in_array($fileType, $extensionsType)) {
        // On récupère le poids du fichier
        $fileSize = $_FILES['fileToUpload']['size'];
        // On compare le poids du fichier avec le max autorisé dans la variable 'maxSize'
        if ($fileSize <= $maxSize) {
            // On récupère l'extension pour l'upload
            // On renomme notre fichier avec un ID unique (un nom random) et on lui redonne son extension
            $fileName = uniqid() . $extensionFile;
            // On upload le fichier avec la fonction 'move_uploaded_file' qui comprend 2 paramètres : 
            // - Le nom du fichier temporaire
            // - La destination du fichier et le nom qui a été renommé précedemment
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $repertory . $fileName)) {
                $success = '<span class="textSuccess">Le fichier <span class="font-weight-bold">' . $_FILES['fileToUpload']['name'] . '</span> a été upload !</span>';
                $scanImg = scandir('img');
            }
        } else {
            $error = '<span class="textError">Désolé, votre fichier doit faire moins de 1Mo. <br> Votre fichier n\'a pas été upload.</span>';
        }
    } else {
        $error = '<span class="textError">Votre fichier n\'est pas une image. <br> Votre fichier n\'a pas été upload.</span>';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="text-center">

    <div class="text-color align-items-center justify-content-center row vh-100 m-0">

        <div class="col-xl-3 col-lg-5 col-sm-7 block">

            <h1 class="m-2">Upload d'images</h1>

            <img class="mx-auto mb-2" id="imgPreview">
            <form enctype="multipart/form-data" action="index.php" method="post">
                <div>
                    <label class="h5" for="fileToUpload">Choisir un fichier :</label>
                </div>
                <div>
                    <input class="textUpload" type="file" id="fileToUpload" name="fileToUpload" accept=".png, .jpg, .gif">
                </div>
                <div class="m-3">
                    <input class="btn sendButton" type="submit" value="Envoyer">
                    <a href="gallery.php" class="btn sendButton">Galerie : <?= count($scanImg) - 2 . ' ' ?><i class="far fa-images"></i></a>
                    <!-- Solution alternative
                    On récupère la valeur de $scanImg sans le . et ..
                    count(array_values(array_diff($scanImg, array('.', '..')))); -->
                </div>

                <div>
                    <p><?php echo isset($error) ? $error : '' ?></p>
                    <p><?php echo isset($success) ? $success : '' ?></p>
                </div>

            </form>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="assets/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>