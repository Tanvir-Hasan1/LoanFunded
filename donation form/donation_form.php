<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate your amount</title>
    <link rel="stylesheet" href="donation_form.css">
</head>
<body>
    <div class="main">
        <div class="donation">
            <h1>Donate</h1>
          
            <form action="donation_process.php" id="donate" method="post">

                <label for="student_id">Student ID</label><br>
                <input type="text" name="student_id" class="txn" required><br>

                <label for="name">Name</label><br>
                <input type="text" name="name" class="txn" required><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" class="txn" required><br>

                <label for="amount">Amount</label><br>
                <input type="text" name="amount" class="txn" required><br>

                <label for="contact_number">Contact Number</label><br>
                <input type="text" name="contact_number" class="txn" required><br>
                <br>
                <input type="submit" value="Donate" id="btn">
            </form>
        </div>
    </div>
</body>
<script src="donate.js"></script>
</html>
