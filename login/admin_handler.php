<?php
    include '../db.php';
        $admin_id = $_POST['admin_id'];
        $password = $_POST['password'];

    if(isset($_POST['login'])){

        $sql = "Select * from admin where admin_id = '$admin_id' AND password='$password'";
	    $result = mysqli_query($conn, $sql);
	    $data = $result->fetch_assoc() ;
	    $num = mysqli_num_rows($result);
        
        if($num == 1){
            echo "inside if";
            $login = true;
            session_start();

		  $_SESSION['admin_id'] = $data['admin_id'] ;  
            $_SESSION['email'] = $data['email'] ;
            $_SESSION['password'] = $data['password'] ;
		    
            
            header("location: ../admin/admin_loanreq.php");

        }else{
            echo '<script>alert("Incorrect email or password"); window.location.assign(""); </script>';
            
        }
        
    }
//     elseif(isset($_POST['sign_up'])){
        
        
//         header("location: ../registration/registration.php");

//         // Check if student is already registered
//         $sql = "SELECT * FROM admin WHERE email = '$email' ";
//         $result = mysqli_query($conn,$sql);

//      //    if(mysqli_num_rows($result)>0){
//      //        // Student is already registered, display error message
// 	// 		echo '<script>alert("Student with this email is already registered!");</script>';
//      //    }else{
//      //        $sql = "INSERT INTO users (firstname, lastname, id, Email, password) VALUES ('$fistname', '$lastname', ' $studentid','$email', '$password');";
//      //        $result = mysqli_query($conn,$sql);
//      //        if($result){
//      //            header("location: ../login/login.php");
                
//      //        }

//      //    }

//     }
    

?>