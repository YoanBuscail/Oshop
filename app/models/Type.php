<?php

/**
 * Model servant à gérer les marques
 */
class Type
{
   
    private $id;
    private $name;
    private $created_at;
    private $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Retourne la liste de tous les types de la BDD
     *
     * @return Type[]
     */
    public function findAll()
    {
        // Connexion à la base de données en utilisant la classe Database
        // (dont on a pas besoin de connaître le contenu)
        $pdo = Database::getPDO();

        // Créer la bonne requete SQL
        $sql = "SELECT `id`, `name` FROM `type`";

        // On va devoir l'exécuter
        $pdoStatement = $pdo->query($sql);
        if ($pdoStatement === false) {
            exit("Problème lors de la récupération de la liste des types");
        }

        // On récupèrera le résultat sous forme d'objets
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');

        // On retournera le résultat
        return $results;
    }

    /**
     * Retourne un produit spécifique via son id dans la BDD
     *
     * @param int $id
     *
     * @return Type
     */
    public function find($id)
    {
    $pdo = Database::getPDO();

    $sql = "SELECT `id`, `name` FROM `type` WHERE id = $id";

    $pdoStatement = $pdo->query($sql);
    if ($pdoStatement === false) {
        exit("Problème lors de la récupération du type n°$id");
    }

    $result = $pdoStatement->fetchObject('Type');

    return $result;
    }
}