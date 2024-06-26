<?php

use function PHPSTORM_META\type;

class Movie
{
    private string $title;
    private string $image = "default image";
    private string $description;
    private int $vote;
    private array $genres = ["templi", "spedizioni"];

    public function __construct($title, $description, $vote, ...$genres)
    {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setVote($vote);
        $this->setGenres(...$genres);
    }

    # TITLE GETTER AND SETTER    
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    # IMAGE GETTER AND SETTER    
    public function setImage($image)
    {
        if (isset($image) && @getimagesize($image)) {
            $this->image = $image;
        } else {
            throw new Exception(" Immagine non trovata / URL non valido ");
        }
    }

    public function getImage()
    {
        return $this->image;
    }

    # GENRES GETTER AND SETTER    
    public function setGenres(...$genres)
    {
        $this->genres = [...$this->genres, ...$genres];
    }

    public function getGenres()
    {
        return $this->genres;
    }

    # VOTE GETTER AND SETTER    
    public function setVote($vote)
    {
        $this->vote = $vote;
    }

    public function getVote()
    {
        return $this->vote;
    }

    # DESCRIPTION GETTER AND SETTER    
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
