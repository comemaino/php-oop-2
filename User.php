<?php 

class User {
  public $name;
  public $lastname;
  public $email;
  public $cart = [];

function __construct($_name, $_lastname, $_email) {

  $this->name = $_name;
  $this->lastname = $_lastname;
  $this->email = $_email;
}

public function getTotal() {
  $total_price = 0;
        foreach($this->cart as $item) {
          $total_price += $item->price;}
         if ($this->email) {
          $total_price = $total_price * .8;
         } return $total_price;
}
}


?>