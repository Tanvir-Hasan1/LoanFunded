<?php
    include 'db.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div id="header">


        <div id="header_logo">

            <div id="logo">
                <img src="Dashboard/images/dashboard_logo.png" alt="" height="80px">
                
            </div>
    
            <label>Loan and Fund <br> Raising</label>

        </div>
        

        <div id="header_btn_container">
            <ul>
                <li>
                    <a href="login/login.php"><button id="btn_login">Login</button></a>
                </li>
                <li>
                    <a href="registration/registration.php"><button id="btn_Signup">Signup</button></a>
                </li>
                
            </ul>
        </div>
        
        
    </div>

    <nav>
        <ul>
            <a href="index.php"><li>News</li></a>
            <!-- <a href="#"><li>News</li></a>
            <a href="loan/loanReq.html"><li>Request Loan</li></a>
            <a href="#"><li>Donation</li></a> -->
            <a href="#"><li>About</li></a>
            <a href="#"><li>Contact</li></a>

        </ul>
    </nav>

    <div id="body">
        <h2 id="title">Running campaigns</h2>
        <div id="campaign">
            <ol id="grid_container">

                <li class="items" onclick="loginalart()">

                    <div class="img"><img src="images/donation2.jpg"></div>
                    <Label><b>Title:</b> Donation for poor chields</Label>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!
                    
                    <div id="btn_donate"><button>Donate</button></div>
                </li>

                <li class="items" onclick="loginalart()">
                    <div class="img"><img src="images/donation1.jpg"></div>
                    <Label><b>Title:</b> Donation for poor chields</Label>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!
                    
                    <div id="btn_donate"><button>Donate</button></div>
                </li>

                <li class="items" onclick="loginalart()">

                    <div class="img"><img src="images/donation3.jpg"></div>
                    <Label><b>Title:</b> Donation for poor chields</Label>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!
                    
                    <div id="btn_donate"><button>Donate</button></div>
                </li>

                <li class="items" onclick="loginalart()">

                    <div class="img"><img src="images/doantion4.jpg"></div>
                    <Label><b>Title:</b> Donation for poor chields</Label>
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet eveniet dolorum, assumenda temporibus pariatur, recusandae fugit sapiente officiis eum reiciendis placeat, modi vitae commodi corrupti expedita vero quis architecto!
                    
                    <div id="btn_donate"><button>Donate</button></div>
                </li>
            </ol>
        </div>
    </div>

</body>
<script>
    function loginalart(){
        alert("Login first");
    }
</script>
</html>