<?php 

require_once 'models/database.php';
require_once 'models/clients.php';
require_once 'models/showsTypes.php';
require_once 'models/twentyClients.php';
require_once 'models/fidelityClients.php';

$clientsObj = new Clients;
$allclientsArray = $clientsObj->getAllClients();

$clientsObj = new TwentyClients;
$twentyclientsArray = $clientsObj->getTwentyClients();

$showTypesObj = new ShowTypes; 
$allShowTypesArray = $showTypesObj->getAllShowTypes();

$fidelityObj = new FidelityClients; 
$fidelityArray = $fidelityObj->getFidelityClients();