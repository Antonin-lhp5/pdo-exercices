<?php
require_once('controllers/index.controller.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Site patient</title>
</head>

<body>

    <div class="container">
        <h1 class="py-4">Mon Hôpital</h1>
        <a href="view/ajout-patient-html.php" class="btn btn-info">Ajouter un patient</a>
        <a href="view/patient-html.php" class="btn btn-info">Liste des patients</a>
    </div>



</body>

</html>