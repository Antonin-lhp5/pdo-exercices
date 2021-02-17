<?php

require_once 'models/database.php';
require_once 'models/clients.php';

// J'instancie un nouvel objet avec la classe Clients
$clientsObj = new Clients;

// Utilisation de la methode getAllClients me permettant de recuperer tous les clients sous forme de tableau
$allClientsArray = $clientsObj->getAllClients();

// J'instancie un nouvel objet avec la classe Show
$showTypesObj = new Show; 

// Utilisation de la methode getAllShowTypes me permettant de recuperer tous les clients sous forme de tableau
$allShowTypesArray = $showTypesObj->getAllShowTypes();

// J'instancie un nouvel objet avec la classe TwentyClients
$clientsObj = new TwentyClients;

// Utilisation de la methode getTwentyClients me permettant de recuperer tous les clients sous forme de tableau
$twentyclientsArray = $clientsObj->getTwentyClients();

// J'instancie un nouvel objet avec la classe FidelityClients
$fidelityObj = new FidelityClients; 

// Utilisation de la methode getFidelityClients me permettant de recuperer tous les clients sous forme de tableau
$fidelityArray = $fidelityObj->getFidelityClients();

$clientMObjet = new ClientM;
$clientMArray = $clientMObjet->getClientM();

$performerObjet = new Performer;
$performerArray = $performerObjet->getPerformer();

$infoClientObjet = new infoClient;
$InfoClientArray = $infoClientObjet->getInfoClient();