<?php

class News
{
    protected $title;
    protected $publicationDate;
    protected $description;
    protected $image;
    protected $idAuthor;

    public function __construct($title, $publicationDate, $description, $image, $idAuthor)
    {
        $this->title = $title;
        $this->publicationDate = $publicationDate;
        $this->description = $description;
        $this->image = $image;
        $this->idAuthor = $idAuthor;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getIdAuthor()
    {
        return $this->idAuthor;
    }
}