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
}
