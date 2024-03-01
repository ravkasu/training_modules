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

// Student ID input (replace with actual student ID input mechanism)
$rollno = $_POST['rollno']; // Assuming student ID is submitted via a form

// SQL query to retrieve student data based on student ID
$sql = "SELECT categories, email, mobile, name, rollno FROM agdpfintech_feecollect WHERE rollno = '$rollno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Student Id: " . $row["rollno"] . "<br>";
        echo "Categories: " . $row["categories"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Mobile: " . $row["mobile"] . "<br>";
        echo "Full Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results"; // No student found with the provided student ID
}

// Close connection
$conn->close();
?>
