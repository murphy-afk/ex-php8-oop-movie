<?php
require_once './models/Movie.php';
require_once './models/Genre.php';
require_once './db.php';
$scream->setRating(4);
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
    <ul class="list-group my-4">
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
        <span class="badge bg-warning"><?php echo $movie->rating; ?></span>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

</body>

</html>