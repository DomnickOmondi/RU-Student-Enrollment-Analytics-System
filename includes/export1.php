<?php
$db_host = 'localhost';
$db_name = 'domminic';
$db_user = 'root';
$db_password = '';


 $school = $_POST["school"];
 $program = $_POST["program"];
 $year = $_POST["year"];
 $studentEnrolled = $_POST["studentEnrolled"];



//connect to the database
$conn = new mysqli('localhost', 'root', '', 'domminic');
if ($conn->connect_error){
    die('Connection failed : ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into enrollment(school, program, year, studentEnrolled)
    values(?, ?, ?, ?)");
    $stmt->bind_param("sssi",$school, $program, $year, $studentEnrolled);
    $stmt->execute();
    echo "registration sucessfully...";
   // header("Location: ../login.php");
   
    $stmt->close();
    $conn->close();
    
    
}