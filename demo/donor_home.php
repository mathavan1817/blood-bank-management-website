<?php
    session_start();
    include("db.php");
    $query="select * from donor";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
   
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank Management Home Page</title>
  <style>
    /* CSS styles go here */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #B52B65;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
    }

    header p {
      color: #fff;
      font-size: 1.2em;
    }
    
    nav {
      background-color: #F7CAC9;
      padding: 10px;
      text-align: center;
    }
    
    nav a {
      text-decoration: none;
      color: #B52B65;
      padding: 10px;
    }
    
    section {
      padding: 20px;
      margin: 20px;
      border: 1px solid #ccc;
      background-color: #FCE4EC;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    footer {
      background-color: #B52B65;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .donor-profile-box {
      margin-top: 20px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background-color: #fff;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #B52B65;
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <h1>Blood Bank Management System</h1>
    <p>Donor Web Page</p>
  </header>
  
  <nav>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
    <a href="#donor-search">Donor Search</a>
    <a href="home.php">Log Out</a>
  </nav>
  
  <section id="about">
    <h2>About</h2>
    <p>Welcome to the Blood Bank Management System. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac est vel ex tempor consequat et sed dolor. Integer gravida nisl ut feugiat fringilla.</p>
  </section>
  <section id="donor-search">
    <h2>Donor Search</h2>
    <div class="donor-profile-box">
      <h3>Donor Profiles</h3>
      <table>
        <thead>
          <tr>
            <th>Username</th>
            <th>gender</th>
            <th>ContactNO</th>
            <th>Address</th>
            <th>Bloodgroup</th>
            
          </tr>
        </thead>
        <tbody>
            <tr>
                <?php

                    while($row=mysqli_fetch_assoc($data))
                    {
                ?>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['cnum']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['bloodgroup']; ?></td>

            </tr>

                <?php

                
                    }

            
                
                ?>
            
          <!-- Add more donor profiles as needed -->
        </tbody>
      </table>
    </div>
  </section>
  
  <section id="services">
    <h2>Services</h2>
    <ul>
      <li>Blood Donation</li>
      <li>Blood Testing</li>
      <li>Donor Management</li>
      <li>Blood Inventory Tracking</li>
      <li>Emergency Blood Supply</li>
    </ul>
  </section>
  
  <section id="contact">
    <h2>Contact</h2>
    <p>123 Blood Bank Street, Cityville, State</p>
    <p>Email: info@bloodbank.com</p>
    <p>Phone: 123-456-7890</p>
  </section>

  
  
  <footer>
    <p>&copy; 2023 Blood Bank Management System. All rights reserved.</p>
  </footer>
</body>
</html>