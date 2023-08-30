<?php
    include "../db.php";
    session_start();
    $fullname = $_SESSION['firstname']." ".$_SESSION['lastname'];
    $email = $_SESSION['email'];
    $user_id = $_SESSION['user_id'];

    if(isset($_POST['Submit']))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $amount = $_POST['amount'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $requested_on = date('Y-m-d');
        $currentDate = date('Y-m-d');
        $duration = $_POST['duration'];
        

        $sql = "INSERT INTO `loan_requests`(`user_id`, `name`, `title`, `description`, `amount`, `email`, `phone`, `requested_on`, `date`, `duration`, `status`)
         VALUES('$user_id', '$fullname', '$title', '$description', '$amount', '$email', '$phone','$requested_on', '$currentDate' ,'$duration','Pending')";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<script>alert("Data inserted successfully!");</script>';
            // header("Location: ../logged_dashboard/logged_dashboard.php");
        }
        else{
            echo '<script>alert("sorry,  not inserted !!!");</script>';
        }

    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan req</title>
    <link rel="stylesheet" href="loanReq.css">
</head>
<body>
    <form method="post">
        <h1>Loan Request Form</h1>
        <!-- -------------------------- -->
            
        <div id="loan_info">
            <div id="left">
                <div class="row">
                    <label>Title: </label>
                    <br>
                    <input  type="text" name="title" required>
                </div>
                <div class="row">
                    <label>Amount: </label>
                    <br>
                    <input  type="number" name="amount" required>
                </div>
                <div class="row">
                    <label>Duration:</label>
                    <br>
                    <input  type="number" name="duration" placeholder="in month" required>
                </div>
            </div>


            <div id="right">
                <div class="row">
                    <label>Description: </label>
                    <br>
                    <textarea id="description"  name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>



        <!-- --------------------------- -->
        <h1>User info</h1>


        <!-- --------------------------- -->
        <div id="user_info">
            <div id="left">
                <div class="row">
                    <label>Full Name: </label>
                    <br>
                    <?php 
                        echo '<input  type="text" name="fullname" value="' .$fullname. '" required readonly style="cursor: not-allowed;">';
                    ?>
                </div>
                <div class="row">
                    <label>Student ID: </label>
                    <br>
                    <?php
                        echo '<input  type="text" name="id" value="' .$user_id.' " required readonly style="cursor: not-allowed;">'
                    ?>
                </div>
            </div>
            <div id="right">
                <div class="row">
                    <label>Email: </label>
                    <br>
                    <?php
                        echo '<input  type="email" name="email" value=" '.$email.' " required readonly style="cursor: not-allowed;">'
                    ?>
                </div>
                <div class="row">
                    <label>Phone: </label>
                    <br>
                    <input  type="text" name="phone" maxlength="11" pattern="\d{11}">
                </div>
            </div>
        </div>


        <!-- --------------------------- -->
        <input type="submit" id="btn" value="Submit" name="Submit">

    </form>
</body>
<script src="loanReq.js"></script>
</html>