<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
  public $organic;
  public $vegan;

  function __construct($_name, $_inventory_code, $_target_animal, $_price, $_organic, $_vegan ) {
    parent::__construct($_name, $_inventory_code, $_target_animal, $_price );
    $this->organic = $_organic;
    $this->vegan = $_vegan;
}
public function printInfo() {
  return "$this->name $this->target_animal $this->organic $this->vegan € $this->price";
}
}

$tuna_can = new Food("Tuna Can", "F459H67", "cat", "2.50", false, false);
$rice_and_veg = new Food("Rice and Vegetables", "F65H456", "dog", "4.50", true, true);

$foods = [];
$foods[] = $tuna_can;
$foods[] = $rice_and_veg;
?>