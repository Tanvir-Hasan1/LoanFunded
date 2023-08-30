 <?php
include("../db.php");

session_start();
    $fullname = $_SESSION['firstname']." ".$_SESSION['lastname'];
    $email = $_SESSION['Email'];
    $id = $_SESSION['id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    
    <div class="main">
        <h1 style="text-align: center; margin-top: 15px; font-size: 45px; color:rgb(3, 145, 3);">Profile</h1>
        <img class="profile-image" src="./Images/profile-image.jpg" alt="Profile Image">
        <div class="div_color">
            <form action="update_profile.php" method="post">
                <div>
                    <label style="margin-left: 45px; margin-top:0.02px">Name</label>
                    <br>
                    <!-- echo '"<input type="text" class="txn" name="firstname" value="" readonly>"'; -->
                    <?php
                    echo '<input  type="text" class = "txn" name="firstname" value="' .$fullname. '" readonly > ';
                    ?>
                    </div>
                <div>
                    <label style="margin-left: 45px; margin-top:0.02px">Email</label>
                    <br>
                    <?php
                    echo '<input  type="text" class = "txn" name="email" value="' .$email. '" readonly > ';
                    ?>
                </div>
                <div>
                    <label style="margin-left: 45px; margin-top:0.02px">Student ID</label>
                    <br>
                    <?php
                    echo '<input  type="text" class = "txn" name="firstname" value="' .$id. '" readonly > ';
                    ?>
                </div>
                
        </form> 

        </div>
        <div class="status-bar">
        <div class="status-box" id="happyClients">
                <p>500</p>
                <p>Happy Clients</p>
        </div>
        <div class="status-box" id="projectsCompleted">
                <p>150</p>
                <p>Projects Completed</p>
        </div>
        <div class="status-box" id="photoCapture">
                <p>850</p>
                <p>Photo Capture</p>
        </div>
        <div class="status-box" id="telephoneTalk">
                <p>190</p>
                <p>Telephonic Talk</p>
        </div>
    </div>
</div>
    `
    <script src="Profile.js"></script>


</body>


</html>
<?php
// Close the database connection after you're done using it
mysqli_close($conn);
?>