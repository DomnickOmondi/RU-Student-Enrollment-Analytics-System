<?php
// Replace these variables with your actual database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "domminic";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $school = isset($_POST["school"]) ? $_POST["school"] : "school";
    $program = isset($_POST["program"]) ? $_POST["program"] : "program";
    $year = isset($_POST["year"]) ? $_POST["year"] : "yr";
    $studentsEnrolled = isset($_POST["studentsEnrolled"]) ? $_POST["studentsEnrolled"] : "studentsEnrolled";

    // Insert data into the "enrollment" table
    $sql = "INSERT INTO enrollment (school, program, yr, studentsEnrolled) VALUES (?, ?, ?, ?)";
    
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $school, $program, $year, $studentsEnrolled);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
