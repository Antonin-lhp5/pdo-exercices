<?php
require_once('../controllers/patient-controller.php');
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
        <a href="add-patient-html.php" class="btn btn-info">Ajouter un patient</a>
        <hr>
        <?php
        // Nous testons si nous arrivons à obtenir les détails du client sous forme d'un tableau
        if ($detailsPatientArray) {
            include 'include/details-patient.php';
            // si KO, nous indiquons à l'utilisateur que le patient n'est pas présent
        } else { ?>
            <p class="h5 text-danger text-center mb-3"></i>Patient non présent</p>
            <div class="text-center">
                <a type="button" href="view-listPatients.php" class="btn btn-sm btn-outline-secondary">Liste des patients</a>
            </div>
        <?php
        } ?>
    </div>
</body>

</html>