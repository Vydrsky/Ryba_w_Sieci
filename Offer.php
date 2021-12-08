<?php

class Offer{
    private $id;
    private $name;
    private $type;
    private $production_year;
    private $state;
    private $price;
    private $image;
    private $authorId;
    private $description;

    public function __construct($id, $name, $type, $state, $production_year, $price, $image, $description, $authorId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->state = $state;       
        $this->production_year = $production_year;       
        $this->price = $price;
        $this->image = $image;
        $this->description = $description;
        $this->authorId = $authorId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthorId()
    {
        return $this->authorId;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->type;
    }
    public function getState()
    {
        return $this->state;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getProductionYear()
    {
        return $this->production_year;
    }
    public function getDescription()
    {
        return $this->description;
    }

}