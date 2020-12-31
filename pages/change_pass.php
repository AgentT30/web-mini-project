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
		img{
			height: 300px;
		}

		.card {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding: 5px;
		}

		@media screen and (max-width: 776px) {
			.row{
				display: flex;
				flex-direction: column;
				justify-content: space-evenly;
				margin: 35px;
				margin-top: 10vh !important;
				align-self: center;			
			}
			.col-6{
				margin: 10px;
			}
		}
	</style>
	
    <title>Change Password</title>
</head>
<body style="font-weight: 900; background: linear-gradient(rgba(126, 187, 202, 0.5), rgba(99, 208, 216, 0.5)),
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

    <div class="container" style="display:flex; flex-direction: column; align-items: center;">
    <h1>Change password:</h1>
        <form action="" method="post">
        <div class="form-group">
            <h3 for="emailInput">Enter your old password:</h3>
            <input type="password" class="form-control" style="width: 400px" name="old_pass">            
        </div>
        <div class="form-group">
            <h3 for="emailInput">Enter new password:</h3>
            <input type="password" class="form-control" style="width: 400px" name="new_pass">            
        </div>
        <div class="form-group">
            <h3 for="emailInput">Confirm new password:</h3>
            <input type="password" class="form-control" style="width: 400px" name="new_pass_confirm">            
        </div>

        <button type="submit" class="btn btn-primary" name="change-submit-btn" data-toggle="modal" data-target="#exampleModal">
            Set New Password
        </button>
        </form>   
        <?php
            $connection = mysqli_connect("localhost","root","","miniproject");  
            if(isset($_POST['change-submit-btn'])){
                $old_pass = $_POST['old_pass'];
                $new_pass = $_POST['new_pass'];
                $new_pass_confirm = $_POST['new_pass_confirm'];
                $user_name = $_GET['username'];

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../scripts/app.js"></script>
</body>
</html>