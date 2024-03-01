<?php
// Database connection (replace with your database credentials)
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

// Initialize variables for form field values
$categories = $email = $mobile = $rollno = "";

// Function to retrieve user data from database
function getUserData($conn, $rollno)
{
    $sql = "SELECT categories, email, mobile FROM agdpfintech_feecollect WHERE rollno = $rollno";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}

// Function to update user data in the database
function updateUserData($conn, $rollno, $categories, $email, $mobile)
{
    $sql = "UPDATE agdpfintech_feecollect SET categories='$categories', email='$email', mobile='$mobile' WHERE rollno=$rollno";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $rollno = $_POST['rollno']; // Assuming user ID is submitted via a hidden input field
    $categories = $_POST['categories'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Update user data in the database
    if (updateUserData($conn, $rollno, $categories, $email, $mobile)) {
        echo "User data updated successfully";
    } else {
        echo "Error updating user data: " . $conn->error;
    }
} else {
    // Check if user ID is provided (replace '1' with the actual user ID)
    $rollno = 'INS202400001';

    // Retrieve user data from the database
    $userData = getUserData($conn, $rollno);

    // Populate form field values with retrieved data
    if ($userData) {
        $categories = $userData['categories'];
        $email = $userData['email'];
        $mobile = $userData['mobile'];
    } else {
        echo "User not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta categories="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>

<body>
    <h2>Edit User Data</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="rollno">ID:</label><br>
        <input type="text" id="rollno" name="rollno"><br>

        <!-- Form fields to edit user data -->
        <label for="categories">Name:</label><br>
        <input type="text" id="categories" name="categories" value="<?php echo $categories; ?>"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>

        <label for="mobile">Phone:</label><br>
        <input type="text" id="mobile" name="mobile" value="<?php echo $mobile; ?>"><br><br>

        <input type="submit" value="Update">
    </form>

    <!-- <script>
        // Function to fetch user data and populate form fields
        function populateUserData(rollno) {
            // Make an AJAX request to fetch user data based on the provided user ID
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "fetchdata.php?rollno=" + rollno, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Parse the JSON response
                        var userData = JSON.parse(xhr.responseText);

                        // Populate form fields with retrieved user data
                        document.getElementById("categories").value = userData.categories;
                        document.getElementById("email").value = userData.email;
                        document.getElementById("mobile").value = userData.mobile;
                    } else {
                        // Handle error
                        console.error("Failed to fetch user data");
                    }
                }
            };
            xhr.send();
        }

        // Add event listener to user ID input field
        document.getElementById("rollno").addEventListener("input", function() {
            var rollno = this.value;
            if (rollno) {
                // Call function to populate user data based on entered user ID
                populateUserData(rollno);
            }
        });
    </script> -->
</body>

</html>

<?php
// Close database connection
$conn->close();
?>