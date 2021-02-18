<?php 
require_once '../controllers/add-patient-controller.php';
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

     <!-- exemple de message  -->
     <p class="h6 text-info"><?= $messages['addPatient'] ?? '' ?></p>

  <h1 class="py-4">Mon Hôpital</h1>
  <a href="../index.php" class="btn btn-info">Accueil</a>
  <a href="patient-html.php" class="btn btn-info">Liste des patients</a>

  <form class="pt-4" method="POST" action="">
    <div class="form-group">
      <label for="lastname">Nom</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
      <span class="text-danger"><?= $errors['lastname'] ?? '' ?></span>
    </div>
    <div class="form-group">
      <label for="firstname">Prénom</label>
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="John">
      <span class="text-danger"><?= $errors['firstname'] ?? '' ?></span>
    </div>
    <div class="form-group">
      <label for="date">Date de naissance</label>
      <input type="date" class="form-control" id="date" name="date">
      <span class="text-danger"><?= $errors['date'] ?? '' ?></span>
    </div>
    <div class="form-group">
      <label for="phone">Téléphone</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="02 XX XX XX XX">
      <span class="text-danger"><?= $errors['phone'] ?? '' ?></span>
    </div>
    <div class="form-group">
      <label for="mail">Adresse email</label>
      <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com">
      <span class="text-danger"><?= $errors['mail'] ?? '' ?></span>
    </div>
    <input type="submit" name="submit" value="+ Ajouter" class="btn btn-success"></input>
  </form>

</div>

   
</body>
</html>