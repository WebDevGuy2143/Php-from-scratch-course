<?php

abstract class Shape{
  protected $name;

  // Abstract Method 
  abstract public function calculateArea();

  public function __construct($name){
    $this->name = $name;
  }

  // concrete method
  public function getName(){
    return $this->name;
  }
}

class Circle extends Shape{
  private $radius;

  public function __construct($name, $radius){
    parent::__construct($name);
    $this->radius = $radius;
  }

  public function calculateArea(){
    return pi() * pow($this->radius, 2);
  }
}

class Rectangle extends Shape{
  private $width;
  private $height;

  public function __construct($name, $width, $height){
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea(){
    return $this->width * $this->height;
  }
}

$circle = new Circle("Circle ", 2);
$rectangle = new Rectangle("Rectangle ", 2, 4);

echo $circle->getName() . "Area: " . $circle->calculateArea() . "<br>";
echo $rectangle->getName() . "Area: " . $rectangle->calculateArea() . "<br>";
// echo $circle->getName();
// echo "<br>";
// echo $circle->calculateArea();