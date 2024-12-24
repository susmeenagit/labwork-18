<?php
// Specify the file name
$filename = "data.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Read the file contents
    $fileContents = file_get_contents($filename);
    
    // Display the contents
    echo "<h1>Contents of data.txt:</h1>";
    echo "<pre>" . htmlspecialchars($fileContents) . "</pre>";
} else {
    // Display an error message if the file doesn't exist
    echo "<h1>Error</h1>";
    echo "<p>The file 'data.txt' does not exist.</p>";
}
?>
