<?php

trait Rating {
    public $rating;

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getRatingDescription() {
        return "Valutazione: {$this->rating}/10";
    }
}
