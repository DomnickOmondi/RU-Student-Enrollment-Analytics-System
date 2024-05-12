<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "domminic";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $school = $_POST["school"];
    $program = $_POST["program"];
    $year = $_POST["yr"];
    $enrolledStudents = $_POST["enrolledStudents"];

    // Insert data into the 'enrollment' table
    $sql = "INSERT INTO enrollment (school, program, yr, enrolledStudents) VALUES ('$school', '$program', '$year', '$enrolledStudents')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
