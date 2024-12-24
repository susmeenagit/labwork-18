<?php
// Function to calculate the area of a circle
function calculateCircleArea($radius) {
    if ($radius < 0) {
        return "Radius cannot be negative.";
    }
    $area = pi() * pow($radius, 2); // pi() returns the value of π, and pow() raises the radius to the power of 2
    return $area;
}

// Test the function with various radius values
$testRadii = [3, 5, 7.5, -2, 0];

foreach ($testRadii as $radius) {
    echo "Radius: $radius, Area: ";
    $result = calculateCircleArea($radius);
    echo is_numeric($result) ? number_format($result, 2) : $result; // Format the area to 2 decimal places if it's numeric
    echo "<br>";
}
?>
