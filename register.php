<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Rongo Universiy Students Enrollment Analytics MIS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.html"><img src="images/Rongo University logo.png"></a>
        </div>
        <!-- <a href="student.html">Student Enrollment</a>
        <a href="course.html">Course Enrollment</a> -->
        <!-- <a href="dashboard.html">Dashboard</a> -->
        <button class="btnLogin-popup"><a href="login.php">Login</a></button>
        <div id="dark-btn">
            <span></span>
       </div>
    </nav>

    <div class="wrapper">
        <div class="form-box">
            <h2>Registration</h2>
            <form action="includes/export.php" method = "POST">
                <div class="input-box">                  
                    <input type="text" name = "username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">                  
                    <input type="email" name = "email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">                   
                    <input type="text" name = "pwd" required>
                    <label for="pwd">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>


<footer>
    <div class="logo">
        <a href="index.html"><img src="images/Rongo University logo.png"></a>
    </div>
    <b><p>Rongo University Students Enrollment Analytics &copy;2024</p></b>
    
</footer>

<script src="index.js"></script>
</body>
</html>