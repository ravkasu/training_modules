<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        /* CSS for styling the form */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            /* background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="button"], button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="button"]:hover, button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .student-details {
            margin-top: 20px;
        }

        .student-details div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Profile</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="rollno">Student ID:</label>
                <input type="text" id="rollno" name="rollno" required>
            </div>
            <button type="submit">Fetch Student Data</button>
        </form>

        <div class="student-details">
            <?php
            // Include the PHP code to fetch student data
            include 'test6.php';
            ?>
        </div>
    </div>
</body>
</html>
