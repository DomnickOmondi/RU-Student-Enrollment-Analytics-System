<?php

$dsn = "mysql:host=localhost; dbname=domminic";
$dbusername = "root";
$dbpassword = "";
try {
    $pdo = new PDO($dsn, $dbusername,  $email, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed: " . $e->getmessage();
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];

    try {
        // require_once "dbh.inc.php";
        $query = "INSERT INTO registration (username, pwd, email) VALUES 
        ($username, $password, $email;)";

        header("Location: ../index.php");
        
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else{
    header("Location: ../index.php");
}