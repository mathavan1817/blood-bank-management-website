<?php
    session_start();
    include("db.php");
    $query="select * from groupop";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
   
    
    
?>

<<!DOCTYPE html>
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
      background-image: url('bac.jpg'); /* Add your background image URL here */
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    
    header {
      background-color: #bc1717; /* Red color */
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
      color: #a80707; /* Red color */
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
      background-color: rgb(152, 7, 7); /* Red color */
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
      background-color: #ff0000ac; /* Red color */
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <h1>Blood Bank Management System</h1>
    <p>Donor with O+ bloodgroup</p>
  </header>
  <nav>
        <ul>
            <a href="home.php">Home</a><a href="donor_login.php">Donors</a>
           
            <a href="patient_home.php">Recipients</a>
            <a href="admin_login.php">Admin</a>
            <a href="#contact">Contact</a>
        </ul>
    </nav>

  
    
    <div class="donor-profile-box" id="filteredDonors">
      <h3>Donor Profiles</h3>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Contact Number</th>
            <th>City</th>
            <th>Blood Group</th>
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
        
          <!-- Donor profiles will be dynamically added here based on selection -->
        </tbody>
      </table>
    </div>
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
    function filterDonors() {
      var selectedBloodGroup = document.getElementById("bloodGroup").value;
      var donorProfiles = [
        { name: "John Doe", gender: "Male", contact: "123-456-7890", city: "Cityville", bloodGroup: "A+" },
        { name: "Jane Smith", gender: "Female", contact: "987-654-3210", city: "Townsville", bloodGroup: "O-" },
        // Add more donor profiles as needed
      ];

      var filteredDonors = donorProfiles.filter(function(donor) {
        return donor.bloodGroup === selectedBloodGroup;
      });

      var donorTableBody = document.querySelector("#filteredDonors tbody");
      donorTableBody.innerHTML = "";

      filteredDonors.forEach(function(donor) {
        var row = donorTableBody.insertRow();
        var nameCell = row.insertCell(0);
        var genderCell = row.insertCell(1);
        var contactCell = row.insertCell(2);
        var cityCell = row.insertCell(3);
        var bloodGroupCell = row.insertCell(4);

        nameCell.innerHTML = donor.name;
        genderCell.innerHTML = donor.gender;
        contactCell.innerHTML = donor.contact;
        cityCell.innerHTML = donor.city;
        bloodGroupCell.innerHTML = donor.bloodGroup;
      });
    }
  </script>
</body>
</html>