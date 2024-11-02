<?php


// Outputs a greeting message "Hello, World!" to the screen, when called
function sayHello()
{
    echo 'Hello, World!';
}

// Outputs a goodbye message "Goodbye, World!" to the screen when called
function sayGoodbye()
{
    return 'Goodbye, World!';
}

// Calls snd executes the function
sayHello();

// sayGoodbye(); // does nothing because the function has a return value not an echo statement.

echo sayGoodbye(); // displays Goodbye, World! to the screen

$goodbyeMessage = sayGoodbye(); // stores Goodbye, World! in a variable and displays it when called through an echo statement
echo $goodbyeMessage; // displays Goodbye, World! to the screen
