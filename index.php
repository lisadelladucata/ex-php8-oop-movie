<?php

class Genre {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }
}

class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;

    public function __construct($title, $director, $year, Genre $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getDescription() {
        return "Titolo: {$this->title}<br>Regista: {$this->director}<br>Anno: {$this->year}<br>Genere: {$this->genre->name}<br><br>";
    }
}

$genre1 = new Genre("Azione", "Film con molte scene dinamiche e combattimenti");
$genre2 = new Genre("Commedia", "Film divertenti e leggeri");

$movie1 = new Movie("Die Hard", "John McTiernan", 1988, $genre1);
$movie2 = new Movie("Una notte da leoni", "Todd Phillips", 2009, $genre2);

echo $movie1->getDescription();
echo $movie2->getDescription();

?>
