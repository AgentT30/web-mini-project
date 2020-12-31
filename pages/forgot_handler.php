<?php
    // error_reporting(0);
    if(isset($_POST['submit-btn'])){
        $email = $_POST['changepassmail'];
        
        $connection = mysqli_connect("localhost","root","","miniproject");
        $query = "SELECT * from login where username ='$email'"; 

        $result = mysqli_query($connection, $query);

        $row = mysqli_fetch_assoc($result);
        $subject='Change password';
        $message='http://localhost/miniproject/pages/change_pass.php?username='.$email;
        $headers='From:nonreply@nerdsfornerds.com';
        if($row['username'] != NULL){
            if(mail($email,$subject,$message,$headers)){
                echo "Password change link has been emailed to you!";
            }
            else
                echo "Email not sent!";
        }            
        else{
            echo "Email not found!";
        }
    }
                    
?>