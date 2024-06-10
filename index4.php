\<!DOCTYPE html>
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
    
    <!--<div class="search-container">
        <input type="text" id="searchInput" placeholder="Search for classes...">
        <button onclick="searchClasses()">Search</button>
    </div> -->

    <select id = "select">
        <option value = "all">All Classes</option>
        <option value = 'business'>Business</option>
        <option value = 'cs'>Computer Sciences</option>
        <option value = 'fcs'>Family & Consumer Science</option>
        <option value = 'marketing'>Marketing</option>
        <option value = 'technology'>Technology</option>
    </select>


        
    <!--
    <div class="select-menu" id="filter-button">
        <div class="select-button" id = "select-btn">
            <span id="filter-btn">Filter Classes</span>
            <ion-icon name="chevron-down-circle-outline" class="icon-arrow"></ion-icon>
        </div>
    
        <ul class="list">
            <li class="option" style="--i:5;">
                <ion-icon name="briefcase-outline" class="icon"></ion-icon>
                <span class="option-text">Business</span>
            </li>
            <li class="option" style="--i:5;">
                <ion-icon name="laptop-outline" class="icon"></ion-icon>
                <span class="option-text">Computer Sciences</span>
            </li>
            <li class="option" style="--i:5;">
            <ion-icon name="people-outline" class="icon"></ion-icon>
                <span class="option-text">Family & Consumer Science</span>
            </li>
            <li class="option" style="--i:5;">
            <ion-icon name="bar-chart-outline" class="icon"></ion-icon>
                <span class="option-text">Marketing</span>
            </li>
            <li class="option" style="--i:5;">
            <ion-icon name="logo-electron" class="icon"></ion-icon>
                <span class="option-text">Technology</span>
            </li>
    
        </ul>
    </div>

-->
    
    
    <div class="box-container">
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "cte";
    
    $connection = mysqli_connect($host, $username, $password, $dbName);
    
    $query = "SELECT * FROM classes";
    $results = mysqli_query($connection, $query);
    
    // Open the container div
    
    echo '<div class= "main-cards">';
    
    echo '<div class="box-container">';
    // Loop through the fetched results to generate boxes
    $count = 1;
    $clusterInt = 'zero'; 
    echo '<ul class = "classes">';
    while ($row = mysqli_fetch_assoc($results)) {
        $classname = $row['name'];
        $clustername = $row['cluster'];
        if($clustername == "Business") $clusterInt = 'business';
        else if($clustername == "Computer Sciences") $clusterInt = 'cs';
        else if($clustername == "Family & Consumer Science") $clusterInt = 'fcs';
        else if($clustername == "Marketing") $clusterInt = 'marketing';
        else if($clustername == "Technology") $clusterInt ='technology';
        else $clusterInt = 'zero';
        
        echo '<li id = ' . $clusterInt . '>';
        echo '<button class="box" id="wrapped-box' . $count . '" onclick="navigateToPage(' . $count . ')">';
        echo '<span class="classname" style="font-weight: bold;">' . $classname . '</span>';
        echo '<br>';
        echo '<span class="clustername" style="font-weight: bold;">' . $clustername . '</span>';
        echo '</button>';
        echo '</li>';
        
        $count++;
    }
    echo '</ul>';
    // Close the container div
    echo '</div>';
    
    echo '</div>';
    
    
    mysqli_close($connection);
    ?>
    
    </div>
    <p id = 'p'></p>
    <script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clttjvov9004frhb12z0y2x9m"></script>
    <script>
        function navigateToPage(buttonId){
            window.location.href = "classPage.php?button=" + buttonId;
            
        }
        function searchClasses() {
        // Declare variables
        var input, filter, container, boxes, clusternameElements, i, searchedCluster;
        input = document.getElementById('searchInput');
        filter = input.value.trim().toUpperCase();
        container = document.getElementById('boxContainer');
        boxes = container.getElementsByClassName('box');
    
        // Loop through all boxes, hide those that don't match the search query
        for (i = 0; i < boxes.length; i++) {
            clusternameElements = boxes[i].getElementsByClassName("clustername");
            searchedCluster = clusternameElements[0] ? clusternameElements[0].textContent.trim().toUpperCase() : '';
            if (searchedCluster.includes(filter)) {
                boxes[i].style.display = "block";
            } else {
                boxes[i].style.display = "none";
            }
        }
    }
    
    // Add event listener to the Enter key press in the search input
    document.getElementById("searchInput").addEventListener("keyup", function(event) {
        if (event.keyCode === 13) { // 13 is the key code for Enter
            event.preventDefault();
            searchClasses();
        }
    });
    
    
    
    
    
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <script src="script.js"></script>
    
    </div>

</body>
</html>