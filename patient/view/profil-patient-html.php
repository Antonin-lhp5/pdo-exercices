<?php
require_once ('../controllers/patient-controller.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>liste patient</title>
</head>

<body>
    <div class="container">
    <h1 class="py-4">Mon Hôpital</h1>
    <a href="../index.php" class="btn btn-info">Accueil</a>
    <a href="ajout-patient-html.php" class="btn btn-info">Retour</a>
    <hr>
    <h1>Profil de <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($allPatientArray as $title) { ?> 
                <?= $title['lastname'] ?> <?= $title['firstname'] ?> <?php } ?></h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Naissance</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($allPatientArray as $client) { ?>
                    <tr>
                        <td><?= $client['lastname'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                        <td><?= $client['birthdate'] ?></td>
                        <td><?= $client['phone'] ?></td>
                        <td><?= $client['mail'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>