<?php

class Competitions
{
    protected $title;
    protected $date;
    protected $fishery;
    protected $startTime;
    protected $type;
    protected $idAuthor;

    public function __construct($title, $date, $fishery, $startTime, $type, $idAuthor)
    {
        $this->title = $title;
        $this->date = $date;
        $this->fishery = $fishery;
        $this->startTime = $startTime;
        $this->type = $type;
        $this->idAuthor = $idAuthor;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getFishery()
    {
        return $this->fishery;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getIdAuthor()
    {
        return $this->idAuthor;
    }
}