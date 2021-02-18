<?php
// clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class Patient extends DataBase
{
    public function getListPatient()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $query = 'SELECT `lastname`, `firstname` FROM `patients`';

        // on utilise la méthode query pour executer notre requête
        $queryObj = $this->dataBase->query($query);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $result; // on retourne le tableau
    }

    public function addPatient(array $patientDetails) {
           // Je mets en place des marqueurs nominatifs pour preparer ma requête avec des valeurs recuperées via form
           $query = 'INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`)
           VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';
   
           // Nous preparons notre requete à l'aide de la methode prepare
           $addPatientQuery = $this->dataBase->prepare($query);
   
           // je bind mes valeurs à l'aide de la methode bindvalue()
           $addPatientQuery->bindValue(':lastname', $patientDetails['lastname'], PDO::PARAM_STR);
           $addPatientQuery->bindValue(':firstname', $patientDetails['firstname'], PDO::PARAM_STR);
           $addPatientQuery->bindValue(':birthdate', $patientDetails['birthdate'], PDO::PARAM_STR);
           $addPatientQuery->bindValue(':phone', $patientDetails['phone'], PDO::PARAM_STR);
           $addPatientQuery->bindValue(':mail', $patientDetails['mail'], PDO::PARAM_STR);
   
           // test et execution de la requête pour afficher message erreur
           if ($addPatientQuery->execute()) {
               return true;
           } else {
               return false;
           }
    }
}


