<?php
include("../db.php");

session_start();
$fullname = $_SESSION['firstname'] . " " . $_SESSION['lastname'];
$email = $_SESSION['email'];
$creatorId = $_SESSION['user_id'];

// ---------------------getting serial count

$sql = "SELECT COUNT(*) FROM campaign_submissions;";
$result = $conn->query($sql);
$serial_no = $result->fetch_column()+1;


if (isset($_POST['Submit'])) {
    $title = $_POST["title"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $phone = $_POST["phone"];

    // Check if the 'picture' file input was submitted
    if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "uploads/"; // Directory to store uploaded images
        $imageName = basename($_FILES["picture"]["name"]);
        $targetFilePath = $targetDir . $imageName;
        $imageFileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain image file formats
        $allowedFormats = array("jpg", "jpeg", "png", "gif");
        if (in_array(strtolower($imageFileType), $allowedFormats)) {
            if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFilePath)) {
                // Insert data into the table
                // Assuming you have a logged-in user's ID stored in $_SESSION['id']

                
                
                $sql = "INSERT INTO `campaign_submissions`(`serial_no`, `creator_id`, `title`, `date`, `description`, `fullname`, `email`, `phone`, `image`, `status`)
                VALUES ( '$serial_no','$creatorId','$title', '$date', '$description', '$fullname', '$email', '$phone', '$imageName','Pending' )";

                if ($conn->query($sql) === TRUE) {
                    echo '<script>alert("Thank you for submitting the form!");</script>';
                    header("Location: ../logged_dashboard/logged_dasboard.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Error uploading image.";
            }
        } else {
            echo "Invalid image format. Allowed formats: jpg, jpeg, png, gif.";
        }
    } else {
        echo "Please select a valid image to upload.";
    }
}

$conn->close(); // Close the database connection after all operations
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Campaign</title>
    <link rel="stylesheet" href="campaign_form.css">
</head>
<body>
    <form action=""  method="post" enctype="multipart/form-data">
        <h1>Campaign Request Form </h1>
        <!-- -------------------------- -->
            
        <div id="loan_info">
            <div id="left">
                <div class="row">
                    <label>Title: </label>
                    <br>
                    <input  type="text" name="title" required>
                </div>
                <div class="row">
                    <label>Date</label>
                    <br>
                    <input  type="date" name="date" required>
                </div>
                <div class="row">
                    <label>Upload an image:</label>
                    <br>
                    <input type="file" name="picture" required>
                </div>
            </div>


            <div id="right">
                <div class="row">
                    <label>Description: </label>
                    <br>
                    <textarea id="description"  name="description" id="" cols="30" rows="10"></textarea>
                </div>
                
            </div>
        </div>



        <!-- --------------------------- -->
        <h1>User info</h1>


        <!-- --------------------------- -->
        <div id="user_info">
            <div id="left">
                <div class="row">
                    <label>Full Name: </label>
                    <br>
                    <?php 
                        echo '<input  type="text" name="fullname" value="' .$fullname. '" " required readonly style="cursor: not-allowed;">';
                    ?>
                </div>
                <div class="row">
                    <label>Student ID: </label>
                    <br>
                    <?php
                        echo '<input  type="text" name="id" value="' .$creatorId.' " " required readonly style="cursor: not-allowed;">'
                    ?>
            </div>
            <div id="right">
                <div class="row">
                    <label>Email: </label>
                    <br>
                    <?php
                        echo '<input  type="email" name="email" value=" '.$email.' " " required readonly style="cursor: not-allowed;">'
                    ?>
                </div>
                <div class="row">
                    <label>Phone: </label>
                    <br>
                    <input  type="text" name="phone" required>
                </div>
            </div>
        </div>


        <!-- --------------------------- -->
        <input type="submit" name="Submit" id="btn" value="Process" >

    </form>
</body>

</html>