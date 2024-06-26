<?php
class Movie
{
    private $title;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

const indianaJones = new Movie();

indianaJones->setTitle("test2");
var_dump(indianaJones->getTitle());
