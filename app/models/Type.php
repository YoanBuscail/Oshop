<?php

/**
 * Model servant à gérer les types
 */
class Type extends CoreModel
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

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