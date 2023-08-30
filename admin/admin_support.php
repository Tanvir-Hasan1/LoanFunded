<?php
    include '../db.php';


// Fetch loan data from the database
$sql = "SELECT * FROM contacts ORDER BY status='pending' DESC";
$results = $conn->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminSupport.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div id="header">
        <label for="">Admin panel</label>
    </div>
    <div id="main">
        <!-- side menu bar buttons -->
        <div id="menu_btn">
            <a href="admin_loanreq.php"><button class="btn" id="loan_req">Loan request</button></a>
            <a href="admin_campaign.php"><button class="btn" id="campaign">Campaigns</button></a>
            <a href="admin_support.php"><button class="btn" id="support">Supports</button></a>

        </div>
        <!-- table container -->
        <div id="table_container">
            <label for="">Supports</label>
            <div class="table_wrap">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Serial_no</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Submission_date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>

                    <?php             
        while($row=$results->fetch_assoc()):?>
        <tr>
          <td><?php echo $row['serial_no']?></td>
          <td><?php echo $row['user_id']?></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['subject']?></td>
          <td>
            <textarea name="" id="" cols="30" rows="4" value="hello" readonly><?php echo $row['message']?></textarea></td>  
          <td><?php echo $row['submission_date']?></td>
          <td><?php echo $row['status']?></td>
          <td><a href="s_view_api.php?serial_no=<?php echo $row['serial_no'];?>" class="btn btn-primary">View</a></td>
        </tr>
        <?php endwhile; ?>

                </table>
            </div> <!-- table wrap -->
            
        </div>
    </div>
        
</body>
</html>