<?php

$number = 1; // start at 1

// Loop until the number is greater than 10
// check if the number is even or odd and print the number and whether it is even or odd
/* while ($number <= 10) {
    if ($number % 2 === 0) {
        echo $number . ' is even </br>';
    } else {
        echo $number . ' is odd </br>';
    }
    $number++; // increment the number
} */


// Break out of a loop
// Loop until the number is greater than 10
// check if the number is 5 and break out of the loop
/* for ($number = 0; $number <= 10; $number++) {
    if ($number === 5) {
        break;
    }
    echo $number . '</br>';
} */

// Skip and contunue
/* for ($number = 0; $number <= 10; $number++) {
    if ($number === 5) {
        continue; // runs through the loop and skips where whatever the condition is set to
    }
    echo $number . '</br>';
} */


$studentGrades = array(
    'James' => 85,
    'Jack' => 92,
    'Emma' => 78,
    'Alice' => 95,
    'Shane' => 88
);

foreach ($studentGrades as $student => $grade) {
    if ($grade >= 90) {
        echo $student . ' has an excellent grade! </br>';
    }
}
