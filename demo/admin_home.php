<?php
    session_start();
    include("db.php");
    $query="select * from donor";
    $data=mysqli_query($con,$query);
    $query21="select * from patient";
    $data1=mysqli_query($con,$query21)
  
   
    
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        section {
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Blood Bank Admin Page</h1>
    </header>

    <nav>
        <a href="#donor">Donor Information</a>
        <a href="#inventory">Reciver Information</a>
        <a href="home.php">Log Out</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <section id="donor">
        <h2>Donor Information</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>ContactNO</th>
                    <th>City</th>
                    <th>Blood Group</th>
                    <!-- Add more columns as needed -->
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
    </section>

    <section id="inventory">
        <h2>Reciver Information</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>ContactNO</th>
                    <th>City</th>
                    <th>Blood Group</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
            <tr>
                <?php

                    while($row=mysqli_fetch_assoc($data1))
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
    </section>
</body>
</html>