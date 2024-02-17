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
    $sql = "SELECT * FROM form WHERE username = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        echo "Login successful!";
        // You can redirect the user to another page or perform additional actions here
    } else {
        // Login failed
        echo "Invalid login credentials";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>