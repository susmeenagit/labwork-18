<?php
// Specify the file name
$filename = "search.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $file = fopen($filename, "r");
    
    if ($file) {
        echo "<h1>Contents of search.txt (before STOP):</h1>";
        echo "<pre>";
        
        // Read the file line by line
        while (($line = fgets($file)) !== false) {
            // Trim the line to remove any extra whitespace
            $trimmedLine = trim($line);
            
            // Stop reading if the string "STOP" is encountered
            if ($trimmedLine === "STOP") {
                break;
            }
            
            // Display the line
            echo htmlspecialchars($line);
        }
        
        echo "</pre>";
        
        // Close the file
        fclose($file);
    } else {
        // Display an error message if the file couldn't be opened
        echo "<h1>Error</h1>";
        echo "<p>Unable to open the file 'search.txt'.</p>";
    }
} else {
    // Display an error message if the file doesn't exist
    echo "<h1>Error</h1>";
    echo "<p>The file 'search.txt' does not exist.</p>";
}
?>
