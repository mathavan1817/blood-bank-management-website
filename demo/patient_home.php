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
      background-color: #007BFF;
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
      background-color: #4DA8DA;
      padding: 10px;
      text-align: center;
    }
    
    nav a {
      text-decoration: none;
      color: #007BFF;
      padding: 10px;
    }
    
    section {
      padding: 20px;
      margin: 20px;
      border: 1px solid #ccc;
      background-color: #D1ECF1;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    footer {
      background-color: #007BFF;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .patient-search-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .blood-type-selector {
      flex-grow: 1;
      margin-right: 20px;
    }

    .blood-type-selector label {
      display: block;
      margin-bottom: 5px;
    }

    .blood-type-selector select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .search-button {
      background-color: #007BFF;
      color: #fff;
      border: none;
      padding: 15px 25px; /* Increased padding for a larger button */
      border-radius: 8px; /* Rounder corners */
      cursor: pointer;
      font-size: 16px; /* Larger font size */
    }

    .patient-profile-box {
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
      background-color: #007BFF;
      color: #fff;
    }

    .blood-group-buttons {
      margin-top: 20px; /* Increased margin for better spacing */
      display: flex;
      justify-content: space-around; /* Improved layout for buttons */
    }

    .blood-group-buttons button {
      background-color: #007BFF;
      color: #fff;
      border: none;
      padding: 20px 30px; /* Increased padding for larger buttons */
      border-radius: 10px; /* Rounder corners */
      margin-right: 20px;
      cursor: pointer;
      font-size: 18px; /* Larger font size */
    }
  </style>
</head>
<body>
  <header>
    <h1>Blood Bank Management System</h1>
    <p>Patient Web Page</p>
  </header>
  
  <nav>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
    <a href="#Donor-search">Patient Search</a>
    <a href="home.php">Log Out</a>
  </nav>
  
  <section id="about">
    <h2>About</h2>
    <p>Welcome to the Patient Web Page of the Blood Bank Management System. We are dedicated to providing comprehensive and compassionate care for our patients. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac est vel ex tempor consequat et sed dolor. Integer gravida nisl ut feugiat fringilla.</p>
  </section>

  
    <div class="blood-group-buttons">
      <a href="groupA.php"><button>Blood Group A</button></a>
      <a href="groupbp.php"><button>Blood Group B</button></a>
      <a href="groupop.php"><button>Blood Group O</button></a>
      <a href="groupabp.php"><button>Blood Group AB</button></a>
    </div>

    <div class="patient-profile-box">
      <h3>Donor Profiles</h3>
      <table>
        <thead>
          <tr>
            <th>Username</th>
            <th>gender</th>
            <th>ContactNO</th>
            <th>City</th>
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
            
          <!-- Add more patient profiles as needed -->
        </tbody>
      </table>
    </div>
  </section>
  
  <section id="services">
    <h2>Services</h2>
    <ul>
      <li>Blood Donation</li>
      <li>Blood Testing</li>
      <li>Patient Management</li>
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

  <script>
    function handleBloodTypeChange() {
      var bloodType = document.getElementById("bloodType").value;
      // Add more conditions for other blood types if needed
    }

    function searchPatients() {
      // Redirect to a new page (replace 'new_page.html' with your desired page)
      window.location.href = "home.html";
    }

    
  </script>
</body>
</html>