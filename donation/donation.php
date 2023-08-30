<?php
include("../db.php");

    $serial_no = $_GET['serial_no'];


    // Replace this with your actual code to retrieve campaign details from the database
    // Example: Assuming you have a database connection and a campaigns table

    // Query to fetch campaign details based on campaign_id
    $query = "SELECT * FROM campaign_submissions WHERE serial_no = $serial_no";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $campaign = mysqli_fetch_assoc($result);
        
        // Check if the logged-in user's ID matches the creator's ID
        session_start(); // Start the session if not already started
        $loggedInUserId = $_SESSION['user_id']; // Assuming you have this variable
        $creatorId = $campaign['creator_id'];
        $image = $campaign['image'];
        $title = $campaign['title'];
        $discription = $campaign['description'];
        // image path
        $path = "../Campaign_form/uploads/";


        
        // Check if the logged-in user is the creator
        $canDonate = ($loggedInUserId != $creatorId);
    } else {
        echo "Campaign not found.";
    }

    mysqli_close($conn); // Close the database connection

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your HTML head content here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donation_update.css">
    <title>Campaign Details</title>
</head>
<body>
<div id="header">


<div id="header_logo">

    <div id="logo">
        <img src="dashboard_logo.png" alt="" height="80px">
        
    </div>

    <label>Loan and Fund <br> Raising</label>

</div>

<div id="out">
    <a href="../login/logout.php" ><button class="logout" >Logout</button></a>
</div>
<div id="header_btn_container">
    <ul>
        <li>
            <a href="#"><button id="profile"></button></a>
        </li>
        
    </ul>
</div>


</div>

<nav>
<ul>
    <a href="../dashboard/logged_dasboard.php"><li>Home</li></a>
    <a href="#"><li>News</li></a>
    <a href="../LoanReq/loanReq.html"><li>Request Loan</li></a>
    <a href="/camp/campaign.php"><li>Running campaign</li></a>
    <a href="#"><li>About</li></a>
    <a href="#"><li>Contact</li></a>

</ul>
</nav>
    <h1 align="center">Campaign Details</h1>
    <div id="box">
        <div class="top">
            <div class="img">
                <img src="<?php echo $path.$image; ?>" alt="Campaign Image" width="250px" height="220px">
            </div>
        </div>
        <div class="foot">
            <h3><?php echo $title; ?></h3>
            <table>
                <tr><td class="des"><?php echo $discription; ?></td></tr>
                <?php if ($canDonate) { ?>
                <tr><td><a href="../donation form/donation_form.php"><button class="btn-donate">Donate</button></a></td></tr>
                <?php } else { ?>
                <tr><td>Cannot donate to your own campaign.</td></tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>
