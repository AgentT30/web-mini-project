<?php
    session_start();

    if(isset($_POST['login_submit'])){
        $u_name = $_POST['loginemail'];
        $p_word = $_POST['loginpass'];

        // echo($username);        
        // echo($password);

        $connection = mysqli_connect("localhost","root","","miniproject");        

        $query = "select * from login where username= '".$u_name."' and password='".$p_word."'";
        $qryobj = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($qryobj)){
            // echo($row['username']);
            // echo($row['password']);

            echo '<script>alert("Login Successful")</script>'; 
            echo('<a href="../index.html"><button class="btn btn-outline-secondary">Click to go back</button></a>');
        }
    }
?>