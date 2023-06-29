<?php

/**
 * Model servant à gérer les catégories
 */
class Category
{
    /** @var int Identifiant unique de ma catégorie */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $subtitle;

    /** @var string */
    private $picture;

    /** @var int */
    private $home_order	;

    /** @var string Date de création au format Y-m-d H:i:s */
    private $created_at;

    /** @var string Date de modification au format Y-m-d H:i:s */
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

    public function getSubtitle()
    {
        return $this->subtitle;
    }

    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    public function getHome_order()
    {
        return $this->home_order;
    }

    public function setHome_order($home_order)
    {
        $this->home_order = $home_order;

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
     * Retourne la liste de toutes les catégories de la BDD
     *
     * @return Category[]
     */
    public function findAll()
    {
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query("SELECT `id`, `name`, `subtitle`, `picture`, `home_order` FROM `category`");
        if ($pdoStatement === false) {
            exit("Problème lors de la récupération de la liste des catégories");
        }

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Category');     
    }

    /**
     * Retourne une catégorie spécifique via son id dans la BDD
     *
     * @param int $id
     *
     * @return Category
     */
    public function find($id)
    {
    $pdo = Database::getPDO();

    $pdoStatement = $pdo->query("SELECT `id`, `name`, `subtitle`, `picture`, `home_order` FROM `category` WHERE id = $id");
    if ($pdoStatement === false) {
        exit("Problème lors de la récupération de la catégorie n°$id");
    }
    
    return $pdoStatement->fetchObject('Category');
    }
}
