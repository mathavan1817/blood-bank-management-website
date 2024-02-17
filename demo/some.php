<?php
// Establishing a connection to the database
$servername = "localhost";
$username = "root"; // Assuming you are using the default username
$password = ""; // Assuming you have not set a password for XAMPP
$database = "registor";

$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitize_input($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $username = sanitize_input($_POST["username"]);
    $password = sanitize_input($_POST["password"]);

    // SQL query to check if the login credentials are valid
    $sql = "SELECT * FROM donor WHERE username = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        echo "<script type='text/javascript'> alert('WELCOME')</script>";
        header("location: donor_home.php");
        // You can redirect the user to another page or perform additional actions here
    } else {
        // Login failed
        echo "<script type='text/javascript'> alert('Wrong Username or password')</script>";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donor Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('bacc.jpg'); /* Add your background image URL here */
            background-size: cover;
            padding-bottom: 200px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .login {
            background-color: rgba(255, 255, 255, 0.8);
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login h1 {
            color: 	rgb(100, 100, 300);
        }

        .login form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 25px;
        }

        .login label {
            margin-top: 10px;
            color: #333;
            
        }

        .login input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login input[type="submit"] {
            background-color: #3b43d6; /* Red color */
            color: #fff;
            cursor: pointer;
        }

        .login p {
            margin-top: -30px;
            color: #555;
            
        }

        .login a {
            color: #FF0000; /* Red color */
        }
    </style>
</head>
<body>
    <div class="login">
        <h1>Donor Login</h1>
        <form method="POST">
            <label>Username</label>
            <input type="text" name="username" required>
            <label>Password</label>
            <input type="password" name="password" required>
            
            <input type="submit" value="Submit">
        </form>
        <p>Don't have an account? <a href="donor_signup.php">Sign Up here</a></p>
    </div>
</body>
</html>