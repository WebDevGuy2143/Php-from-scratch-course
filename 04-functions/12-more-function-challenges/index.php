<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

// arrow function to convert fahrenheit to celsius
// $fahrenheitToCelsius = fn($f) => ($f - 32) * 5 / 9; // formula to convert fahrenheit to celsius

// variable to store the base temperature
$baseTemp = 32;

// function to convert fahrenheit to celsius using the base temperature variable as a parameter
$fahrenheitToCelsius = function ($f) use ($baseTemp) {
  return ($f - $baseTemp) * 5 / 9;
};

// store the temperature of fahrenheit in a variable
$degToConvert = 86;

// display the converted temperature in a sentence
echo $degToConvert . '&deg;F = ' . $fahrenheitToCelsius($degToConvert) . '&deg;C';

echo '<br><br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

// function to print names in uppercase
function printNamesToUpperCase(array $names)
{
  // loop through the array and display each name to the screen in uppercase
  foreach ($names as $name) {
    echo strtoupper($name) . '<br>';
  }
}

// array of names
$names = ['Jimmy', 'Adam', 'Alex', 'Oliver'];

// call the function to display names in uppercase
printNamesToUpperCase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord($sentence)
{
  $words = explode(' ', $sentence);
  $longestWord = '';
  foreach ($words as $word) {
    if (strlen($word) > strlen($longestWord) || $longestWord === '') {
      $longestWord = $word;
    }
  }
  return $longestWord;
}

echo findLongestWord('The quickest brown fox jumped over the lazy dog.') . '<br>'; // quickest
