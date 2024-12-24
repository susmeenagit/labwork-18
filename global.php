<?php
// Global variable
$global_var = "This is a global variable.";

function demoGlobals() {
    // Access the global variable inside a function using $GLOBALS
    echo "Inside function, accessing global variable: " . $GLOBALS['global_var'] . "<br>";

    // Modify the global variable inside the function
    $GLOBALS['global_var'] = "Global variable has been modified!";
}

// function call
demoGlobals();

// Access the modified global variable outside the function
echo "Outside function, after modification: " . $GLOBALS['global_var'] . "<br>";
?>
