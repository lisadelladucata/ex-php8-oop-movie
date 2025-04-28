<?php

require_once './classes/Genre.php';
require_once './classes/Movie.php';

$action = new Genre("Azione", "Film con azione e avventura");
$comedy = new Genre("Commedia", "Film divertenti");
$thriller = new Genre("Thriller", "Film con suspense");

$movie1 = new Movie("Die Hard", "John McTiernan", 1988, [$action, $thriller]);
$movie1->setRating(9.5);

$movie2 = new Movie("Una notte da leoni", "Todd Phillips", 2009, [$comedy]);
$movie2->setRating(9);

echo $movie1->getDescription();
echo $movie2->getDescription();
