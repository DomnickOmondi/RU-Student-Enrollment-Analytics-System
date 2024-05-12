<?php

// Database configuration
$db_host = 'your_database_host';
$db_name = 'your_database_name';
$db_user = 'your_database_user';
$db_password = 'your_database_password';

// Establish database connection using MySQLi
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    global $mysqli;
    return $mysqli->real_escape_string(htmlspecialchars(trim($data)));
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user input
    $email = sanitize_input($_POST['email']);
    $password = sanitize_input($_POST['password']);

    // Query to check user credentials
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $mysqli->prepare($query);
    
    // Note: It's recommended to use password_hash() and password_verify() for password storage and verification.
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();

    // Check if user is found
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        // User authenticated, redirect to the dashboard or home page
        header('Location: dashboard.php');
        exit();
    } else {
        // Invalid credentials, display error message
        $error_message = "Invalid email or password. Please try again.";
    }

    $stmt->close();
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
