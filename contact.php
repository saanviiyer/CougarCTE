<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="s.css">
        <style>
            body{
                /*background-image: url('https://wallpapers.com/images/hd/minimalist-blue-e0q5nh2rivmv9eio.jpg');*/
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            .container {
            max-width: 2000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        @keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

#success-message {
  animation: fadeInUp 0.5s ease-out forwards;
}
        h1 {
            text-align: center;
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
        input[type="text"], input[type="email"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input{
            
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        textarea::placeholder {
            font-family:system-ui,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen,Ubuntu,Cantarell,'Fira Sans','Droid Sans','Helvetica Neue','Segoe UI Emoji','Apple Color Emoji','Noto Color Emoji',sans-serif;
        }
        input[type="submit"] {
            background-color: #619ac4;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #3782b8;
        }
        .success-message {
            display: none;
            text-align: center;
            margin-top: 20px;
            color: green;
            font-family: Arial, sans-serif; /* Apply the same font family as the body */
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="#" class="navbar-brand">Cougar CTE</a>
            <ul class="navbar-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Teacher Login</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php" class="active">Contact</a></li> 
                <li><a href="history.php">BHS History</a></li>
            </ul>
        </div>

        <h1 style="color:white">Contact Us</h1>

        <div class="container">
            <form id="contactForm" method="post">
                <label for="name">Name</label>
                <input text="name" name="name" id="name" placeholder="Your name.." required>
                
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Your email.." required>

                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" placeholder="Subject..." required>

                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Your message.." required></textarea>

                <input type="submit"  style = "background-color: #294D8B"value="Submit">
            </form>
        </div>


        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
           $name = $_POST["name"];
           $email = $_POST["email"];
           $subject = $_POST["subject"];
           $message = $_POST["message"];

           $host = "localhost";
           $username = "root";
           $password = "";
           $dbName = "cte";
               
           $connection = mysqli_connect($host, $username, $password, $dbName);
               
           $query = "INSERT INTO `cte`.`inquiries` (`name`, `email`, `subject`, `message`) VALUES ('".$name."', '".$email."', '".$subject."', '".$message."');";
            if(mysqli_query($connection, $query)){
                echo '<div id="success-message" style="margin-top: 30px; padding: 10px; background-color: #4CAF50; color: white; border-radius: 5px; text-align: center; width: 50%; margin-left: auto; margin-right: auto; opacity: 0; transform: translateY(-20px);">
                Message sent successfully!
              </div>';
                }
        }
           
        ?>
    </body>
</html>