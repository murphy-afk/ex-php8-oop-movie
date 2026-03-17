<?php 

require_once __DIR__ . '/../traits/Rating.php';
class Movie
{
  use Rating;
  public $title;
  public $description;
  public $releaseYear;
  private $duration;
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