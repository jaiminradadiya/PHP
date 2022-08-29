<?php
interface laptop {
  public function type();
}

class newlaptop implements laptop {
  public function type() {
    echo "Lenova";
  }
}

$lp = new newlaptop();
$lp->type();
?>