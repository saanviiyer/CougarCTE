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
        .box-container {
            display: flex;
            /* overflow-x: auto;
            white-space: nowrap; */
            padding: 10px; /* Adjust padding as needed */
            margin-bottom: 20px; /* Add some space below the container */
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        

        .box{
            flex: 0 0 auto;
            width: 200px; /* Set your desired width for each box */
            height: 200px; /* Set your desired height for each box */
            background-color: #CFEBFF;
            margin-right: 10px; /* Add spacing between boxes */
            text-align: center;
            border: 2px solid black;
            border-radius: 8px;
            padding: 20px;
            box-sizing: border-box;
            text-decoration: none;
            color: #333;
            display: inline-block; /* Ensure boxes appear inline */
            inline-size: 200px;
            cursor: pointer;

            white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
            white-space: -pre-wrap;      /* Opera 4-6 */
            white-space: -o-pre-wrap;    /* Opera 7 */
            white-space: pre-wrap;       /* css-3 */
            word-wrap: break-word;       /* Internet Explorer 5.5+ */
            white-space: -webkit-pre-wrap; /* Newer versions of Chrome/Safari*/
            word-break: normal;
            white-space: normal;

        }

        .box:hover {

    background-color: #82a7c2; /* Darker color when hovered */
}


        .wrapped-box {
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 5px;
            text-decoration: none;
            color: #333;
            background-color: #CFEBFF;
            transition: background-color 0.3s;
            inline-size: 200px;

            white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
            white-space: -pre-wrap;      /* Opera 4-6 */
            white-space: -o-pre-wrap;    /* Opera 7 */
            white-space: pre-wrap;       /* css-3 */
            word-wrap: break-word;       /* Internet Explorer 5.5+ */
            white-space: -webkit-pre-wrap; /* Newer versions of Chrome/Safari*/
            word-break: normal;
            white-space: normal;

         }

    .wrapped-box:hover {
        background-color: #3782B8;
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
    width: 300px; /* Set the desired width */
    position: relative;
    margin-bottom: 20px;
}

/* Style for the search input */
#searchInput {
    width: 100%;
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

                background-color: #1e4278;

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
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>
<body>


    <?php //include 'formHandler.php'; ?> 
    <div class="spacer"></div>

    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="login.php">Teacher Login</a>  
        <a href="faq.php">FAQ</a>
        <a href="contact.php">Contact</a>
    </div>
    <div id="indexContainer">
    <img id="logo" src="https://cdn.glitch.global/38a788ff-bc5a-4e2a-bce6-1d7dd38789aa/Screen%20Shot%202024-02-05%20at%202.42.53%20PM.png?v=1707172991015" alt="Washington CTE Logo"/>
    <img id="logo3" src="https://cdn.glitch.global/38a788ff-bc5a-4e2a-bce6-1d7dd38789aa/Screen%20Shot%202024-02-05%20at%203.04.33%20PM.png?v=1707174293320" alt="Bothell High School Logo with Cougar Paw Print"/>
    <h1 class="title" id="title">Bothell CTE Department</h1>
    
    <div id = "content">
    <h3 class="title3" id="subtitle">
        <p>Introducing the Bothell High School Department for Career and Technical Education!</p>
    </h3>
    
    <h2 class="miss">About </h2>
    
    <p class="statement">
        <em>
            Bothell High School offers a variety of programs that immerse students into fields of potential fields not directly in their core classes... These classes are in the fields of
        </em>
    </p>
    
    <div class="title3">
        <ul>
            <li>Business</li>
            <li>Computer Sciences</li>
            <li>Family & Consumer Science</li>
            <li>Marketing</li>
            <li>Technology</li>
            <li>Additional CTE</li>
            <li>Off-Campus District Satellite Courses</li>
        </ul>
    </div>
    
    <h2 class="miss">CTE Classes</h2>


    <h2>Classes</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

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
    $buttonid = $buttonid + 1;
    echo '<li><a href="classPage.php?button='.$buttonid.'">'.$classname.'</a></li>';
}

?>
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
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
</script>
</body>
</html>