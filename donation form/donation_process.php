<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $studentId = $_POST["student_id"];
                $name = $_POST["name"];
                $email = $_POST["email"];
                $amount = $_POST["amount"];
                $contactNumber = $_POST["contact_number"];

                // Process the donation data here, e.g., store it in a database
                 // Connect to the database
                 $server = "localhost";
                 $username = "root";
                 $password = "";
                 $database = "loan_funded";
                 
                 $conn = mysqli_connect($server, $username, $password, $database);
                 if (!$conn) {
                     die("Error: " . mysqli_connect_error());
                 }
                 

                // Display a thank you message to the user
                echo '<p>Thank you for your donation, ' . $name . '!</p>';
            }
            ?>
