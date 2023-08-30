<?php
include('../db.php');
$creator_id=$_GET['creator_id'];
$title = $_GET['title'];
$sql="UPDATE campaign_submissions
SET status = 'Rejected'
WHERE creator_id = $creator_id AND title = '$title';";
mysqli_query($conn, $sql);
header("location: admin_campaign.php");




?>