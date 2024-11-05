<?php

// declare is used to declare a type of variable, function, class, or interface that must be used in the following code
declare(strict_types=1);

// create a function that adds two integers and returns an integer. Must be whatever the type is defined in the function
/* function add(int $a, int $b): int
{
    return $a + $b;
}

// echo add(1, '2'); // will throw an error because '2' is not an integer
echo add(1, 2); // will not throw an error because 2 is an integer
 */

// create a function that takes in a string and an integer and returns a string
function greetings(string $name, int $age): string
{
    return "Hello $name, you are $age years old.";
}

// displays the return value of the function which is a string "Hello Gene, you are 36 years old."
echo greetings('Gene Howell', 36);
