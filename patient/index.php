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
<div class="text-center">
            <img src="img/banner.jpg" style="height:200px; width:100%; 	background-position: center; object-fit: cover;" alt="illustration d'un hôpital">
        </div>
    <div class="container">
        
        <h1 class="py-4">Mon Hôpital</h1>
      
        <div class="row">
            <div class="card-group pb-5">
                <div class="card">
                    <img src="img/ajout.jpg" style="height:200px; object-fit: cover;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrement</h5>
                        <a href="view/add-patient-html.php" class="btn btn-info">Ajouter un patient</a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/doctor.jpg" style="height:200px; object-fit: cover;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Liste des patients</h5>
                        <a href="view/patient-html.php" class="btn btn-info">Afficher</a>
                    </div>
                </div>
                <div class="card">
                    <img src="img/rendez-vous.jpg" style="height:200px; object-fit: cover;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rendez-vous</h5>
                        <a href="view/profil-patient-html.php" class="btn btn-info">Afficher</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>