<?php

// Global scope
// stores the value Gene  in global scope variable $name
$name = 'Gene';

// will display 'Gene' because $name is in global scope or outside of a function
// will display Gene first because $name is in global scope and also because it is seen by the compiler first
echo $name;

// Local scope
function hello()
{
    // Store name in local scope
    $name = 'Sally';

    // When runc, this will display name in local scope because it is inside of a function and the fucntion has access to it.
    // This will display 'Sally' because $name is inside of a function and will also be seen by the compiler second.
    // if there is no local scope variable, it will result in an error because the function does not have access to it because there is no variable declared in the function.
    echo 'Hello, ' . $name;
}

// calls the function which will display 'Hello, Sally'
hello();
