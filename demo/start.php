<?php
    session_start();
    include('db.php');
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to bloodbank</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center class="center-div">
            <h2>Are you <a href="admin_login.php">Admin? </a> Or <a href="patient_login.php">Patient?</a> Or <a href="donor_login.php">Donor?</a></h2>
        </center>
        
    </body>
</html>