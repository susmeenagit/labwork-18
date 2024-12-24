<!-- writee a php script that uses for each loop to iterate over an associative array containing student name as keys andd their corresponding grades as values. calculate the average grade and display it. -->
 <?php
// Associative array with student names as keys and grades as values
$students = [
    "Alice" => 85,
    "Bob" => 78,
];

// Variables to store the total grade and the number of students
$totalGrade = 0;
$numStudents = count($students);

// Iterate over the associative array
foreach ($students as $name => $grade) {
    echo "Student: $name, Grade: $grade<br>";
    $totalGrade += $grade; // Add the grade to the total
}

// Calculate the average grade
$averageGrade = $totalGrade / $numStudents;

// Display the average grade
echo "<br>Average Grade: " . number_format($averageGrade, 2);
?>