<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0  maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">  
    <link rel="icon" type="image/png" href="../images/favicon.png"/>  
    <link rel="stylesheet" href="../stlyes/base.css">

	<style>
        .heading-title{
            text-align: center;
        }

	</style>
    
    <title>User Profile</title>
</head>
<body style="font-weight: 900; background: linear-gradient(rgba(126, 187, 202, 0.7), rgba(99, 208, 216, 0.7)),
        url('https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')
            center/cover fixed no-repeat; min-height: 100vh;">    
    <div id="header">        
        <nav class="top-nav">
            <a href="../index.php"><h1 class="main-heading">NerdsforNerds</h1></a>
            <div class="nav-items">
                <ul class="nav-links" style="text-decoration: none; list-style-type: none">
                  <li style="text-decoration: none; list-style-type: none"><a href="../index.php">Home</a></li>
                  <li style="text-decoration: none; list-style-type: none"><a href="../index.php#about-us">About Us</a></li>
                  <li style="text-decoration: none; list-style-type: none"><a href="../index.php#contact-us">Contact Us</a></li>                  
                </ul>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>                  
    </div>

    <?php
        error_reporting(0);
        if(isset($_POST['login_submit'])){
            $user = $_POST['loginemail'];
            $password = $_POST['loginpass'];
            // echo $user;
            $connection = mysqli_connect("localhost","root","","miniproject");       
            $query = "select * from login where username= '".$user."' and password='".$password."'";
            
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            if($row['username'] != NULL){
                echo "<script>alert('Login Successful')</script>";
            }
            else{                
                echo "<script>if(confirm('Invalid Credentials!')){
                    window.location.href = 'login.php';
                }                    
                </script>";                
            }
        }
    ?>
    <div class="heading-title">
        <h1>User Profile</h1>
        <h2>Welcome <?php $query = "select * from user_details where email= '".$user."'"; 
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($result);
                echo $row['name']; ?>!</h2>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col col-lg-5 col-md-4 col-sm-4">
                <img src="https://st.depositphotos.com/2101611/3925/v/600/depositphotos_39258143-stock-illustration-businessman-avatar-profile-picture.jpg" alt="" style="width: 300px; height: 300px;">
            </div>
            <div class="col col-lg-5 col-md-4 col-sm-4" style="display:flex; justify-content: space-evenly; flex-direction: column; ">
                <ul style="font-size: 1.5rem">
                    
                </ul>
            </div>            
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="row" style="display:flex; justify-content: space-around; margin-top: 30px;">
            <a href="add_articles.php?username=<?php echo $row['name'];?>">
                <button class="btn btn-dark" style="height: 150px; width: 200px;">
                    Add Article
                </button>
            </a>
            <div class="modal-contariner">
            
                <button type="button" class="btn btn-dark" style="height: 150px; width: 200px;" data-toggle="modal" data-target="#change_pass">
                Change Password
                </button>

                
                <div class="modal fade" id="change_pass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="">
                    <div class="modal-body">              
                            <div class="form-group">
                                <label for="name">Confirm Email:</label>
                                <input type="email" name="email_confirm" class="form-control" id="name">                                
                            </div>          
                            <div class="form-group">
                                <label for="name">Old Password:</label>
                                <input type="password" name="old_pass" class="form-control" id="name">                                
                            </div>
                            <div class="form-group">
                                <label for="name">New Password:</label>
                                <input type="password" name="new_pass" class="form-control" id="name">                                
                            </div>
                            <div class="form-group">
                                <label for="name">Confirm New Password:</label>
                                <input type="password" name="new_pass_confirm" class="form-control" id="name">                                
                            </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="change_pass_btn">Change Password</button>
                    </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
            <?php
                $connection = mysqli_connect("localhost","root","","miniproject");  
                if(isset($_POST['change_pass_btn'])){
                    $old_pass = $_POST['old_pass'];
                    $new_pass = $_POST['new_pass'];
                    $new_pass_confirm = $_POST['new_pass_confirm'];
                    $user_name = $_POST['email_confirm'];

                    $query = "select * from login where username= '".$user_name."'";
                    $result = mysqli_query($connection, $query);
                    $row = mysqli_fetch_assoc($result);

                    if($row['password'] == $old_pass){
                        if((strcmp($new_pass,$new_pass_confirm)) == 0){                            
    
                            $query = "UPDATE login SET password= '$new_pass' WHERE username= '$user_name'";
    
                            $result = mysqli_query($connection, $query);                        
                            echo '<script>alert("Password Changed Successfully!")</script>';
                        }
                        else{
                            echo '<script>alert("Passwords do not match!")</script>';
                        }
                    }
                    else{
                        echo '<script>alert("Old password is wrong!")</script>';                        
                    }                    
                }
            ?>


        </div>
    </div>

    <hr>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- <script src="../scripts/app.js"></script> -->
</body>
</html>