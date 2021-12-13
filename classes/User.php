<?php

class User{
    private $id;
    private $login;
    private $email;
    private $name;
    private $surname;
    private $permission;
    private $points;
    private $rank;
    private $image;

    public function __construct($id, $login, $email, $name, $surname, $permission, $points, $rank,$image)
    {
        $this->id = $id;
        $this->login = $login;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->permission = $permission;
        $this->points = $points;
        $this->rank = $rank;
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }
    public function getPermission()
    {
        return $this->permission;
    }
    public function getPoints()
    {
        return $this->points;
    }
    public function getRank()
    {
        return $this->rank;
    }
    public function getImage()
    {
        return $this->image;
    }
}