<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 30;
$num2 = 20;

// Basic Mathematics 

// Addition
$output = "$num1 + $num2 = " . $num1 + $num2;

// Subtraction
$output = "$num1 - $num2 = " . $num1 - $num2;

// Multipication
$output = "$num1 * $num2 = " . $num1 * $num2;

// Division
$output = "$num1 / $num2 = " . $num1 / $num2;

// Modulo / Remainder of ...
$output = "$num1 % $num2 = " . $num1 % $num2;

// Assignment operators
$num3 = 20;
$num3 += 30; // long version -> $num3 = $num3 + 30
$num3 -= 30; // long version -> $num3 = $num3 - 30
$num3 /= 30; // long version -> $num3 = $num3 / 30


// built in PHP functions
// rand() - randomly generates a whole number from 0 to 2147483647

// $output = $num3;
$output = rand(); // stores a random number into $output variable that generates a whole number from 0 to 2147483647
$output = rand(1, 10); // stores a random number into $output variable that generates a whole number from 1 to 10, exclusively

$output = round(4.7); // rounds the whole number up or down depending on the number after the decimal, whether it's greater or lower than 5

// ceil()
$output = ceil(4.2); // will round up one digit

// floor()
$output = floor(4.9); // will round down to the whole number

/// sqrt()
$output = sqrt(64); // will output the square root of a number. in this case, 8.

// pi()
$output = pi(); // 3.1415926535898

// abs()
$output = abs(-4.9); // will result in a positive 4.9

// max()
$output = max(1, 3, 5, 60); // will result in the max value in the list, in which case for this is 60

$output = max([1, 3, 5, 60]); // will result in the max value in the "array []", in which case for this is still 60

// min()
$output = min(1, 3, 5, 60); // will result in the minimum value in the list, in which case for this is 1

$output = min([1, 3, 5, 60]); // will result in the minimum value in the "array []", in which case for this is 1

// number formating
$output = number_format(1234567.891234, 2, '.', ',') // will output the formatted number ex.give the number, add the number decimal places 'int', then add the thousands seperator

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->

      <p class="text-xl">
        <?= "The equation is: " . $output; ?>
      </p>
    </div>
  </div>
</body>

</html>