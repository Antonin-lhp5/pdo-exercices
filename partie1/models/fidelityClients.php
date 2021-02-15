<?php
//clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class FidelityClients extends DataBase
{
    /**
     * Fonction permettant d'obtenir tous les clients de la table client
     * Nous obtenons les champs id, lastname et firstname
     */
    public function getFidelityClients()
    {
        //utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...

        // On stick la requête dans une variable
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients` WHERE `card` = 1';

        // On utilise la méthode query pour exécuter notre requête
        $queryObj = $this->dataBase->query($query);

        // On utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); //par défaut retourner un tableau associatif

        return $result; //On retourne le tableau 

    }
}
