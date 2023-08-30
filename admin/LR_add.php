<?php
include('../db.php');
$user_id=$_GET['user_id'];
$title = $_GET['title'];
$sql="UPDATE loan_requests
SET status = 'Accepted'
WHERE user_id = $user_id AND title = '$title';";
mysqli_query($conn, $sql);
header("location: admin_loanreq.php");




?>