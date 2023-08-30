<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $user_id = $_POST["user_id"];
     $name = $_POST["name"];
     $title = $_POST["title"];
     $description = $_POST["description"];
     $amount = $_POST["amount"];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
     $requested_no = $_POST["requested_on"];
     $date =$_POST["date"];
     $duration = $_POST["duration"];
     $status = $_POST["status"];
//database connection
    $server ="localhost";
    $username ="root";
    $password ="";
    $database ="loan_funded";
    
    $conn=mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die("Error".mysqli_connect_error());
    }
    
    

    // Insert data into the database
    $sql = "INSERT INTO `loan_requests` (`user_id`, `name`, `title`, `description`, `amount`, `email`, `phone`, `requested_on`, `date`, `duration`, `status`) 
    VALUES ('$user_id', '$name', '$title', '$description', '$amount', '$email', '$phone', '$requested_on', '$date', '$duration', '$status');";
    

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
