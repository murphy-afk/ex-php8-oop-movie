<?php 

trait Rating {
  public $rating = 0;

  public function setRating($newRating) {
    $this->rating = $newRating;
  }
}
class Movie
{
  use Rating;
  public $title;
  public $description;
  public $releaseYear;
  public $duration;
  public $genres = [];

  function __construct($_title, $_description, $_releaseYear, $_duration, array $_genres)
  {
    $this->title = $_title;
    $this->description = $_description;
    $this->releaseYear = $_releaseYear;
    $this->duration = $_duration;
    $this->genres = $_genres;
  }

  public function isLongMovie()
  {
    return $this->duration > 120;
  }

}
?>