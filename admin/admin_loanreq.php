<?php
    include '../db.php';


// Fetch loan data from the database
$sql = "SELECT * FROM loan_requests";
$results = $conn->query($sql);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminLoan.css">
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
            <label for="">Loan request</label>
            <div class="table_wrap">
                <table class="table">
                <thead class="thead-dark">
                    
                    <tr>
                     <th scope="col">User ID</th>
                      <th scope="col">Name</th>
                     <th scope="col">Title</th>
                     <th scope="col">Description</th>
                     <th scope="col">Amount</th>
                     <th scope="col">Email</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Requested On</th>
                     <th scope="col">Duration</th>
                     <th scope="col">Status</th>
                     <th scope="col">Add</th> 
                     <th scope="col">Reject</th>  <!-- New header cell for actions -->
                     </tr>
                     </thead>
        <?php             
        while($row=$results->fetch_assoc()):?>
        <tr>
          <td><?php echo $row['user_id']?></td>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['title']?></td>
          <td><?php echo $row['description']?></td>
          <td><?php echo $row['amount']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['phone']?></td>
          <td><?php echo $row['requested_on']?></td>
          <td><?php echo $row['duration']?></td>
          <td><?php echo $row['status']?></td>
          <td><a href="LR_add.php?user_id=<?php echo $row['user_id'];?>&& title=<?php echo $row['title'];?>" class="btn btn-primary">Add</a></td>
          <td><a href="LR_delete.php?user_id=<?php echo $row['user_id'];?>&& title=<?php echo $row['title'];?>" class="btn btn-danger">Reject</a></td>
        </tr>
        <?php endwhile; ?>
                </table>
            </div> <!-- table wrap -->
            
        </div>
    </div>
        
</body>
</html>