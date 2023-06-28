<?php

/**
 * Model servant à gérer les marques
 */
class Category
{
    /** @var int Identifiant unique de ma marque */
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
}