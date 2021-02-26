<?php
require_once 'controllers/controller-index.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôpital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../assets/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="text-center">
        <img src="assets/banner.jpg" style="height:200px; width:100%; 	background-position: center; object-fit: cover;" alt="illustration d'un hôpital">
    </div>
    <div class="row justify-content-center text-center my-5">
        <p class="h1 text-danger text-center">Hopital de la Croix</p>
    </div>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Patients</h5>
                        <a class="btn btn-outline-primary fw-bold  w-75 m-2" href="views/view-addPatients.php"><i class="fas fa-user-plus p-2"></i>AJOUTER UN PATIENT</a>
                        <a class="btn btn-outline-info fw-bold  w-75 m-2" href="views/view-listPatients.php"><i class="far fa-address-book p-2"></i>LISTE DES PATIENTS</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Agenda des rendez-vous</h5>
                        <a class="btn btn-outline-dark fw-bold shadow w-75 m-2" href="views/view-addAppointments.php"><i class="far fa-calendar-check p-2"></i>AJOUTER RDV</a>
                        <a class="btn btn-outline-secondary fw-bold shadow w-75 m-2"><i class="fas fa-book-medical p-2"></i>AFFICHER RDV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>