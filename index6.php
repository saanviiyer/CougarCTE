<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bothell CTE Department</title>
    <link rel="stylesheet" href="s.css" />
    <style>
        .spacer {
            height: 1.1rem; /* Adjust height as needed */
            /* width: 20px; */ /* Use this for horizontal spacer */
        }

    .classname {
    font-weight: bold;
    display: block; /* Change the display property to block */
    width: 10px;
    inline-size: 150px;

    word-wrap: break-word; /* Allow long words to be broken and wrap onto the next line */
}

    .clustername {
        font-style: italic;
    }

    .search-container {
    width: auto; /* Set the desired width */
    position: relative;
    margin-bottom: 20px;
}

/* Style for the search input */
#searchInput {
    width: auto;
    padding: 10px 30px 10px 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

/* Style for the search icon */
.fa-search {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    color: #666;
}

/* Adjusting the icon size */
.fa-search:before {
    font-size: 18px;
}

/* Hover effect on the search icon */
.fa-search:hover {
    cursor: pointer;
}
body {
  background-image: url('https://wallpapers.com/images/hd/minimalist-blue-e0q5nh2rivmv9eio.jpg');
 
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}

    </style>
     <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
    border: 2px solid #294D8B; /* Add a border to the links */
    margin-top: -1px; /* Prevent double borders */
    background-color: #CFEBFF; /* Background color */
    padding: 12px; /* Padding around the text */
    text-decoration: none; /* Remove default underline */
    font-size: 18px; /* Font size */
    color: #333; /* Text color */
    display: block; /* Make the links block-level */
    /*border-radius: 8px; /* Rounded corners */
    transition: background-color 0.3s, border-color 0.3s; /* Add transition for smooth hover effect */
}

#myUL li a:hover {
    background-color: #294D8B; /* Change background color on hover */
    color: white; /* Change text color on hover */
    border-color: #82a7c2; /* Change border color on hover */
}

#myULOrganizations {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myULOrganizations li a {
    border: 2px solid #294D8B; /* Add a border to the links */
    margin-top: -1px; /* Prevent double borders */
    background-color: #CFEBFF; /* Background color */
    padding: 12px; /* Padding around the text */
    text-decoration: none; /* Remove default underline */
    font-size: 18px; /* Font size */
    color: #333; /* Text color */
    display: block; /* Make the links block-level */
    /*border-radius: 8px; /* Rounded corners */
    transition: background-color 0.3s, border-color 0.3s; /* Add transition for smooth hover effect */
}

#myULOrganizations li a:hover {
    background-color: #294D8B; /* Change background color on hover */
    color: white; /* Change text color on hover */
    border-color: #82a7c2; /* Change border color on hover */
}
</style>


<style>
.filterDiv {
  
  
  background-color: #2196F3;
  color: #ffffff;
  width: auto;
  height: auto;
  line-height: 30px;
  text-align: center;
  margin: 2px;
  
  display: none;
}
.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
#indexContainer {
    display: flex; /* Use flexbox to adjust height */
    flex-direction: column; /* Stack elements vertically */
    min-height: 100vh; /* Set a minimum height to fill the viewport */
}
.dropdown {
    display: none;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown.show {
    display: block;
}

#myBtnContainer button {
    border: 2px solid #294D8B; /* Add a border to the button */
    background-color: #CFEBFF; /* Background color */
    padding: 12px 20px; /* Padding around the text */
    text-decoration: none; /* Remove default underline */
    font-size: 18px; /* Font size */
    color: #333; /* Text color */
    border-radius: 8px; /* Rounded corners */
    cursor: pointer; /* Add cursor pointer */
    transition: background-color 0.3s, border-color 0.3s; /* Add transition for smooth hover effect */
}

#myBtnContainer button:hover {
    background-color: #294D8B; /* Change background color on hover */
    color: white; /* Change text color on hover */
    border-color: #82a7c2; /* Change border color on hover */
}

