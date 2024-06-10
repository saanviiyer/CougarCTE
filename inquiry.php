<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Received Inquiries</title>
<link rel="stylesheet" href="s.css" />
<script src="/script.js" defer></script>
  
<style>
body {
  font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu;
  background-color: #1e4278;
  margin: 0;
  padding: 20px;
}

.container {
  min-width: 1200px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: white;
}

.faq-item {
  margin-bottom: 20px;
}

.question {
  font-weight: bold;
  cursor: pointer;
  color: black;
  padding:50px;
}

.answer {
  color: black;
  display: none;
  padding-top: 10px;
}

.answer.active {
  color: gray;
  display: block;
  text-align: center; /* Centered text */
}
</style>

<style>
  body {
    margin: 0;
    font-family: 'SF Pro', Arial, sans-serif;
    background-color: #f0f0f0;
    background-image: url('https://wallpapers.com/images/hd/minimalist-blue-e0q5nh2rivmv9eio.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
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
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "cte";
        
    $connection = mysqli_connect($host, $username, $password, $dbName);
        
    $query = "SELECT * FROM inquiries;";
    $results = mysqli_query($connection, $query);

?> 


<div class="navbar">
  <a href="#" class="navbar-brand">Cougar CTE</a>
  <ul class="navbar-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="login.php">Teacher Login</a></li>
    <li><a href="faq.php">FAQ</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="history.php">BHS History</a></li>
    <li><a href="inquiry.php" class = "active">Submitted Inquiries</a></li>

  </ul>
</div>

<h1>Submitted Inquiries</h1>

<div class="container"> <!-- Added container -->
  <div class="faq-item">

    <?php

    while($row = mysqli_fetch_assoc($results)){
        $name = $row["name"];
        $subject = $row["subject"];
        $email = $row["email"];
        $message = $row["message"];

        echo '<div class="question"> '.$name.' | Subject: '.$subject.'</div>';
        echo '<div class="answer">'.$message.'</div>';
    }

    ?>

  </div>

</div> <!-- Closing container -->

<script>
  // Add click event to questions to toggle answers
  document.querySelectorAll('.question').forEach(item => {
    item.addEventListener('click', () => {
      item.nextElementSibling.classList.toggle('active');
    });
  });
</script>
<script type="importmap">
  {
    "imports": {
      "@google/generative-ai": "https://esm.run/@google/generative-ai"
    }
  }
</script>
<script type="module">
  import { GoogleGenerativeAI } from "@google/generative-ai";

  // Fetch your API_KEY
  const API_KEY = "AIzaSyDhBwg8fnRhCGBdpILie_-GjNrOzCvsd9Y";

  // Access your API key (see "Set up your API key" above)
  const genAI = new GoogleGenerativeAI(API_KEY);

  // ...

  const model = genAI.getGenerativeModel({ model: "gemini-pro"});

  // ...
</script>
<script defer src="https://app.fastbots.ai/embed.js" data-bot-id="clv16duqx000nohbb25z1215t"></script>
</body>
</html>
