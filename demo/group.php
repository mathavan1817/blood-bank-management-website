<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$dbname = "registor";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve data based on blood group
function getDonorsByBloodGroup($bloodgroup, $conn) {
    $sql = "SELECT gender, cnum, address, bloodgroup, email FROM donor WHERE bloodgroup = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $bloodgroup);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bloodgroup = $_POST["bloodgroup"];
    $donors = getDonorsByBloodGroup($bloodgroup, $conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Search</title>
</head>
<body>

    <h1>Donor Search</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="bloodgroup">Search by Blood Group:</label>
        <input type="text" name="bloodgroup" id="bloodgroup" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($donors->num_rows > 0) {
            echo "<h2>Donors with Blood Group $searchBloodGroup</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Gender</th><th>Contact Number</th><th>Address</th><th>Blood Group</th><th>Email</th></tr>";
            while ($row = $donors->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["cnum"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["bloodgroup"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No donors found with Blood Group $bloodgroup</p>";
        }
    }
    ?>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>