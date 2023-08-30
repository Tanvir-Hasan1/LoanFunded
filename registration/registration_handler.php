<?php

    include '../db.php';



    if(isset($_POST['sign_up'])){
        $fistname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $studentid = $_POST['studentid'];
        $password = $_POST['password'];
        
        

        // Check if student is already registered
        $sql = "SELECT * FROM users WHERE email = '$email' ";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            // Student is already registered, display error message
			echo '<script>alert("Student with this email is already registered!");</script>';
        }else{
            $sql = "INSERT INTO users (firstname, lastname, user_id, email, password) VALUES ('$fistname', '$lastname', ' $studentid','$email', '$password');";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("location: ../login/login.php");
                
            }

        }

    }
    

    

?>  