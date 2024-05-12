<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rongo Universiy Students Enrollment Analytics MIS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.php"><img src="images/Rongo University logo.png"></a>
        </div>
        <!-- <a href="student.php">Student Enrollment</a>
        <a href="course.php">Course Enrollment</a> -->
        <!-- <a href="dashboard.php">Dashboard</a> -->
        <!-- <button class="btnLogin-popup"><a href="login.php">Login</a></button> -->
        <div id="dark-btn">
            <span></span>
       </div>
    </nav>

    <div class="wrapper">
        <div class="form-box">
            <h2>Login</h2>
            <form action="includes/loginto.php" method = "POST">
                <div class="input-box">                  
                    <input type="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">                   
                    <input type="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="register.php" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        
    </div>




    <footer>
        <div class="logo">
            <a href="index.php"><img src="images/Rongo University logo.png"></a>
        </div>
        <b><p>Rongo University Students Enrollment Analytics &copy;2024</p></b>
        
    </footer>

    <script src="index.js"></script>
</body>
</html>