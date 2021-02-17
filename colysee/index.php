<?php
require_once 'controllers/index-controller.php'
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Affichage des données</h1>

    <div class="container">
        <div class="h2">Partie 1 </div>
        <div class="h3">Exercice 1 </div>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // je fais un foreach pour parcourir mon tableau
                foreach ($allClientsArray as $client) { ?>
                    <tr>
                        <th><?= $client['id'] ?></th>
                        <td><?= $client['lastname'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="h2 py-2">Exercice 2 : Types de spectacle</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Type</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($allShowTypesArray as $type) { ?>
                    <tr>
                        <td><?= $type['id'] ?></td>
                        <td><?= $type['type'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


        <h2 class="h2 py-2">Exercice 3 : 20 clients</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($twentyclientsArray as $client) { ?>
                    <tr>
                        <td><?= $client['id'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                        <td><?= $client['lastname'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="h2 py-2">Exercice 4 : Fidélité</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">carte</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fidelityArray as $client) { ?>
                    <tr>
                        <td><?= $client['id'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                        <td><?= $client['lastname'] ?></td>
                        <td><?= $client['type'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="h2 py-2">Exercice 5 : Client M</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientMArray as $client) { ?>
                    <tr>
                        <td><?= $client['lastname'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="h2 py-2">Exercice 6 : Artiste & spectacles</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Artiste</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($performerArray as $client) { ?>
                    <tr>
                        <td><?= $client['title'] ?></td>
                        <td><?= $client['performer'] ?></td>
                        <td><?= $client['date'] ?></td>
                        <td><?= $client['startTime'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="h2 py-2">Exercice 7 : Info clients</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">carte</th>
                    <th scope="col">N°</th>
                </tr>
            </thead>
            <tbody>
               
                <?php foreach ($InfoClientArray as $client) { ?>

                    <tr>
                        <td><?= $client['lastname'] ?></td>
                        <td><?= $client['firstname'] ?></td>
                        <td><?= $client['birthdate'] ?></td>
                        <td><?= $client['card'] ?></td>
                        <td><?= $client['cardnumber'] ?></td>
                    </tr>
                <?php } ?>
                <?php if ($client['card'] === 0) {
                    $client['card'] = "non";
                } else {
                    $client['card'] = "oui";
                }; ?>
            </tbody>
        </table>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>