<?php

// Static Properties - Properties that are shared between all instances of a class
class MathUtility {
  // public $pi = 3.14;

  // Static property
  public static $pi = 3.14;

  // Static method - method that is shared between all instances of a class
  // creating a static method using the "static" keyword for an add method and also using the "..." spread operator
  // returns the sum of all the numbers passed in
  public static function add(...$numbers) {
    return array_sum($numbers);
  }
}

// Creating an instance of the MathUtility class
// $mathUtility = new MathUtility();

// Accessing the static property
// echo $mathUtility->pi;

// Accessing the static property directly using scope resolution, which is a way to access static properties without creating an instance of the class
// basically meaning, you can access the static property without creating an instance of the class
echo MathUtility::$pi;

echo '<br><br>';
// Accessing the static method using scope resolution, and passing in arguments
echo MathUtility::add(1, 2, 3, 4, 5);