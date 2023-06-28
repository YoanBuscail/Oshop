<?php

/**
 * Model servant à gérer les marques
 */
class Brand
{
    /** @var int Identifiant unique de ma marque */
    private $id;

    /** @var string */
    private $name;

    /** @var string Date de création au format Y-m-d H:i:s */
    private $created_at;

    /** @var string Date de modification au format Y-m-d H:i:s */
    private $updated_at;

    /**
     * Retourne l'id de la marque
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Permet de remplir l'id de la marque
     *
     * @param int $id
     *
     * @return self
     */
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

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}