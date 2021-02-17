<?php
// clients est un enfant de la classe Database, et hérite donc de ses attributs + méthodes.
class Clients extends DataBase
{

    public function getAllClients()
    {
        // utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...
        // On stock la requête dans une variable 
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients`';

        // on utilise la méthode query pour executer notre requête
        $queryObj = $this->dataBase->query($query);

        // on utilise la methode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); // par défaut, va retourner un tableau associatif

        return $result; // on retourne le tableau
    }
}

class Show extends DataBase
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

class TwentyClients extends DataBase
{
    /**
     * Fonction permettant d'obtenir tous les clients de la table client
     * Nous obtenons les champs id, lastname et firstname
     */
    public function getTwentyClients()
    {
        //utilisation de magic quote pour indiquer qu'il s'agit de champs et de table ...

        // On stick la requête dans une variable
        $query = 'SELECT `id`, `lastname`, `firstname` FROM `clients` LIMIT 0, 20';

        // On utilise la méthode query pour exécuter notre requête
        $queryObj = $this->dataBase->query($query);

        // On utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); //par défaut retourner un tableau associatif

        return $result; //On retourne le tableau 

    }
}

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
        $query = 'SELECT clients.id, lastname, firstname, `clients`.`cardNumber`, cardtypes.type 
        FROM clients 
        INNER JOIN cards
        ON clients.cardnumber = cards.cardnumber
        INNER JOIN cardtypes 
        ON cardtypes.id = cards.cardTypesId
        where cardTypesId = 1;';

        // On utilise la méthode query pour exécuter notre requête
        $queryObj = $this->dataBase->query($query);

        // On utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); //par défaut retourner un tableau associatif

        return $result; //On retourne le tableau 
    }
}

class ClientM extends DataBase
{
    public function getClientM()
    {
        $query = "SELECT firstname, lastname
        FROM clients
        WHERE clients.lastName LIKE 'm%'";

        // On utilise la méthode query pour exécuter notre requête
        $queryObj = $this->dataBase->query($query);

        // On utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); //par défaut retourner un tableau associatif

        return $result; //On retourne le tableau 
    }
}

class Performer extends DataBase
{
    public function getPerformer()
    {
        $query = "SELECT `title`, `performer`, `date`, `startTime`
        FROM shows
        ORDER BY `title`";

        // On utilise la méthode query pour exécuter notre requête
        $queryObj = $this->dataBase->query($query);

        // On utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); //par défaut retourner un tableau associatif

        return $result; //On retourne le tableau 
    }
}

class infoClient extends DataBase{
    public function getInfoClient() {
        $query = "SELECT lastname, firstname, birthdate, card, cardnumber
        FROM clients";

        // On utilise la méthode query pour exécuter notre requête
        $queryObj = $this->dataBase->query($query);

        // On utilise la méthode fetchAll pour obtenir un tableau de notre requête
        $result = $queryObj->fetchAll(); //par défaut retourner un tableau associatif

        return $result; //On retourne le tableau 
    }
}