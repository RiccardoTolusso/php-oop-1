<?php
class Movie
{
    private string $title;
    private string $image = "default image";
    private string $description;
    private int $vote;
    private array $genres = ["templi", "spedizioni"];

    public function __construct($title)
    {
        $this->setTitle($title);
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
        if (@getimagesize($image)) {
            $this->image = $image;
        } else {
            throw new Exception(" Immagine non trovata / URL non valido ");
        }
    }

    public function getImage()
    {
        return $this->image;
    }

    # TITLE GETTER AND SETTER    
    public function setGenres(...$genres)
    {
        $this->genres = [...$this->genres, ...$genres];
    }

    public function getGenres()
    {
        return $this->genres;
    }
}

const indianaJones = new Movie("test3");
try {
    indianaJones->setImage("https://m.media-amazon.com/images/I/81m503Lbg4L._AC_UF1000,1000_QL80_.jpg");
} catch (Exception $e) {
    echo "<div style='background-color:orange; color:white'>$e</div>";
}
indianaJones->setGenres("azione", "avventura", "archeologia");
var_dump(indianaJones);
