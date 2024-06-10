<!DOCTYPE html>

<html lang = "en">

<head>  
<title>Organization</title>
    <link rel="stylesheet" href="s.css"/>
    <script src="/script.js" defer></script>
  
  <style>
            .spacer {
            height: 1.1rem; /* Adjust height as needed */
            /* width: 20px; */ /* Use this for horizontal spacer */
        }
        body {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu;
            
            margin: 0;
            padding: 20px;
            padding-left: 30px;
            background-color: #1e4278;
        }

        .box-container {
            display: flex;
            /* overflow-x: auto; */
            /* white-space: nowrap; */
            padding: 10px; /* Adjust padding as needed */
            margin-bottom: 20px; /* Add some space below the container */
            flex-wrap: wrap;
            justify-content: center;
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
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #1e4278;
        }

        h2 {

            color: #1e4278;
        }

        #subtitle {
            text-align: left;
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

<div class="navbar">
  <a href="#" class="navbar-brand">Cougar CTE</a>
  <ul class="navbar-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Teacher Login</a></li>
    <li><a href="faq.php" >FAQ</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="history.php">BHS History</a></li>

  </ul>
</div>
    <div class="spacer"></div>


    <div id = "content">
        <?php



        //Connect to Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cte";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
    
        //Get button ID from URL 
        $buttonId = $_GET['button'];
        $buttonId = (int)$buttonId;
    
      
       //Prepare SQL Statement to retrieve content based on button ID
        $query = "SELECT * FROM organizations WHERE idorganizations =" . $buttonId;
        $results = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($results);
        
        $name = $row['name'];
        $contact = $row['contact'];
        $email = $row['email'];
        $type = $row['type'];
        $resources = $row['resources'];
        $description = $row['description'];


        //Close Database connection
        mysqli_close($connection);


        ?>
<div class="course-details">
    <h1 class="title" id="title" ><?php echo $name; ?></h1>
    <div class="details">
        <h2 class="subtitle">Contact: <?php echo $contact; ?></h2>
        <h2 class="subtitle">Email: <?php echo $email; ?></h2>
        <h2 class="subtitle">Type: <?php echo $type; ?></h2>
        <h2 class="subtitle">Resources: <?php echo $resources; ?></h2>
        <h2 class="subtitle">Description: <?php echo $description; ?></h2>

        <div class="spacer"></div>

        <h2 class="miss">CTE Classes</h2>

        <h2>CLASSES</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <div class="box-container">
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
                    
                    mysqli_close($connection);
                    ?>
                    </ul>
                    
                    </div>
    
    </div>
</div>
<script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clttjvov9004frhb12z0y2x9m"></script>
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

    </div>
</body>
</html>

