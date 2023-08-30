<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin_users.css">
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
            <a href="admin_users.php"><button class="btn" id="support">Users</button></a>

        </div>
        <!-- table container -->
        <div id="table_container1">
            <label for="">User Activity</label>
            <div class="table_wrap">
                <table class="table">
                    <thead class="thead-dark">
                    
                   <tr>
                    <th scope="col">#</th>
                     <th scope="col">Creator_id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Action</th> <!-- New header cell for actions -->
                    </tr>
                    </thead>

                <tbody>
                    <tr>
                    <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td></td>
                        <td></td>
                                <td>
                                    <button class="btn btn-primary">Add</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                </tbody>

                   

                </table>
            </div> <!-- table wrap -->
            
        </div>
        
    </div>
        
</body>
</html>