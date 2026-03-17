<?php
class Movie
{
  public $title;
  public $description;
  public $releaseYear;
  public $duration;

  function __construct($_title, $_description, $_releaseYear, $_duration)
  {
    $this->title = $_title;
    $this->description = $_description;
    $this->releaseYear = $_releaseYear;
    $this->duration = $_duration;
  }

  public function isLongMovie()
  {
    return $this->duration > 120;
  }

}

$scream = new Movie('Scream', 'A masked killer terrorizes a group of teens in a small town.', 1996, 110);
$theMatrix = new Movie('The Matrix', 'A hacker discovers the truth about reality.', 1999, 136);
$interstellar = new Movie('Interstellar', 'A team travels through a wormhole to save humanity.', 2014, 169);
$theGodfather = new Movie('The Godfather', 'The aging patriarch of a crime family transfers control to his son.', 1972, 175);
$toyStory = new Movie('Toy Story', 'A cowboy doll feels threatened by a new space ranger toy.', 1995, 81);
$parasite = new Movie('Parasite', 'A poor family schemes to infiltrate a wealthy household.', 2019, 132);

$movies = [
  $scream,
  $theMatrix,
  $interstellar,
  $theGodfather,
  $toyStory,
  $parasite
];


?>

<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>

<body>
  <h1>Movies</h1>
  <p>
    <?php
    foreach ($movies as $movie) {
  echo $movie->title . ' - ' . $movie->description .' - ' . $movie->releaseYear . ' - ' . ($movie->isLongMovie() ? 'over two hours long' : 'under two hours long') . "<br>";
}

    ?>
  </p>
</body>

</html>