<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systimatek_feecollect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables to store student data
$categories = $email = $mobile = $name = '';

// Student ID input (replace with actual student ID input mechanism)
$rollno = $_POST['rollno']; // Assuming student ID is submitted via a form

// SQL query to retrieve student data based on student ID
$sql = "SELECT * FROM agdpfintech_feecollect WHERE rollno = '$rollno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch student data
    $row = $result->fetch_assoc();
    $categories = $row["categories"];
    $email = $row["email"];
    $mobile = $row["mobile"];
    $name = $row["name"];
} else {
    echo "0 results"; // No student found with the provided student ID
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        /* CSS for styling the form */
        /* Styles omitted for brevity */
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Profile</h2>
        <form action="https://edpuatgwapiv5clb.yesbank.in/app/uat/accountApi" method="post">
            <div class="form-group">
                <label for="rollno">Student ID:</label>
                <input type="text" id="rollno" name="rollno" value="<?php echo $rollno; ?>" required>
                <button type="button" id="updatebtn" onclick="fetchStudentData()">Edit</button>
            </div>
            <div class="form-group">
                <label for="categories">Categories:</label>
                <input type="text" id="categories" name="categories" value="<?php echo $categories; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo $mobile; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" disabled>
            </div>
            <button type="submit" id="updatebtn" disabled>Update Student Data</button>
        </form>
    </div>
    <script>
        function fetchStudentData() {
            // Enable the input fields
            document.getElementById("categories").disabled = false;
            document.getElementById("email").disabled = false;
            document.getElementById("mobile").disabled = false;
            document.getElementById("name").disabled = false;
            document.getElementById("updatebtn").disabled = false;
        }
    </script>
</body>
</html>
