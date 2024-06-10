<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>

    <link rel="stylesheet" href="s.css" />
    <script src="/script.js" defer></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            /* Add padding to match the second code */
            background-color: #1e4278;
        }

        .container {
            max-width: 2000px;
            margin: 20px auto;
            /* Center the container */
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            /* Center the heading */
            color: #333;
        }

        h1 {
            text-align: center;
            /* Center the heading */
            color: #333;

        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #619ac4;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #3782b8;
        }

        .error-message {
            color: gray;
            text-align: center;
        }
    </style>
</head>

<body>
<div class="navbar">
  <a href="#" class="navbar-brand">Cougar CTE</a>
  <ul class="navbar-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php" class="active">Teacher Login</a></li>
    <li><a href="faq.php" >FAQ</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="history.php">BHS History</a></li>

  </ul>
</div>
    
    <h1 style= "color:white">Login</h1>

    <div class="container">
        <form id="login-form" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />

            <button type="submit" name="login" style="background-color: #294D8B">Login</button>
        </form>

        <?php
        // Initialize error message variable
        $error_message = "";
        $usernames =[];
        $passwords = [];

        $host = "localhost";
        $username = "root";
        $password = "";
        $dbName = "cte";
    
        $connection = mysqli_connect($host, $username, $password, $dbName);
        $query = "SELECT email, firstname, lastname
        FROM teachers;";

        $results = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($results)){
            array_push($usernames, $row['email']);
            array_push($passwords, ($row['firstname'].$row['lastname']));
        }
       
        // Dummy check for incorrect login (replace this with your actual logic)
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if (!(in_array($username, $usernames)) || !(in_array($password,$passwords))) {
                $error_message = "Incorrect username or password.";
            }
            else{
                header("Location: teacherPage.php?button=".(array_search($username,$usernames)));
                exit;
            }
        }
        ?>

        <?php if (!empty($error_message)) : ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
    </div>

</body>

</html>