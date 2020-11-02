<?php
    session_start();

    if(isset($_POST['signup_submit'])){
        $name = $_POST['name'];
        $u_name = $_POST['loginemail'];
        $p_word = $_POST['loginpass'];
        $p_word_confirm = $_POST['loginpass_confirm'];
        $p_number = $_POST['phoneno'];

        // echo($u_name);        
        // echo($p_word);
        if((strcmp($p_word,$p_word_confirm)) == 0){
            $connection = mysqli_connect("localhost","root","","miniproject");        

            $query1 = "insert into user_details (name,email,phone,password) values ('$name','.$u_name.','.$p_number.','$p_word')";
            $query2 = "insert into login (username,password) values ('$name','$p_word')";

            $result = mysqli_query($connection, $query1);
            $result = mysqli_query($connection, $query2);
            
            echo '<a href="../pages/login.html"><button class="btn btn-outline-success">Click to go back</button></a>';
        }
        else{
            echo '<script>alert("Passwords do not match!")</script>'; 
        }
    }
?>