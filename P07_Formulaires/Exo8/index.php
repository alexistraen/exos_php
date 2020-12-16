<!doctype html>
<html lang="fr">

<head>
    <title>Exo 8 - Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <div class="m-5">

        <p>## Exercice 8
            Sur le formulaire de l'exercice 6, en plus de ce qui
            est demandé sur les exercices précédent, vérifier que
            le fichier transmis est bien un fichier **pdf**.</p>

        <?php

        $fileinfo = pathinfo($_FILES['filepdf']['name']);
        $extension_pdf = $fileinfo['extension'];

        if ($extension_pdf != 'pdf') {
            echo "CE N'EST PAS UN PDF <br>";
        } else {
            echo "C'est bien un pdf gg <br>";
        }

        if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender'])) {
            echo 'Nom : ' . $_POST['lastname'] . ' <br> Prénom : ' . $_POST['firstname'] . ' <br> Genre : ' . $_POST['gender'] . ' <br> Fichier : ' . $_FILES['filepdf']['name'];
        } else {

        ?>

            <div>
                <form enctype="multipart/form-data" action="index.php" method="post">
                    <div>
                        <label for="lastname">Nom :</label>
                        <input type="text" id="lastname" name="lastname">
                    </div>
                    <div>
                        <label for="firstname">Prénom :</label>
                        <input type="text" id="firstname" name="firstname">
                    </div>
                    <div>
                        <select name="gender" id="gender">
                            <option value="mr">Mr.</option>
                            <option value="mme">Mme.</option>
                        </select>
                    </div>
                    <div>
                        <label for="filepdf">Choisir un fichier :</label>

                        <input type="file" id="filepdf" name="filepdf" accept=".pdf">
                    </div>
                    <input type="submit" value="Envoyer">
                </form>
            </div>

        <?php

        }

        ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>