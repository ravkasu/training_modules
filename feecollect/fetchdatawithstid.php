<?php
// Database connection parameters
$dbConfig = include 'config/database.php';

try {
    // Create connection
    $conn = new mysqli($dbConfig['servername'], $dbConfig['username'], $dbConfig['password'], $dbConfig['dbname']);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Student ID input (replace with actual student ID input mechanism)
    $rollno = $_GET['rollno']; // Assuming student ID is submitted via a query parameter

    // SQL query to retrieve student data based on student ID
    $sql = "SELECT country, state, city, institute, course, fees, email, mobile, 
    name, parent, amount, feecomments FROM agdpfintech_feecollect WHERE rollno = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rollno);
    $stmt->execute();
    // $stmt->store_result();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Output student data as JSON
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(array()); // Send empty JSON if no data found
    }

    // Close the connection
    $conn->close();
} catch (Exception $e) {
    // Handle connection or query errors gracefully
    // Display an error message, log the error, or redirect to an error page
    exit("Error: " . $e->getMessage());
}
