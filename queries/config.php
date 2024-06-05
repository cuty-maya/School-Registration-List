<?php

// This is used to connect to the myscl engine and if there is an error we catch using the try catch

define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "school");
define("DB_HOST", "localhost");

// Using constants to declare our variables.
//constants are variables that dont change.

try {
    $dbh = new mysqli(
        DB_HOST,
        USERNAME,
        PASSWORD,
        DATABASE
    );
    // we catch the Exception, exception are the errors found
} catch (Exception $e) {
    exit("Error: your connection has not been established" . $e);
}