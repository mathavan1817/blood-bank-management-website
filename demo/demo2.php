<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM LOGIN AND REGISTER</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="signup">
        <h1>Sign Up for Receiver</h1>
        
        <p class="under">____________________________________</p>
        <form method="POST">
            <label>User Name</label>
            <input type="text" name="username" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact NO</label>
            <input type="text" name="cnum" required>
            <label>Address</label>
            <input type="text" name="address" required>
            <label>Blood group</label>
            <input type="text" name="bloodgroup" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            
            <input type="submit" value="Submit">
        </form>
        <p>Already have an account? <a href="patient_login.php">Login here?</a></p>
        <p>By clicking the sign-up button, you agree to our<br> 
        <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
        

    <?php
    session_start();

    include("db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['username'];
        $gender = $_POST['gender'];
        $cnum = $_POST['cnum'];
        $address = $_POST['address'];
        $bloodgroup = $_POST['bloodgroup'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if (!empty($email) && !empty($password) && !is_numeric($email)) {
            $query = "INSERT INTO form(username, gender, cnum, address, bloodgroup, email, pass) VALUES ('$firstname','$gender','$cnum','$address','$bloodgroup','$email','$password')";
            $query1 = "INSERT INTO patient(username, gender, cnum, address, bloodgroup, email, pass) VALUES ('$firstname','$gender','$cnum','$address','$bloodgroup','$email','$password')";

            mysqli_query($con, $query);
            mysqli_query($con, $query1);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
        }
    }
    ?>

</body>
</html>