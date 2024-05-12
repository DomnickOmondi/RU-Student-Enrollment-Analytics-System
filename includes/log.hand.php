<?php
$email = $_POST["email"];
$password = $_POST["pwd"];

//database connection
$con = new mysqli("localhost","root","","domminic");
if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
}
else{
    $stmt = $con->prepare("select * from registration where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['pwd'] === $password){
            echo "<h2>Login Successfully</h2>";
            header("location: ../dashboard.php");
        }
        else{
            echo "<h2>Invalid Email or Password</h2>";
            header("location: ../course.php");
        }
     }
    // else{
    //     echo "<h2>Invalid Email or Password</h2>";
    // }
}