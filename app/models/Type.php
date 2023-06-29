<?php

/**
 * Model servant à gérer les types
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
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query("SELECT `id`, `name` FROM `type`");
        if ($pdoStatement === false) {
            exit("Problème lors de la récupération de la liste des types");
        }
        
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');
    }

    /**
     * Retourne un type spécifique via son id dans la BDD
     *
     * @param int $id
     *
     * @return Type
     */
    public function find($id)
    {
    $pdo = Database::getPDO();

    $pdoStatement = $pdo->query("SELECT `id`, `name` FROM `type` WHERE id = $id");
    if ($pdoStatement === false) {
        exit("Problème lors de la récupération du type n°$id");
    }

    return $pdoStatement->fetchObject('Type');
    }
}