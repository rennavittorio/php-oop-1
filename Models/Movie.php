<?php

class Movie
{
    public string $title;
    public string $description;
    public array $genres;

    function __construct($_title, $_description, $_genres)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->genres = $_genres;
    }

    public function getGenresText($arr)
    {
        return implode(', ', $arr);
    }
}
