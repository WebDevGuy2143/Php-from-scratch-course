<?php

/*
  PHP DATA TYPES:
*/

// - String
$name = 'Gene Howell';
$name2 = "John Doe;";

echo '<br />'; // html line break

// - Integer
$age = 36; // only whole number with no decimal

// - Float
$rating = 4.5; // only decimal numbers

// - Boolean
$isLoaded = true; // must be a value of true or false

// - Array
$friends = ['Jimmy', 'Joe', 'Jane']; // holds a list of items, starting from 0 as an index

// - Object
$person = new stdClass();

// - NULL
$car = NULL; // No value

// - Resource
$file = fopen('sample.txt', 'r'); // opens the textfile within the same directory using the fopen function
// var_dump($file) // shows the type as a resource