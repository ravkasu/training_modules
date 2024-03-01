<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>
<body>
    <h2>Edit User Data</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="rollno">ID:</label><br>
        <input type="text" id="rollno" name="rollno"> <br>

        <!-- Form fields to edit user data -->
        <label for="categories">Name:</label><br>
        <input type="text" id="categories" name="categories"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="mobile">Phone:</label><br>
        <input type="text" id="mobile" name="mobile"><br><br>

        <input type="submit" value="Update">
    </form>

    <script>
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
                        // var userData = xhr.responseText;
                        console.log(userData);
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
    </script>
</body>
</html>
