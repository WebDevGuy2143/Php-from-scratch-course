<?php

/*
Names Challenge:
1. Take the array of names below and loop through them. The type of loop is up to you.
2. Within the loop, use a conditional statement to check if the first letter of the name is 'A'.
3. If the first letter is 'A', skip that name and continue to the next iteration.
4. If the first letter is not 'A', reverse the string.
5. Make all names lowercase before printing them.
*/

// srore names in array
$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];


// loop through names and check if first letter is 'A', if it is, skip it and continue to next iteration
foreach ($names as $name) {
    if ($name[0] === 'A') {
        continue;
    }
    // if first letter is not 'A', reverse the string and make it lowercase and line break it
    echo strtolower(strrev($name)) . '<br>';
}
