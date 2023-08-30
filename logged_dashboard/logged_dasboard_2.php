<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="shanto.css">
</head>
<body>
    <div id="header">


        <div id="header_logo">

            <div id="logo">
                <img src="images/dashboard_logo.png" alt="" height="80px">
                
            </div>
    
            <label>Loan and Fund <br> Raising</label>

        </div>
        <div id="out">
            <a href="../login/logout.php" ><button class="logout" >Logout</button></a>
        </div>

        <div id="header_btn_container">
            <ul>
                <li>
                    <a href="../profile/profile.php"><button id="profile"></button></a>
                </li>
                
            </ul>

            
        </div>
        
    </div>

    <nav>
        <ul>
            <a href="../logged_dashboard/logged_dasboard.php"><li>Home</li></a>
            <a href="#"><li>News</li></a>
            <a href="../loan/loanReq.php"><li>Request Loan</li></a>
            <a href="../camp/running_camp.php"><li>Running campaign</li></a>
            <a href="#"><li>About</li></a>
            <a href="../contact/contact.html"><li>Contact</li></a>

        </ul>
    </nav>

    <br>

    <div class="main">
        <div class="left">
            <h3>Requested Loan</h3>
            <hr>
            <ul id="loanList">
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                
                

            </ul>

        </div>
        <div class="center">
            <h3>Running Campaign</h3>
            <hr>
            <ul id="campaignList">
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                <li>Name: John, Amount: $100</li>
                
                
                
            </ul>

        </div>
        <div class="right">
            <div class="button-container">
            <a href="../loan/loanReq.php"><button class="loan">Apply for Loan</button><br></a>
            <a href="campaign_form/campaign_form.html"><button class="camp">Create Campaign</button></a>
            </div>
        </div>
    </div>
    <script>
    // Fetch loan data using AJAX
    fetch('get_loan_data.php')
        .then(response => response.json())
        .then(data => {
            const loanListElement = document.getElementById('loanList');
            loanListElement.innerHTML = '';

            data.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = item;
                loanListElement.appendChild(listItem);
            });
        })
        .catch(error => console.error('Error fetching loan data:', error));
</script>

</body>
</html>