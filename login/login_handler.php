<?php
    include '../db.php';

    if(isset($_POST['login'])){

        $id = $_POST['id'];
        $password = $_POST['password'];


        $sql = "Select * from users where user_id = $id AND password='$password'";
	    $result = mysqli_query($conn, $sql);
	    $data = $result->fetch_assoc() ;
	    $num = mysqli_num_rows($result);
        
        if($num == 1){
            echo "inside if";
            $login = true;
            session_start();
		    $_SESSION['firstname'] = $data['firstname'] ;
		    $_SESSION['lastname'] = $data['lastname'] ;
		    $_SESSION['email'] = $data['email'] ;
		    $_SESSION['user_id'] = $data['user_id'] ;
            
            
            header("location: ../logged_dashboard/logged_dasboard.php");

        }else{
            echo '<script>alert("Incorrect email or password"); window.location.assign("../login/login.php"); </script>';
            
        }
        
    }
    elseif(isset($_POST['sign_up'])){
        
        
        header("location: ../registration/registration.php");

        // Check if student is already registered
        $sql = "SELECT * FROM users WHERE email = '$email' ";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            // Student is already registered, display error message
			echo '<script>alert("Student with this email is already registered!");</script>';
        }else{
            $sql = "INSERT INTO users (firstname, lastname, user_id, email, password) VALUES ('$firstname', '$lastname', ' $studentid','$email', '$password');";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("location: ../login/login.php");
                
            }

        }

    }
    

?>