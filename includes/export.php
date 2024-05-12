<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["pwd"];


//connect to the database
$conn = new mysqli('localhost', 'root', '', 'domminic');
if ($conn->connect_error){
    die('Connection failed : ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(username, email, pwd)
    values(?, ?, ?)");
    $stmt->bind_param("sss",$username, $email, $password);
    $stmt->execute();
    echo "registration sucessfully...";
    header("Location: ../login.php");
   
    $stmt->close();
    $conn->close();
    
    
}
