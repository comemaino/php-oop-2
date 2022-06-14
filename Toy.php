<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
  public $target_age;
  public $material;

  function __construct($_name, $_inventory_code, $_target_animal, $_price, $_target_age, $_material ) {
    parent::__construct($_name, $_inventory_code, $_target_animal, $_price );
    $this->target_age = $_target_age;
    $this->material = $_material;
}
public function printInfo() {
  return "$this->name $this->target_animal Age:$this->target_age y Material: $this->material € $this->price";
}
}

$rubber_bone = new Toy("Rubber Bone", "T458H32", "dog", "3.90", "1+", "Rubber");
$catnip_ball = new Toy("Catnip Ball", "T458H68", "cat", "4.90", "1+", "Fabric");

$toys = [];
$toys[] = $rubber_bone;
$toys[] = $catnip_ball;



?>