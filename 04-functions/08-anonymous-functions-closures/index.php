<?php

// store an anonymous function in a variable that multiplies a number by itself
$square = function ($number) {
    return $number * $number;
};

// store the function in a variable
$result = $square(5); // will result in 25

// display the result by concatenating the variable with a string
echo 'the result of 5 is ' . $result . '</br>';


// closures
function createCounter()
{
    // initiate and store the counter in a variable
    $counter = 0;

    // return a closure by storing it in a variable and using the use keyword to reference the variable
    return function () use (&$counter) {
        return $counter++;
    };
    return $counter;
}

// store the closure in a variable
$counter = createCounter();

// call the closure multiple times to display the incremented value
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';
