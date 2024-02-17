<?php
    session_start();

    include("db.php");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname=$_POST['username'];
      
        $gender=$_POST['gender'];
        $cnum=$_POST['cnum'];
        $address=$_POST['address'];
        $bloodgroup=$_POST['bloodgroup'];
        $Email=$_POST['email'];
        $password=$_POST['pass'];

        if(!empty($Email) && !empty( $password) && !is_numeric($Email))
        {

            $query="insert into form(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
            mysqli_query($con,$query);
            $query="insert into donor(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";

           
            mysqli_query($con,$query);
            if($bloodgroup=="A+")
            {
                $query="insert into groupa(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
                mysqli_query($con,$query);
                
            }
            if($bloodgroup=="A-")
            {
                $query="insert into groupan(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
                mysqli_query($con,$query);
                
            }
            if($bloodgroup=="B+")
            {
                $query="insert into groupbp(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
                mysqli_query($con,$query);
                
            }
            if($bloodgroup=="B-")
            {
                $query="insert into groupbnn(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
                mysqli_query($con,$query);
                
            }
            if($bloodgroup=="O+")
            {
                $query="insert into groupop(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
                mysqli_query($con,$query);
                
            }
            if($bloodgroup=="O-")
            {
                $query="insert into groupon(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
                mysqli_query($con,$query);
                
            }
            if($bloodgroup=="AB+")
            {
                $query="insert into groupabp(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
                mysqli_query($con,$query);
                
            }
            if($bloodgroup=="AB-")
            {
                $query="insert into groupabn(username, gender , cnum , address , bloodgroup , email , pass) values ('$firstname',' $gender',' $cnum','$address',' $bloodgroup','   $Email','$password')";
                mysqli_query($con,$query);
                
            }









            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please enter some Valid Information')</script>";

        }

    }
?>


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
        <h1>Sign Up for Donor</h1>
        
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
        <p>Already have an account? <a href="donor_login.php">Login here?</a></p>
        <p>By clicking the sign-up button, you agree to our<br> 
        <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a></p>
        

   
</body>
</html>