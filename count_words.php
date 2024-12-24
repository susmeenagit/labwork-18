<?php
// Specify the file name
$filename = "essay.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $file = fopen($filename, "r");
    
    if ($file) {
        $content = "";
        
        // Read the file character by character
        while (($char = fgetc($file)) !== false) {
            // Append each character to the content variable
            $content .= $char;
        }
        
        // Close the file
        fclose($file);
        
        // Count the number of words in the content
        $wordCount = str_word_count($content);
        
        // Display the word count
        echo "<h1>Word Count</h1>";
        echo "<p>The essay contains <strong>$wordCount</strong> words.</p>";
    } else {
        // Display an error message if the file couldn't be opened
        echo "<h1>Error</h1>";
        echo "<p>Unable to open the file 'essay.txt'.</p>";
    }
} else {
    // Display an error message if the file doesn't exist
    echo "<h1>Error</h1>";
    echo "<p>The file 'essay.txt' does not exist.</p>";
}
?>
