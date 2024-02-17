
<?php
    session_start();
    include("db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Blood Group Management</title>
</head>
<body>
    <header>
        <h1>Blood Group Management System</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="donor_login.php">Donors</a></li>
            <li><a href="patient_login.php">Recipients</a></li>
            <li><a href="admin_login.php">Admin</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="home">
        <h2>Welcome to our Blood Group Management System</h2>
        <h3>Some facts about blood donation :</h3>
        <p>
            1.Roughly 1 pint of blood is given during a donation, and the entire process takes about 45 minutes.<br>
            2.Blood donation can save lives, as approximately 43,000 units of blood are used each day in the U.S.<br>
            3.Blood types determine who can donate to and receive from whom. O negative is the universal blood type that can donate to everyone.<br>
            4.Adults have around 10 pints of blood in their bodies, and can donate every 56 days.<br></p>



            <h3>Giving blood is one of the simplest and quickest way all of us can contribute to helping the health system</h3>
    </section>
    <section id="contact">
    <h2>Contact</h2>
    <p>123 Blood Bank Street, Cityville, State</p>
    <p>Email: info@bloodbank.com</p>
    <p>Phone: 123-456-7890</p>
  </section>


    <!-- Add more sections for Donors, Recipients, About Us, and Contact as needed -->

    <footer>
        <p>&copy; 2023 Blood Group Management System</p>
    </footer>
</body>
</html>