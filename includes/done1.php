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
    $school = $_POST["school"];
    $program = $_POST["program"];
    $yr = $_POST["yr"];
    $studentsEnrolled = $_POST["studentsEnrolled"];

    // Insert data into the "enrollment" table
    $sql = "INSERT INTO enrollment(school, program, yr, studentsEnrolled) VALUES ('$school', '$program', '$yr', '$studentsEnrolled')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
        header("Locatin: ../dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
