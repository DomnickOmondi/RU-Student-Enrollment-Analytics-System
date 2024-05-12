<?php

// Replace these with your actual credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "domminic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// Get form data (replace "name" and "email" with your actual input names)
$school = $_POST["school"];
$program = $_POST["program"];
$yr = $_POST["yr"];
$studentsEnrolled = $_POST["studentsEnrolled"];

// Sanitize data to prevent SQL injection (not shown in this example, but crucial for security)


// Prepare SQL statement (replace "your_table_name" and "column_names" with yours)
$sql = "INSERT INTO enrollment (school, program,  yr, studentsEnrolled)
 VALUES (?, ?, ?, ?)";

// Prepare statement
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters (prevents SQL injection)
mysqli_stmt_bind_param($stmt, "sssi", $school, $program, $yr, $studentsEnrolled);

// Execute statement
if (mysqli_stmt_execute($stmt)) {
  echo "New record inserted successfully!";
  header("Location: ../index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);