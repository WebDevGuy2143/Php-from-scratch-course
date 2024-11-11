<?php

// store the numbers in an array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


// use a callback function to square each number
$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);

// display the squared numbers
// print_r($squaredNumbers);

// use a callback function to double each number
function applyCallback($callback, $value)
{
    // return the value of the callback function
    return $callback($value);
}

// assign a callback function to a variable
$double = function ($number) {

    // double the number
    return $number * 2;
};

// store the applyCallback function in a variable, while passing in the $double variable and the number 5
$result = applyCallback($double, 5);

// display the result which in this case is 10
echo $result;
