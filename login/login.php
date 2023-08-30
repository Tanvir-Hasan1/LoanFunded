<?php
    include '../db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="../login/login_handler.php" method="post">
        <h1>Login</h1>

        <div class="row">
            <label>student id</label>
             <br>
            <input type="text" name="id" required>
        </div>

        <div class="row">
            <label >Password</label> 
            <br>
            <input type="password" id="password" name="password" required> 
            <br>
                  
        </div>


        <div class="row">
            <input type="submit" value="Login" id="btn" name="login">
        </div>
</body>
<script src="login.js"></script>
</html>