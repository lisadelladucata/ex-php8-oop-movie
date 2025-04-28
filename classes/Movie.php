<?php

require_once './classes/Genre.php';

class Movie {
    public $title;
    public $director;
    public $year;
    public $genres;

    public function __construct($title, $director, $year, array $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }

    public function getDescription() {
        $genreNames = [];
        foreach ($this->genres as $genre) {
            $genreNames[] = $genre->name;
        }

        $genreList = implode(', ', $genreNames);

        return "Titolo: $this->title<br>Regista: $this->director<br>Anno: $this->year<br>Generi: $genreList<br><br>";
    }
}
