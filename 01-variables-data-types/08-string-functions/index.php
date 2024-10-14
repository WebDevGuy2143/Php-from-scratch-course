<?php
$output = null;

$string = "Hello World";

// strlen()
$output = strlen($string); // displays the length of the string

// str_word_count()
$output = str_word_count($string); // displays the word count of a variable string

// strpos()

$output = strpos($string, 'World'); // takes the index of the string and displays the index from the start of the quoted string

// Get specific character by index
$output = $string[4]; // will display the character o because o is the 4th index of the word "Hello"

// substr()
$output = substr($string, 6, 5); // starts at an index from the string, in this case, 6th index: W. counts x number of places, in this case, 5. Displays "World" from the string "Hello World"

// str_replace()
$output = str_replace('World', 'Universe', $string); // takes in a word, replaces word, passes in the original string variable. So displays "Hello Universe" instead of "Hello World"

// strtolower()
$output = strtolower($string); // converts string to lowercase

// strtoupper
$output = strtoupper($string); // converts string to uppercase

// ucwords()

$output = ucwords($string); // capitalizes first letter of each word in a string. ex. "Hello World"

// trim()
$output = trim('     Hello World     '); // displays "Hello World without all the spaces, shown in between quotes
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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>