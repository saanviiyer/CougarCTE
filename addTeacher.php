<!DOCTYPE html>
<html lang="en">

<head>

    <title>Add Teacher</title>
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


    <h1 class="title" id="title">Add Teacher</h1>

    <div class="container">
        <div id="contactFormContainer">
            <form id="addTeacherForm" method="post">
            <input type="text" placeholder="First Name" name="firstName">
            <input type="text" placeholder="Last Name" name="lastName">
            <input type="email" placeholder="Email" name="email">
            <input type="submit" value="Add Teacher">
            </form>
        </div>
    </div>
   
 
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 

    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="your_site_key"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>

    <?php
$firstName = "";
$lastName = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $fullname = $firstName . " " .$lastName;
    $email = $_POST["email"];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "cte";
    $connection =  mysqli_connect($host, $username, $password, $dbName);
    $query = "INSERT INTO `cte`.`teachers` (`firstname`, `lastname`, `fullname`, `email`) VALUES ('".$firstName."', '".$lastName."', '".$fullname."', '".$email."');";
    mysqli_query($connection,$query);
}
?>

    <script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clttjvov9004frhb12z0y2x9m"></script>
</body>

</html>