<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $inputUsername = $_POST["username"];
        $inputPassword = $_POST["password"];
        
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = ""; // Change this to your database password
        $dbName = "cte";
        
        // Create connection
        $connection = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        
        // Prepare and bind the query
        $stmt = $connection->prepare("SELECT email, password FROM teachers WHERE email=?");
        $stmt->bind_param("s", $inputUsername); // 's' indicates a string parameter
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row["password"];
            if ($inputPassword === $storedPassword) {
                // Passwords match, redirect to success page
                header("Location: index7.php");
                exit;
            } else {
                // Incorrect password
                echo "<div class='error-message'>Incorrect password.</div>";
            }
        } else {
            // Username not found
            echo "<div class='error-message'>Username not found.</div>";
        }
        
        // Close statement and connection
        $stmt->close();
        $connection->close();
    }
?>
