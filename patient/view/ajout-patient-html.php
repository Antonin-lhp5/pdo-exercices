<?php 

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
  <a href="../index.php" class="btn btn-info">Accueil</a>

  <form class="pt-4" method="get" action="">
    <div class="form-group">
      <label for="lastname">Nom</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe">
    </div>
    <div class="form-group">
      <label for="firstname">Prénom</label>
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="John">
    </div>
    <div class="form-group">
      <label for="birthdate">Date de naissance</label>
      <input type="date" class="form-control" id="birthdate" name="birthdate">
    </div>
    <div class="form-group">
      <label for="phone">Téléphone</label>
      <input type="number" class="form-control" id="phone" name="phone" placeholder="02 XX XX XX XX">
    </div>
    <div class="form-group">
      <label for="mail">Adresse email</label>
      <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com">
    </div>
    <input type="submit" value="Envoyé" class="btn btn-success"></input>
  </form>

</div>

   
</body>
</html>