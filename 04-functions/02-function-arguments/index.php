<?php

// creates a function that adds two numbers
// parameters are variables that are passed into the function (like rooms or placeholders for a person or people) rooms=parameters, person/people=arguments
/* function add($a, $b)
{
    return $a + $b; // returns the sum
}

// calls the function and displays the result by passing in two arguments provided by the user and executes the function
echo add(1, 2); // displays 3 because 1 + 2 = 3

echo '<br>'; // adds a line break to the screen

echo add(3, 4); // displays 7 because 3 + 4 = 7
 */

// creates a function that says hello and the name of the person provided as an argument in the called function
/* unction sayHellop($name = 'James') // can also pass a default value if no name is provided
{
    return 'Hello ' .  $name;
}

// calls the function and displays the result by passing in a name provided by the user and executes the function
// when no value is provided, the default value 'James' is used
echo sayHellop(); */

function addAll(...$numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo addAll(1, 2, 3, 4, 5);
