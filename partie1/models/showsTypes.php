<?php
//clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class ShowTypes extends DataBase
{
    public function getAllShowTypes()
    {
        //utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...

        // On stick la requête dans une variable
        $query = 'SELECT `id`, `type` FROM showtypes';

        // On utilise la méthode query pour exécuter notre requête
        $queryObj = $this->dataBase->query($query);

        // On utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); //par défaut retourner un tableau associatif

        return $result; //On retourne le tableau 

    }

}