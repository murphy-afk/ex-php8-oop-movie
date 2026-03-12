<?php 
  class Movie {
    public $title;
    public $description;
    public $releaseYear;

    function __construct($_title, $_description, $_releaseYear) {
      $this->title = $_title;
      $this->description = $_description;
      $this->releaseYear = $_releaseYear;
    }
  }

  $scream = new Movie('Scream','movie desc',1996);
  
  var_dump($scream);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body>
  
</body>
</html>