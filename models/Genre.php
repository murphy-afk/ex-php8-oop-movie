<?php 
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

?>