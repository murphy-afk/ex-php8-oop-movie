<?php 
  class Movie {
    public $title;
    public $description;
    public $releaseYear;
    public $duration;

    function __construct($_title, $_description, $_releaseYear, $_duration) {
      $this->title = $_title;
      $this->description = $_description;
      $this->releaseYear = $_releaseYear;
      $this->duration = $_duration;
    }

    public function isLongMovie() {
      return $this->duration > 120;
    }


  }

  $scream = new Movie('Scream','movie desc',1996, 110);
  
  var_dump($scream);
  if ($scream->isLongMovie()) {
    echo 'this movie is over two hours long';
  }
  else echo 'this movie is under two hours long';

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