<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bothell CTE Department</title>
    <link rel="stylesheet" href="s.css" />

    <style>
        body {
            margin: 0;
            font-family: 'SF Pro', Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px; /* Add padding to the body */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }

        .navbar-brand {
            color: white;
            font-size: 24px;
            text-decoration: none;
        }

        .navbar-links {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex; /* Use flexbox for navbar links */
        }

        .navbar-links li {
            margin-left: 20px;
        }

        .navbar-links li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            position: relative;
        }

        .navbar-links li a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -8px; /* Adjusted positioning */
            left: 0;
            background-color: transparent;
            transition: width 0.3s ease, background-color 0.3s ease;
        }

        .navbar-links li a:hover::after {
            width: 100%;
            background-color: white;
        }

        .navbar-links li a.active::after {
            width: 100%;
            background-color: white;
        }

        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-links {
                margin-top: 10px;
            }

            .navbar-links li {
                margin: 10px 0;
            }
        }

        /* Style for the buttons */
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Adjust this value for the desired spacing between buttons */
            margin-top: 20px; /* Move the container down */
        }

        .btn {
            border: 2px solid #3782B8; /* Add a border to the button */
            background-color: #CFEBFF; /* Background color */
            padding: 12px 20px; /* Padding around the text */
            text-decoration: none; /* Remove default underline */
            font-size: 18px; /* Font size */
            color: #333; /* Text color */
            border-radius: 8px; /* Rounded corners */
            cursor: pointer; /* Add cursor pointer */
            transition: background-color 0.3s, border-color 0.3s; /* Add transition for smooth hover effect */
        }

        .btn:hover {
            background-color: #3782B8; /* Change background color on hover */
            color: white; /* Change text color on hover */
            border-color: #82a7c2; /* Change border color on hover */
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="#" class="navbar-brand">Cougar CTE</a>
        <ul class="navbar-links">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="login.php">Teacher Login</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <h1 style="color: white; margin-top: 20px;">Bothell CTE Department</h1>
    
    <div id="content">
        <!-- Other content goes here -->
        
        <h2 class="miss">CTE Modules</h2>

        <div class="container">
            <button id="showclassbutton" class="btn active box" onclick="toggleDropdownCM()">View Classes</button>
            <button id="showorganizationbutton" class="btn active box" onclick="toggleDropdownOM()">View Organizations</button>
        </div>

        <!-- Rest of your HTML content -->
    </div>

    <!-- Your JavaScript scripts go here -->
</body>
</html>


    <div id = "classmenu" class="dropdown">
    <div id="myBtnContainer">
    
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('business')"> Business</button>
  <button class="btn" onclick="filterSelection('computer')"> Computer Sciences</button>
  <button class="btn" onclick="filterSelection('family')"> Family & Consumer Science</button>
  <button class="btn" onclick="filterSelection('marketing')"> Marketing</button>
  <button class="btn" onclick="filterSelection('technology')"> Technology</button>
  <button class="btn" onclick="filterSelection('Additional')"> Additional</button>
  <button class="btn" onclick="filterSelection('Satellite')"> Satellite</button>
</div>

<input type="text" id="myInputClasses" onkeyup="searchClasses()" placeholder="Search for classes.." title="Type in a name">

<ul id="myUL">

<?php

$host = "localhost";
$username = "root";
$password = "";
$dbName = "cte";
    
$connection = mysqli_connect($host, $username, $password, $dbName);
    
$query = "SELECT * FROM classes";
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
    
    $buttonid = $buttonid + 1;
    echo '<li class = "filterDiv '.$cluster.'"><a class = "box" href="classPage.php?button='.$buttonid.'">'.$classname.'</a></li>';
}

?>
</ul>
</div>



<div id="organizationmenu" class="dropdown">

<input type="text" id="myInputOrganizations" onkeyup="searchOrganizations()" placeholder="Search for classes.." title="Type in a name">
<ul id="myULOrganizations">

<?php

$host = "localhost";
$username = "root";
$password = "";
$dbName = "cte";
    
$connection = mysqli_connect($host, $username, $password, $dbName);
    
$query = "SELECT * FROM organizations";
$results = mysqli_query($connection, $query);
$buttonid = 0;
while($row = mysqli_fetch_assoc($results)){
    $organizationname = $row['name'];
    $buttonid = $buttonid + 1;
    echo '<li class = "filterDiv '.$cluster.'"><a class = "box" href="organizationPage.php?button='.$buttonid.'">'.$organizationname.'</a></li>';
}

?>
</ul>

















<script>
function searchClasses() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInputClasses");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
function searchOrganizations() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInputOrganizations");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myULOrganizations");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

// Function to toggle the dropdown
function toggleDropdownCM() {
    var dropdown = document.getElementById("classmenu");
    dropdown.classList.toggle("show");
    if(document.getElementById("showclassbutton").innerHTML == 'View Classes'){
        document.getElementById("showclassbutton").innerHTML = 'Hide Classes';
    }
    else{
        document.getElementById("showclassbutton").innerHTML = 'View Classes';
    }
}
function toggleDropdownOM() {
    var dropdown = document.getElementById("organizationmenu");
    dropdown.classList.toggle("show");
    if(document.getElementById("showorganizationbutton").innerHTML == 'View Organizations'){
        document.getElementById("showorganizationbutton").innerHTML = 'Hide Organizations';
    }
    else{
        document.getElementById("showorganizationbutton").innerHTML = 'View Organizations';
    }
}
</script>

</body>
<script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clv16duqx000nohbb25z1215t"></script>
</html>