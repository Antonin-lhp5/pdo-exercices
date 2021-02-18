<?php

require_once '../models/database.php';
require_once '../models/patient.php';

// Regex Perso
$regexName = '/^[a-zA-Zéèêçë\-]+$/';
$regexNumber = '/^0[0-9]{9}$/';
$regexDate = '/^([0-9]{4})-([0][1-9]|[1][0-2])-([0][1-9]|[1-2][0-9]|[3][0-1])$/';

// mise en place d'un tableau d'erreurs
$errors = [];

// mise en place d'un tableau de messages
$messages = [];



if (isset($_POST['submit'])) {

    // check input lastname
    if (isset($_POST['lastname'])) {

        if (!preg_match($regexName, $_POST['lastname'])) {
            $errors['lastname'] = 'Veuillez respecter le format ex. DOE';
        }

        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'Veuillez renseigner ce champ';
        }
    }

    // check input firstname
    if (isset($_POST['firstname'])) {

        if (!preg_match($regexName, $_POST['firstname'])) {
            $errors['firstname'] = 'Veuillez respecter le format ex. John';
        }

        if (empty($_POST['firstname'])) {
            $errors['firstname'] = 'Veuillez renseigner ce champ';
        }
    }

    // check input date 
    if (isset($_POST['date'])) {

        if (!preg_match($regexDate, $_POST['date'])) {
            $errors['date'] = 'Veuillez ne pas modifier l\'input';
        }

        if (empty($_POST['date'])) {
            $errors['date'] = 'Veuillez renseigner ce champ';
        }
    }

    // check input phone
    if (isset($_POST['phone'])) {

        if (!preg_match($regexNumber, $_POST['phone'])) {
            $errors['phone'] = 'Veuillez entrer uniquement des chiffres';
        }

        if (empty($_POST['phone'])) {
            $errors['phone'] = 'Veuillez renseigner ce champ';
        }
    }

    // check input mail
    if (isset($_POST['mail'])) {

        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Veuillez respecter le format ex. mail@mail.fr';
        }

        if (empty($_POST['mail'])) {
            $errors['mail'] = 'Veuillez renseigner ce champ';
        }
    }

    var_dump($errors);

    // Je verifie s'il n'y a pas d'erreurs afin de lancer ma requete
    if (empty($errors)) {
        $patientsObj = new Patient;

        // Création d'un tableau contenant toutes les infos du formulaire
        $patientDetails = [
            'lastname' => htmlspecialchars($_POST['lastname']),
            'firstname' => htmlspecialchars($_POST['firstname']),
            'birthdate' => htmlspecialchars($_POST['date']),
            'mail' => htmlspecialchars($_POST['mail']),
            'phone' => htmlspecialchars($_POST['phone']),
        ];

        if ($patientsObj->addPatient($patientDetails)) {
            $messages['addPatient'] = 'Patient enregistré';
        } else {
            $messages['addPatient'] = 'Erreur de connexion lors de l\'enregistrement';
        }
    }
}