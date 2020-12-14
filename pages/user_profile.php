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
        

	</style>
    
    <title>User Profile</title>
</head>
<body style="font-weight: 900; background: linear-gradient(rgba(126, 187, 202, 0.7), rgba(99, 208, 216, 0.7)),
        url('https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')
            center/cover fixed no-repeat; min-height: 100vh;">    
    <div id="header">        
        <nav class="top-nav">
            <a href="../index.html"><h1 class="main-heading">NerdsforNerds</h1></a>
            <div class="nav-items">
                <ul class="nav-links" style="text-decoration: none; list-style-type: none">
                  <li style="text-decoration: none; list-style-type: none"><a href="../index.html">Home</a></li>
                  <li style="text-decoration: none; list-style-type: none"><a href="../index.html#about-us">About Us</a></li>
                  <li style="text-decoration: none; list-style-type: none"><a href="../index.html#contact-us">Contact Us</a></li>                  
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
        $user = $_POST['loginemail'];
        // echo $user;
        $connection = mysqli_connect("localhost","root","","miniproject");       
        $query = "select * from user_details where email= '".$user."'";
        // echo $query;
        $qryobj = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($qryobj)){									
            
        
    ?>

    <div class="container">
        <div class="row">
            <div class="col col-lg-5 col-md-4 col-sm-4">
                <img src="https://st.depositphotos.com/2101611/3925/v/600/depositphotos_39258143-stock-illustration-businessman-avatar-profile-picture.jpg" alt="" style="width: 300px; height: 300px;">
            </div>
            <div class="col col-lg-5 col-md-4 col-sm-4" style="display:flex; justify-content: space-evenly; flex-direction: column; ">
                <ul style="font-size: 1.5rem">
                    <li>Name:<?php echo $row['name']; ?></li>
                    <li>Email:<?php echo $row['email']; ?></li>
                    <li>Phone Number: <?php echo $row['phone']; }?></li>
                </ul>
            </div>            
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="row" style="display:flex; justify-content: center; margin-top: 30px;">
            <a href="add_articles.php">
                <button class="btn btn-dark" style="height: 150px; width: 200px;">
                    Add Article
                </button>
            </a>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../scripts/app.js"></script>
</body>
</html>