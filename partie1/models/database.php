<?php

class DataBase
{

    public $dataBase;

    public function __construct()
    {   
        // Nos effectuions un try and catch pour obtenir un message d'erreur explicite en cas de non connexion
        try {
            $this->dataBase = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'pdo', 'pdo');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