#showclassbutton {
    border: 2px solid #294D8B; /* Add a border to the button */
    background-color: #CFEBFF; /* Background color */
    padding: 12px 20px; /* Padding around the text */
    text-decoration: none; /* Remove default underline */
    font-size: 18px; /* Font size */
    color: #333; /* Text color */
    border-radius: 8px; /* Rounded corners */
    cursor: pointer; /* Add cursor pointer */
    transition: background-color 0.3s, border-color 0.3s; /* Add transition for smooth hover effect */
}

#showclassbutton:hover {
    background-color: #294D8B; /* Change background color on hover */
    color: white; /* Change text color on hover */
    border-color: #82a7c2; /* Change border color on hover */
}

#showorganizationbutton {
    border: 2px solid #294D8B; /* Add a border to the button */
    background-color: #CFEBFF; /* Background color */
    padding: 12px 20px; /* Padding around the text */
    text-decoration: none; /* Remove default underline */
    font-size: 18px; /* Font size */
    color: #333; /* Text color */
    border-radius: 8px; /* Rounded corners */
    cursor: pointer; /* Add cursor pointer */
    transition: background-color 0.3s, border-color 0.3s; /* Add transition for smooth hover effect */
}

#showorganizationbutton:hover {
    background-color: #294D8B; /* Change background color on hover */
    color: white; /* Change text color on hover */
    border-color: #82a7c2; /* Change border color on hover */
}

#read {
  background-color: #294D8B; /* Change background color on hover */
    color: white; /* Change text color on hover */
    border-radius: 20px; /* Curved border */
      padding: 10px 20px; /* Padding for better appearance */
      border: none; /* Remove default border */
      font-size: 15px;
}

#myInputClasses {
    border: 2px solid #294D8B; /* Add a border to the input */
    border-radius: 20px; /* Make the border rounded */
    background-color: white; /* Background color */
    padding: 12px 20px; /* Padding around the text */
    font-size: 16px; /* Font size */
    color: #333; /* Text color */
    transition: border-color 0.3s; /* Add transition for smooth hover effect */
    width:auto;
}

#myInputClasses:focus {
    outline: none; /* Remove default focus outline */
    border-color: #82a7c2; /* Change border color on focus */
}

#myInputOrganizations {
    border: 2px solid #294D8B; /* Add a border to the input */
    border-radius: 20px; /* Make the border rounded */
    background-color: white; /* Background color */
    padding: 12px 20px; /* Padding around the text */
    font-size: 16px; /* Font size */
    color: #333; /* Text color */
    transition: border-color 0.3s; /* Add transition for smooth hover effect */
}

#myInputOrganizations:focus {
    outline: none; /* Remove default focus outline */
    border-color: #82a7c2; /* Change border color on focus */
}



</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=SF+Pro&display=swap">
<style>
body {
  margin: 0;
  font-family: 'SF Pro', Arial, sans-serif;
  background-color: #f0f0f0;
}
#moreText {
      display: none;
    }

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
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
}

.navbar-links li {
  display: inline;
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
    display: block;
    margin: 10px 0;
  }
}
</style>
</head>
<body>
<!DOCTYPE html>
<html lang="en-US">
<body>

<div id="google_translate_element"></div>


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



</body>
</html>



    <div class="spacer"></div>

    <div class="navbar">
  <a href="#" class="navbar-brand">Cougar CTE</a>
  <ul class="navbar-links">
    <li><a href="index.php" class="active">Home</a></li>
    <li><a href="login.php">Teacher Login</a></li>
    <li><a href="faq.php">FAQ</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="history.php">BHS History</a></li>

  </ul>
