<?php

// creates a n arrow function that adds two numbers
$add = fn($a, $b) => $a + $b; // no brackets like in javascript arrow functions

echo $add(12, 24); // 36

echo '<br />';

// store the numbers 1-10 in an array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// use a callback function to square each number
$squaredNumbers = array_map(fn($number) => $number * $number, $numbers);

// display the squared numbers in an array
print_r($squaredNumbers);
