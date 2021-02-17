<?php 
require_once '../models/database.php';
require_once '../models/patient.php';

// J'instancie un nouvel objet 
$patientObj = new Patient;

// Utilisation de la methode get me permettant de recuperer tous les patients sous forme de tableau
$allPatientArray = $patientObj->getListPatient();