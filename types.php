<?php

$boolean = True;
var_dump ($boolean);
echo "<br>";

$integer = 135;
var_dump ($integer);
echo "<br>";

$float = 1.56;
var_dump ($float);
echo "<br>";

$string = "Hola Mundo!";
var_dump ($string);
echo "<br>";

$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
echo "<br>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
  echo "<br>";

$null = NULL;
var_dump($null);
echo "<br>";

?>