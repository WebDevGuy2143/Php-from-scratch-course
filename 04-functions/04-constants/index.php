<?php

// Constants
// cannot be changed
/* define('APP_NAME', 'PHP From Scratch');
define('APP_VERSION', '1.0.0'); */


// displays the value of APP_NAME and APP_VERSION with a line break in between
/* echo APP_NAME;
echo '<br>';
echo APP_VERSION; */

// cannot be changed
const APP_NAME = 'PHP From Scratch';
const APP_VERSION = '1.0.0';
const DB_NAME = 'MYSQL';
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '123pass';

function run()
{
    echo APP_NAME;
    echo '<br>';
    echo DB_HOST, '<br>' . DB_USER, '<br>' . DB_PASS, '<br>' . DB_NAME;
}

run();
