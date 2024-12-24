<?php
// Define the file name
$filename = "data.txt";

// Open the file for writing (creates the file if it doesn't exist)
$file = fopen($filename, "w");

// Check if the file was opened successfully
if ($file) {
    // Write "Hello, World!" to the file
    fwrite($file, "Hello, World!");
    
    // Close the file to save changes
    fclose($file);
    
    echo "File created and message written successfully.";
} else {
    echo "Failed to create the file.";
}
?>
