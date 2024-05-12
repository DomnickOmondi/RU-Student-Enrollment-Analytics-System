<?php
// Replace with your database connection details
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$query = "SELECT year, SUM(students) AS total_students FROM enrollment WHERE program = 'YourProgram' GROUP BY year";
$result = $conn->query($query);

// Format data for Chart.js
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        'year' => $row['year'],
        'students' => $row['total_students'],
    ];
}

// Close connection
$conn->close();

// Encode data as JSON for JavaScript
$json_data = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Dashboard</title>
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: auto;">
        <canvas id="enrollmentChart"></canvas>
    </div>

    <script>
        // Parse JSON data
        var jsonData = <?php echo $json_data; ?>;

        // Extract years and students for Chart.js
        var years = jsonData.map(item => item.year);
        var students = jsonData.map(item => item.students);

        // Create a chart
        var ctx = document.getElementById('enrollmentChart').getContext('2d');
        var enrollmentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: years,
                datasets: [{
                    label: 'Enrollment',
                    data: students,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
