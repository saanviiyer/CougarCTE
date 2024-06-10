<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Page</title>
    <link rel="stylesheet" href="s.css">
    <style>
        #myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
    border: 2px solid #3782B8; /* Add a border to the links */
    margin-top: -1px; /* Prevent double borders */
    background-color: #CFEBFF; /* Background color */
    padding: 12px; /* Padding around the text */
    text-decoration: none; /* Remove default underline */
    font-size: 18px; /* Font size */
    color: #333; /* Text color */
    display: block; /* Make the links block-level */
    border-radius: 8px; /* Rounded corners */
    transition: background-color 0.3s, border-color 0.3s; /* Add transition for smooth hover effect */
}

#myUL li a:hover {
    background-color: #3782B8; /* Change background color on hover */
    color: white; /* Change text color on hover */
    border-color: #82a7c2; /* Change border color on hover */
}

    </style>
</head>
<body>
    <?php 
    $teacherId = $_GET['button'];
    $teacherId = (int)$teacherId + 1;
    ?>


    <!-- Top Navigation Bar -->
    <div class="navbar">
  <a href="#" class="navbar-brand">Cougar CTE</a>
  <ul class="navbar-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Teacher Login</a></li>
    <li><a href="faq.php" >FAQ</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="history.php">BHS History</a></li>
    <?php echo '<li><a href="addClass.php?teacher='.$teacherId.'">Add Class</a></li>' ?>
    <?php
        if($teacherId == 9){
            echo '<li><a href="addTeacher.php">Add Teacher</a></li>';
            echo '<li><a href="inquiry.php">Submitted Inquiries</a></li>';
        }
    ?>
  </ul>
</div>

     
    </div>

    <div class="spacer"></div>
    <?php
    

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cte";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT *
        FROM TEACHERS
        WHERE idteachers =" . $teacherId;

        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $name = $row['firstname'].' '.$row['lastname'];
    ?>
    <h1 style="color:white">Welcome <?php echo $name; ?></h1>
    <h2 class="miss">Your Classes</h2>

    <ul id="myUL">

<?php

    
$query = "SELECT * FROM classes WHERE idteachers=" . $teacherId;
$results = mysqli_query($connection, $query);
$buttonid = 0;
while($row = mysqli_fetch_assoc($results)){
    $classname = $row['name'];
    if($row['cluster'] == 'Business'){
        $cluster  = "business";
    }
    else if($row['cluster'] == 'Computer Sciences'){
        $cluster = "computer";
    }
    else if($row['cluster'] == 'Family & Consumer Science'){
        $cluster = "family";
    }
    else if($row['cluster'] == 'Marketing'){
        $cluster = "marketing";
    }
    else if($row['cluster'] == 'Technology'){
        $cluster = "technology";
    }
    else{
        $cluster = "none";
    }
    
    $buttonid = $row['idclasses'];
    echo '<li class = "filterDiv '.$cluster.'"><a class = "box" href="classPage.php?button='.$buttonid.'">'.$classname.'</a></li>';
}

?>
</ul>
</div>

























</body>










































</html>