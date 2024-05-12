<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "domminic";

$username = filter_input(INPUT_POST, "username");
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "pwd");

if (empty($username)){

    if(empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword ="";
    $dbname = "domminic";

    //create connection
    $conn = new mysqli ($host, $dbusername, $email, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error (' . mysqli_connect_errno() .')' . mysqli_connnect_error());
    }
    else{
        $stmt =$conn->prepare("INSERT INTO registration (username, email, pwd)
        VALUES ( '$dbusername', '$email', '$pwd')");
        $stmt->bind_param("sss", $dbusername, $email, $dbpassword);
        $stmt->execute();
        if ($conn->query($sql)){
            echo "New record inserted successfully";
        }
        else{
            echo "Error: ". $sql . "<br>". $conn->error;
        }
        $conn->close();
    }

    }
    else{
        echo "password should not be empty";
    }

}
else{
    echo "username should not be empty";
    die();

    header('Location: ../index.php');
}