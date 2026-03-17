<?php
class Movie
{
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

class Genre
{
  public $name;
  public $description;
  public $mood;

  function __construct($_name, $_description, $_mood)
  {
    $this->name = $_name;
    $this->description = $_description;
    $this->mood = $_mood;
  }
}

$horror = new Genre('Horror', 'Stories designed to scare, shock, or unsettle the audience.', 'tense');
$scienceFiction = new Genre('Science Fiction', 'Narratives exploring futuristic technology, space, or alternate realities.', 'thought-provoking');
$drama = new Genre('Drama', 'Character-driven stories focused on emotional themes and personal conflict.', 'serious');

$scream = new Movie('Scream', 'A masked killer terrorizes a group of teens in a small town.', 1996, 110, [$horror]);
$theMatrix = new Movie('The Matrix', 'A hacker discovers the truth about reality.', 1999, 136, [$scienceFiction, $drama]);
$interstellar = new Movie('Interstellar', 'A team travels through a wormhole to save humanity.', 2014, 169, [$scienceFiction, $drama]);
$theGodfather = new Movie('The Godfather', 'The aging patriarch of a crime family transfers control to his son.', 1972, 175, [$drama]);
$toyStory = new Movie('Toy Story', 'A cowboy doll feels threatened by a new space ranger toy.', 1995, 81, [$drama]);
$parasite = new Movie('Parasite', 'A poor family schemes to infiltrate a wealthy household.', 2019, 132, [$drama]);


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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Movies</title>
</head>

<body>
  <div class="container">

    <h1>Movies</h1>
    <ul class="list-group">
      <?php foreach ($movies as $movie): ?>
      <li class="list-group-item">
        <strong><?php echo $movie->title; ?></strong><br>
        <small class="text-muted">
          <?php echo implode(', ', array_map(function ($genre) {
            return $genre->name; }, $movie->genres)); ?>
        </small>
        <p class="mb-1"><?php echo $movie->description; ?></p>
        <span class="badge bg-secondary"><?php echo $movie->releaseYear; ?></span>
        <span class="badge <?php echo $movie->isLongMovie() ? 'bg-danger' : 'bg-success'; ?>">
          <?php echo $movie->isLongMovie() ? 'over two hours long' : 'under two hours long'; ?>
        </span>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

</body>

</html>