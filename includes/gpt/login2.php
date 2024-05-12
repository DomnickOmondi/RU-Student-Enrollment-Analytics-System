<?php

// Database configuration
$db_host = 'your_database_host';
$db_name = 'your_database_name';
$db_user = 'your_database_user';
$db_password = 'your_database_password';

// Establish database connection using PDO
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Function to sanitize input data
function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user input
    $email = sanitize_input($_POST['email']);
    $password = sanitize_input($_POST['password']);

    // Query to check user credentials
    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password); // Note: It's recommended to use password_hash() and password_verify() for password storage and verification.
    $stmt->execute();

    // Check if user is found
    if ($stmt->rowCount() > 0) {
        // User authenticated, redirect to the dashboard or home page
        header('Location: dashboard.php');
        exit();
    } else {
        // Invalid credentials, display error message
        $error_message = "Invalid email or password. Please try again.";
    }
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
