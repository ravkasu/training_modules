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

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form input values
        $id = $_POST['id'];
        $name = $_POST['name'];

        // Prepare the SQL query with placeholders
        $sql = "INSERT INTO your_table_name (id, name) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        // Bind the form input values to the query placeholders
        $stmt->bind_param("ss", $id, $name);

        // Execute the query
        if ($stmt->execute()) {
            echo "Record inserted successfully!";
        } else {
            throw new Exception("Query failed: " . $stmt->error);
        }

        // Close the statement
        $stmt->close();
    }
} catch (Exception $e) {
    // Handle connection or query errors gracefully
    // Display an error message, log the error, or redirect to an error page
    exit("Error: " . $e->getMessage());
}

// Close the connection
$conn->close();
?>
