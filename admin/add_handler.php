<!-- <?php

    include '../db.php';



    if(isset($_POST['insert'])){

     $user_id = $_GET["user_id"];
     $name = $_GET["name"];
     $title = $_GET["title"];
     $description = $_GET["description"];
     $amount = $_GET["amount"];
     $email = $_GET["email"];
     $phone = $_GET["phone"];
     $requested_on = $_GET["requested_on"];
     $date = $_GET["date"];
     $duration = $_GET["duration"];
     $status = $_GET["status"];
        

            $sql = "UPDATE loan_requests
            SET status = 'Rejected'
            WHERE user_id = $user_id AND title = '$title';";
            $result = mysqli_query($conn,$sql);
            if($result){
               header("location:  LR_add.php");
                
            }

    }

?>  


               