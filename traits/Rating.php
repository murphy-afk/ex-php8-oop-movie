<?php 
trait Rating {
  public $rating = 0;

  public function setRating($newRating) {
    $this->rating = $newRating;
  }
}
?>