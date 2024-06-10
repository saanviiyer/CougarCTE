<!DOCTYPE html>
<html lang="en">

<head>

    <title>Add Class</title>
    <link rel="stylesheet" href="s.css" />
    <script src="/script.js" defer></script>

    <style>
        body {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu;
            margin: 0;
            padding: 20px;
            background-color:#1e4278;;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #619ac4;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #3782b8;
        }

        #success-message {
            text-align: center;
            margin-top: 20px;
            color: green;
        }
    </style>
</head>

<body>
    <?php
        $teacherId = $_GET['teacher'];
    ?>


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

    <h1 style="color:white">Add Class</h1>

    <div class="container">
        <div id="contactFormContainer">
            <form id="addClassForm" method="post">
            <input type="text" placeholder="Class Name" name="className">
            <input type="text" placeholder="Cluster" name="cluster">
            <input type="text" placeholder="Course Code" name="courseCode">
            <input type="text" placeholder="Course Duration" name="length">
            <input type="text" placeholder="Credits" name="credits">
            <input type="text" placeholder="Eligible Grades" name="grades">
            <input type="text" placeholder="Repeatable" name="repeatable">
            <input type="submit" value="Add Class">
            </form>
        </div>
    </div>
   
    
    <?php
$className = "";
$cluster = "";
$courseCode = "";
$length = "";
$credits = "";
$grades = "";
$repeatable = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // Retrieve form data
    $className = $_POST["className"];
    $cluster = $_POST["cluster"];
    $courseCode = $_POST["courseCode"];
    $length = $_POST["length"];
    $credits = $_POST["credits"];
    $grades = $_POST["grades"];
    $repeatable = $_POST["repeatable"];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "cte";
    $connection =  mysqli_connect($host, $username, $password, $dbName);

    $query = "INSERT INTO `cte`.`classes` (`name`, `cluster`, `coursecode`, `length`, `credit`, `grades`, `repeatable`) VALUES ('".$className."', '".$cluster."', '".$courseCode."', '".$length."','".$credits."','".$grades."','".$repeatable."');";
    mysqli_query($connection,$query);
    
}
?>

    <script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clttjvov9004frhb12z0y2x9m"></script>
            <?php
                
                $getClasses = "SELECT * FROM classes WHERE idteachers = ".$teacherId;
                
                $classOptions = mysqli_query($connection,$getClasses);
                echo $getClasses;
                while($row = mysqli_fetch_assoc($classOptions)){
                    echo "hello";
                }
                

            ?>

    <h1 class="title" id="title">Remove Classes</h1>
    <div class="container">
        <div id="contactFormContainer">
            <form id="removeClassForm" method="post">
           
          
            </form>
        </div>








</body>





</html>