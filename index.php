<?php
class Movie
{
    private $title;

    public function __construct($title)
    {
        $this->setTitle($title);
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

const indianaJones = new Movie("test3");

var_dump(indianaJones->getTitle());
