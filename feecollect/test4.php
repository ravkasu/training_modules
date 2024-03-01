<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "systimatek_feecollect";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the student ID entered in the form field
$rollno = $_POST['rollno']; // Assuming the form uses the 'post' method

// Construct the SQL query
$sql = "SELECT rollno, name, categories, email, mobile FROM systimatek_feecollect WHERE rollno = '$rollno'";
   
// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Process the fetched data
    while ($row = $result->fetch_assoc()) {
        echo "Student ID: " . $row["rollno"] . "<br>";
        echo "Full Name: " . $row["name"] . "<br>";
        // Add more fields as needed
    }
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>
