
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="shanto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div id="header">


        <div id="header_logo">

            <div id="logo">
                <img src="../images/dashboard_logo.png" alt="" height="80px">
                
            </div>
    
            <label>Loan and Fund <br> Raising</label>

        </div>
        <div id="out">
            <a href="../login/logout.php" ><button class="logout" >Logout</button></a>
        </div>

        <div id="header_btn_container">
            <ul>
                <li>
                    <a href="../profile/profilesiam.php"><button id="profile" style="background-image: url(../images/profile-removebg-preview.png);"></button></a>
                </li>
                
            </ul>

            
        </div>
        
        
        
    </div>

    <nav>
        <ul>
        <a href="../logged_dashboard/logged_dasboard.php"><li>Home</li></a>
            
            <a href="../loan/loanReq.php"><li>Request Loan</li></a>
            <a href="../camp/running_camp.php"><li>Running campaign</li></a>
            <a href="../loan/loanCalculetor_updated.html"><li>Pay Loan</li></a>
            <a href="../contact/contact.html"><li>Contact</li></a>

        </ul>
    </nav>

    <br>

    <div class="main">
        <div class="left">
            <h3>Requested Loan</h3>
            <hr>
            <ul id="loanList">
            <?php
    // Create a connection to the database
    $conn = new PDO("mysql:host=localhost;dbname=loan_funded", "root", "");

    // Create a SELECT statement
    $sql = "SELECT  * FROM loan_requests WHERE status = 'Accepted'";

    // Execute the SELECT statement
    $result = $conn->query($sql);

    // Create an array to store the results
    $loans = [];

    // Loop through the results and add them to the array
    while ($row = $result->fetch()) {
      $loans[] = [

        "name"=>$row["name"],
        "amount" => $row["amount"],
        "user_id" => $row["user_id"],
        "title" => $row["title"],
      ];
    }

    // Close the connection to the database
    $conn = null;

    // Create a list to display the loans
    foreach ($loans as $loan) {
        
        echo "<a class=\"loan-link\" href=\"../loan/sendloan.html?id={$loan['user_id']}\">

            <li>
                <strong>Name:</strong> {$loan["name"]}
                <br>
                <strong>Amount:</strong> {$loan["amount"]}
                <br>
                <strong>ID:</strong> {$loan["user_id"]}
                <br>
                <strong>Title:</strong> {$loan["title"]}
            </li>
        </a>";
    }
      
    
  ?>
            
            
</ul>
                
            

        </div>
        <div class="center">
            <h3>Running Campaign</h3>
            <hr>
            <ul id="campaignList">
            <?php
    // Create a MySQLi connection
$server = "localhost";
$username = "root";
$password = "";
$database = "loan_funded";

$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a SELECT statement
$sql = 'SELECT * FROM `campaign_submissions` WHERE status = "Accepted" ';

// Execute the SELECT statement
$result = $conn->query($sql);

// Create an array to store the results
$c_s = [];

// Loop through the results and add them to the array
while ($row = $result->fetch_assoc()) {
    $c_s[] = [
        "fullname" => $row["fullname"],
        "creator_id" => $row["creator_id"],
        "title" => $row["title"],
    ];
}

// Close the connection to the database
$conn->close();

foreach ($c_s as $campaign) {
    echo "<a href=\"../donation/donation.php?id={$campaign['creator_id']}\">
            <li>
                <strong>Name:</strong> {$campaign["fullname"]}
                <br>
                <strong>ID:</strong> {$campaign["creator_id"]}
                <br>
                <strong>Title:</strong> {$campaign["title"]}
            </li>
        </a>";
}

    
  ?>
                
                
                
            </ul>

        </div>
        <div class="right">
            <div class="button-container">
            <a href="../loan/loanReq.php"><button class="loan">Apply for Loan</button><br></a>
            <a href="../Campaign_form/campaign_form.php"><button class="camp">Create Campaign</button></a>
            </div>
        </div>
    </div>

    <br>

    <!-- <footer>
    <h1>Loan And Fund Raising</h1><br>
    <p>United City, Madani Avanue, Badda, Dhaka 1212, Bangladesh.</p>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="http://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="http://www.google.com" target="_blank"><i class="fa-brands fa-google"></i></a>
            <a href="http://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footernav">
            <h2>Company</h2>
            <ul>
                <li><a href="">About</a></li>
                <li><button class="button"><a href="">Contact Us</a></button></li>
                <li><a href="">FAQs</a></li>
                <li><a href="">Teams</a></li>
            </ul>
            
        </div>
    </div>
    <div class="footerbuttom">
        <p>Copyright &copy;2023; Designed by <span class="designer">Nabany</span></p>
    </div>
   </footer> -->
   

</body>
</html>