</div>
   
    <!--<img id="logo" src="https://cdn.glitch.global/38a788ff-bc5a-4e2a-bce6-1d7dd38789aa/Screen%20Shot%202024-02-05%20at%202.42.53%20PM.png?v=1707172991015" alt="Washington CTE Logo"/>-->
    <!--<img id="logo3" src="https://cdn.glitch.global/38a788ff-bc5a-4e2a-bce6-1d7dd38789aa/Screen%20Shot%202024-02-05%20at%203.04.33%20PM.png?v=1707174293320" alt="Bothell High School Logo with Cougar Paw Print"/>-->
    <h1 style="color: white">Bothell CTE Department</h1>
    
    <div id = "content">
 
    <h2 class="miss" style="background-color: #294D8B; color: white; padding: 15px;">About</h2>
    
    
    
    <div class="title3">
    <div id="content">
    <p>
      Career and Technical Education (CTE) goes beyond traditional classroom learning, equipping students with the practical skills and knowledge needed to thrive in specific career paths. Offered from middle school through high school and even post-secondary institutions, CTE programs bridge the gap between theory and application. Students delve into hands-on learning experiences that complement their academic foundation. This approach allows them to explore a variety of fields, from healthcare and engineering to information technology and media production. Through these programs, students not only gain a deeper understanding of their chosen field, but also develop in-demand skills that are highly valued by employers. Ultimately, CTE empowers students to graduate with a competitive edge, prepared not just for further education, but for immediate success in their chosen careers.
    </p>
    <p id="moreText">
      Bothell High School houses a diverse population of learners and departments students can take advantage of. Our robust academic curriculum consists of programs ranging from Advanced Placement to Careers in Technical Education to Special Education. Many of our students are concurrently enrolled in dual credit options like CTE, Running Start, and College in the High School which can provide college credit along with high school credit. Other students benefit from the vocational training available in a variety of satellite programs offered through WaNIC (a cooperative of seven local school districts), and through Lake Washington Technical College. Students come from other high schools and even other districts to participate in our unique Auto Shop and Culinary Arts classes. Additionally, we boast thriving drama and music programs that perform throughout the year at Northshore Performing Arts Center located on our campus.
    </p>
    <button id="read" onclick="toggleReadMore()">Read More</button>
  </div>
    </div>
    
    <h2 class="miss" style="background-color: #294D8B; color: white; padding: 15px;">CTE Modules</h2>

    <button id="showclassbutton" class="btn active box" onclick="toggleDropdownCM()">View Classes</button>
    <button id="showorganizationbutton" class="btn active box" onclick="toggleDropdownOM()">View Organizations</button>

    <div id = "classmenu" class="dropdown">
    <div id="myBtnContainer">
    <br>

  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('business')"> Business</button>
  <button class="btn" onclick="filterSelection('computer')"> Computer Sciences</button>
  <button class="btn" onclick="filterSelection('family')"> Family & Consumer Science</button>
  <button class="btn" onclick="filterSelection('marketing')"> Marketing</button>
  <button class="btn" onclick="filterSelection('technology')"> Technology</button>
  <button class="btn" onclick="filterSelection('Additional')"> Additional</button>
  <button class="btn" onclick="filterSelection('Satellite')"> Satellite</button>
</div>
<br>

<input type="text" id="myInputClasses" onkeyup="searchClasses()" placeholder="Search for classes.." title="Type in a name">
<br>
s
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
<br>

<input type="text" id="myInputOrganizations" onkeyup="searchOrganizations()" placeholder="Search for organizations.." title="Type in a name">
<ul id="myULOrganizations">
<br>


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
    echo '<li class = "filterDiv '.$cluster.'"><a href="organizationPage.php?button='.$buttonid.'">'.$organizationname.'</a></li>';
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
function toggleReadMore() {
      var moreText = document.getElementById("moreText");
      var button = document.getElementById("read");

      if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "block";
        button.textContent = "Read Less";
      } else {
        moreText.style.display = "none";
        button.textContent = "Read More";
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
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



</body>
<script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clv16duqx000nohbb25z1215t"></script>
</html>