<?php
    if(isset($_POST['sbtbtn'])){
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $ques = $_POST['question'];

        $connection = mysqli_connect("localhost","root","","miniproject");
        $query = "INSERT into contact (fname,email,question) values ('$name','$email','$ques')";

        $result = mysqli_query($connection, $query);
        if(isset($result)){
            echo '<div class="alert alert-success" role="alert" style="width: 50%; text-align: center;""><p>Thank you submitting a query, our expert will contact you shortly!</p></div>';
            echo('<a href="../index.html#contact-us"><button class="btn btn-outline-secondary">Click to go back</button></a>');
        }
        else{
            echo '<div class="alert alert-danger" role="alert"style="width: 50%; text-align: center;""><p>Sorry the request didn\'t go through, please try again later</p></div>'; 
        }
    }
    else{
        header("Location:../contactUs.html");
    }                        
?>