<?php

class Brand extends CoreModel
{
       /** @var string */
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
     * Retourne la liste de toutes les marques de la BDD
     *
     * @return Brand[]
     */
    public function findAll()
    {
        
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query("SELECT `id`, `name` FROM `brand`");
        if ($pdoStatement === false) {
            exit("Problème lors de la récupération de la liste des marques");
        }

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Brand');
    }

    /**
    * Retourne une marque spécifique via son id dans la BDD
    *
    * @param int $id
    *
    * @return Brand
    */
    public function find($id)
    {
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query("SELECT `id`, `name` FROM `brand` WHERE id = $id");
        if ($pdoStatement === false) {
            exit("Problème lors de la récupération de la marque n°$id");
        }

        return $pdoStatement->fetchObject('Brand');
    }
}