<?php
require_once 'controllers/IndexController.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Partie 1 - PDO</title>
</head>

<body>

    <div class="container">
        <h1 class="h1 py-4 font-weight-bold text-center">Colyseum</h1>
        <a href="index.php"> -> Accueil</a>
        <h2 class="h2 py-2">Les clients</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($MclientArray as $client) { ?>
                    <tr>
                        <td><?= $client['id'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                        <td><?= $client['lastname'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>