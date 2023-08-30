<?php
    include '../db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Account Type
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="login.php">User</a></li>
    <li><a class="dropdown-item" href="admin.php">Admin</a></li>
  </ul>
</div>
    <form action="../login/admin_handler.php" method="post">
        <h1>Admin_Login</h1>
        
        <div class="row">
            <label> Admin id</label>
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