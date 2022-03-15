<?php

class Movie {
public $title;
public $year;
public $original_language;
public $genre;

function __construct($_title,$_year, $_original_language, $_genre) {
 $this->title = $_title;
 $this->year = $_year;
 $this->original_language = $_original_language;
 $this->genre = $_genre; 
 }

 public function yearsOut($year){
     if($year == 2022){
        $this->yearsOut = "quest'anno";
     }else{
         $this->yearsOut = 2022 - $year . " anni fa";
     }
     return $this->yearsOut;

 }


};




$movieCatalogue = [
$theBatman = new Movie("The Batman",2022,"Inglese","Action"),
$it= new Movie("It",1990,"Inglese","Horror"),
$interstellar = new Movie("It",1990,"Inglese","Horror")];



foreach($movieCatalogue as $movie){

    echo '<h1> Titolo del film: '. $movie->title . '</h1>';
    echo '<p> Uscito nel: ' . $movie->year . '</p>';
    echo '<p> Lingua originale: ' . $movie->original_language . '</p>';
    echo '<p> Genere: ' . $movie->genre . '</p>';
    
    echo'<p> Uscito '  . $movie->yearsOut($movie->year) . '</p>';
}
