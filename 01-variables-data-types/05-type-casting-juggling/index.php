<?php

/* $number1 = 6;
$number2 = 11;
$number3 = "21";

$fruit = "watermellon";

$bool1 = true;
$bool2 = false;

$null = null;
 */

// Implicit Conversion -- programming language (PHP) is doing the converting
// $result = $number1 + $number2; // both variables are ints

// $result = $number1 + $number3; // will result in a int(string to int conversion)

// $result = $number3 + $number3; // will also result in a int(string to int conversion)

// $result = $number1 . $number2; // string(int to string) will combine the two numbers as if it was a string due to the concatination symbol

// $result = $fruit + $number2; // will result in an error because there's no way to convert a string to a number

// $result = $number1 + $bool1; // will result in an int(bool to int conversion) with an int displaying the value of variable number1 + bool1 (converts to a 1 "6 + 1 = 7") int(7) (think of 0's and 1's with electrical switches)

// $result = $number1 + $bool2; // will result in an int(bool to int conversion) with an int displaying the value of variable number1 + bool2 (converts to a 1 "6 + 0 = 6") int(7) (think of 0's and 1's with electrical switches)

// $result = $number1 + $null; // will result in a int(null to int) 6 because null has a value of zero, therefor 6 + 0 = 6


// Explicit Conversion
// $result = (string) $number1; // will display as string() "5" converted the number to a string

// $result = (int) $number3; // will display as int(21) converted the string to a number

// $result = (bool) $number1; // will display as bool(true) converted the number to a bool because number1 is greater than 0, otherwise the result will be bool(false)
