<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>
<body>
    <h2>Edit User Data</h2>
    <form method="post" action="test4.php?rollno=<?php echo $_POST['rollno']; ?>">
        <label for="rollno">ID:</label><br>
        <input type="text" id="rollno" name="rollno"> <br>

        <!-- Form fields to edit user data -->
        <label for="categories">Name:</label><br>
        <input type="text" id="categories" name="categories" value="<?php echo $categories; ?>"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="mobile">Phone:</label><br>
        <input type="text" id="mobile" name="mobile"><br><br>

        <input type="submit" value="Update">
        <p id="error-message"></p>
    </form>
</body>
</html>
