<?php
session_start();
$user_id = $_SESSION["user_id"];
date_default_timezone_set('Asia/Dhaka');

// Get the current date and time in Bangladesh timezone
$submission_date = date('Y-m-d');
$submission_time = date('H:i:s');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
   

    // Database connection parameters
    $servername = "localhost"; // Replace with your database server hostname
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "loan_funded"; // Replace with your database name

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO `contacts` (`serial_no`, `user_id`, `name`, `email`, `subject`, `message`, `submission_date`) VALUES ( '','$user_id', '$name', '$email', '$subject', '$message', '$submission_date')";


    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully.
        echo "Data inserted";
        
        
        exit; // Make sure to exit the script after the header redirect.
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
