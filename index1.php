<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rongo Universiy Students Enrollment Analytics MIS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.php"><img src="images/Rongo University logo.png"></a>
</div>
        <!-- 
        <a href="student.php">Student Enrollment</a>
        <a href="course.php">Course Enrollment</a> -->
        <a href="dashboard.php">Dashboard</a>
        <button class="btnLogin-popup"><a href="login.php">Login</a></button>
        <div id="dark-btn">
            <span></span>
       </div>
    </nav>
    
    <div class="header">
        <h1>Students Enrollment</h1>
        <p>Provides list of students by course. Especially useful for outreach, communication, and to promote engagement.</p>
        <!-- <button><a href="student.php">View Report</a></button>  -->
    </div>
    <div class="header">
        <h1>Student Course Enrollment Per semester</h1>
        <p>Provides a list of students per course and each course unit they enrolled in for a particular semester.</p> 
        <!-- <button><a href="course.php">View Report</a></button> -->
    </div>
    <div class="header">
        <h1>Student Enrollment Per Year</h1>
        <p>This report compares current enrollment to the previous year. Useful for monitoring and planning.</p>
        <button><a href="dashboard.php">View Report</a></button> 
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