<?php

$names = array('John', 'James', 'Jimmy'); // method 1 for creating arrays

$numbers = [1, 2, 3, 4, 5, 6]; // method 2 for creating arrays

function inspect($value) // uses a function to pass in the variable array and displays the contents of the array in the function
{
    echo '<pre>'; // html pre formating tags
    var_dump($value); // displays the array for the names variable
    echo '</pre>'; // html pre formatting tags
}

inspect($names); // calls the function, passing in a varable array. In this case, the varable arrary - $names

inspect($numbers); // calls the function, passing in a varable array. In this case, the varable arrary - $numbers

print_r($names); // prints the contents of the value in linear format, showing the index and value.

echo $names[1]; // displays the contents in that index, in this case - James, because indexes are 0 based

echo $numbers[4]; // displays the contents in that index, in this case - 5, because indexes are 0 based

// add an element to an array
$numbers[6] = 90; // adds the number 90 to the array of numbers in the sixth index

$numbers[] = 95; // adds the number 95 to the end of the array of numbers, while keeping the sixth position with a value of 90

$numbers[3] = 100; // replaces the number in the 3 position with the value of 100, while keeping the rest of the array the same

unset($numbers[3]); // removes the number in the 3 position and removing the index placeholder, while keeping the rest of the array the same

$numbers = array_values($numbers); // restores the indexes 

inspect($numbers); // displays the array of numbers, but adds the number assigned to that index. In this case, 90 to the index of 6
