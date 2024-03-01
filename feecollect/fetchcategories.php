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

    // Prepare the query to fetch categories
    $query = "SELECT * FROM feecollect_categories";
    $categoryresult = $conn->query($query);

    // Check if the query was successful
    if ($categoryresult) {
        // Initialize an array to hold the categories
        $categories = array();

        // Fetch associative array
        while ($row = $categoryresult->fetch_assoc()) {
            // Add the row to the categories array
            $categories[] = $row;
        }

        // Free categoryresult set
        $categoryresult->free();

        // Encode the categories array as JSON
        $jsonCategories = json_encode($categories);

        // Set the appropriate content type and encoding
        header('Content-Type: application/json; charset=utf-8');

        // Output the JSON
        echo $jsonCategories;
    } else {
        // Handle the case where the query fails
        throw new Exception("Error: " . $conn->error);
    }
}  catch (Exception $e) {
    // Log the error
    error_log('Error: ' . $e->getMessage());

    // Return a user-friendly error message
    http_response_code(500);
    echo json_encode(array('error' => 'An error occurred while processing your request. Please try again later.'));
} finally {
    // Close the connection
    if ($conn) {
        $conn->close();
    }
}
