<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="form1">
        <form action="includes/correction.php">
        <label for="school">School</label><br>
            <input type="text" name="school" required><br>
            <label for="program">Program</label><br>
            <input type="text" name="program" required><br>
            <label for="yr">Year</label><br>
            <input type="year" name="yr" required><br>
            <label for="studentsEnrolled">Enrolled Students</label><br>
            <input type="int" name="studentsEnrolled" required><br>
            <button class ="sub" type="submit">Submitt</button>
        </form>
    </section>
    
</body>
</html>