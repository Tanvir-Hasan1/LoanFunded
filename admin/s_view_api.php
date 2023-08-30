<?php
include('../db.php');
$serial_no=$_GET['serial_no'];
$sql="UPDATE contacts SET status = 'Viewed'
WHERE serial_no = $serial_no";
mysqli_query($conn, $sql);
header("location: admin_support.php");




?>