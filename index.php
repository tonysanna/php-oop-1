<?php
    class Movie {
         public $name;
         public $director;
         public $year;
         public $genre;

         function _construct($_name, $_director, $_year, $_genre) 
         {
             $this->name = $_name;
             $this->director = $_director;
             $this->year = $_year;
             $this->genre = $_genre;
         }
         public function getDuration() {
             return $this->duration . 'min';
         }
    }

    $django = new Movie ('Django', 'Quentin Tarantino', 2013,'Epico');
    $venom = new Movie ('Venom', 'Ruben Fleischer', 2018, 'fantascienza');
?>