<?php
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