<?php

class Offer{
    private $id;
    private $name;
    private $type;
    private $state;
    private $age;
    private $price;
    private $image;
    private $authorId;

    public function __construct($id, $authorId, $image, $name, $type, $state, $age, $price)
    {
        $this->id = $id;
        $this->authorId = $authorId;
        $this->image = $image;
        $this->name = $name;
        $this->type = $type;
        $this->state = $state;
        $this->age = $age;
        $this->price = $price;
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
    public function getAge()
    {
        return $this->age;
    }
    public function getPrice()
    {
        return $this->price;
    }
}