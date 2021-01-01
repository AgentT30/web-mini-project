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
	
    <title>Login/SignUp</title>
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

    <div class="container">
        <div class="row" style="margin-top: 25vh;">
            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
              <div class="card" style="width: 18rem;">
                <img src="https://alexwebdevelop.com/wp-content/uploads/2019/08/php-login-and-authentication-the-definitive-guide.png" class="card-img-top" alt="login-img">
                <div class="card-body">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
					<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Enter your login credentials:</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>

							<form action="user_profile.php" method="post">
							<div class="modal-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address:</label>
									<input type="email" class="form-control" id="exampleInputEmail1" name="loginemail" aria-describedby="emailHelp">                                
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password:</label>
									<input type="password" class="form-control" name="loginpass" id="exampleInputPassword1">
								</div> 
								<div class="form-group">
									<a href="forgot_password.php"><button type="button" class="btn btn-outline-secondary">Forgot Passowrd</a></button>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="login_submit">Login</button>
							</div>
							</form>
							<?php
							

							// if(isset($_POST['login_submit'])){
							// 	$u_name = $_POST['loginemail'];
							// 	$p_word = $_POST['loginpass'];

							// 	// echo($username);        
							// 	// echo($password);

							// 	$connection = mysqli_connect("localhost","root","","miniproject");        

							// 	$query = "select * from login where username= '".$u_name."' and password='".$p_word."'";
							// 	$qryobj = mysqli_query($connection, $query);
								
							// 	$row = mysqli_fetch_assoc($qryobj);
							// 	$count = mysqli_num_rows($row);
							// 	if ($count != 1){
							// 		echo '<script>alert("Wrong Password")</script>';								
							// 		header("Location:login.php");
							// 	}	
							// 	else{								
							// 		echo '<script>alert("Login Successful");"</script>';
							// 		// header("Location:user_profile.php");
							// 		// header("Location:add_articles.php"); 
							// 		// echo('<a href="../index.html"><button class="btn btn-outline-secondary">Click to go back</button></a>');
							// 	}
							// }
							?>
						</div>
						</div>
					</div>
					</div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
				<div class="card" style="width: 18rem;">
					<img src="https://www.pngfind.com/pngs/m/333-3339770_request-form-icon-statutory-registration-hd-png-download.png" class="card-img-top" alt="signup-img">
					<div class="card-body">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupModal">Sign Up</button>
						<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Enter your details to sign up:</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
							
								<form action="" method="post">
								<div class="modal-body">
									<div class="form-group">
										<label for="name">Name:</label>
										<input type="text" name="name" class="form-control" id="name" required>                                
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address:</label>
										<input type="email" class="form-control" name="loginemail" id="exampleInputEmail1" aria-describedby="emailHelp" required>                                
									</div>
									<div class="form-group">
										<label for="phone">Phone Number:</label>
										<input type="number" name="phoneno" class="form-control" id="phone-number" required>                                
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password:</label>
										<input type="password" class="form-control" name="loginpass" id="exampleInputPassword1" required>
									</div>
									<div class="form-group">
										<label for="InputPasswordConfirm">Confirm Password:</label>
										<input type="password" class="form-control" name="loginpass_confirm" id="InputPasswordConfirm" required>
									</div>
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Send me your newsletter</label>
										<small id="emailHelp" class="form-text text-muted">(Note: Your Email address will be used for login)</small>
									</div> 
								</div>
								
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary" name="signup_submit" onclick="validateform()">Sign Up</button>
								</div>
							</form>
							<?php
								// session_start();

								if(isset($_POST['signup_submit'])){
									$name = $_POST['name'];
									$u_name = $_POST['loginemail'];
									$p_word = $_POST['loginpass'];
									$p_word_confirm = $_POST['loginpass_confirm'];
									$p_number = $_POST['phoneno'];	
									
									function endsWith($haystack, $needle) {
										return substr_compare($haystack, $needle, -strlen($needle)) === 0;
									}


									if (!preg_match ("/^[a-zA-z]*$/", $name)) { 									
										echo '<script>alert("Name is invalid!")</script>';
									}
									else if(strlen($p_number) != 10){
										echo '<script>alert("Enter a valid phone number!")</script>';
									}
									else if(endsWith($u_name,".com") != true){
										echo '<script>alert("Enter a valid email ID!")</script>';
									}
									else{										 
										if((strcmp($p_word,$p_word_confirm)) == 0){
											$connection = mysqli_connect("localhost","root","","miniproject");        
	
											$query1 = "insert into user_details (name,email,phone) values ('$name','$u_name','$p_number')";
											$query2 = "insert into login (username,password) values ('$u_name','$p_word')";
	
											$result = mysqli_query($connection, $query1);
											
	
											if($result==1){
												$result2 = mysqli_query($connection, $query2);
												echo '<script>alert("Signup Successful, Please proceed to login with your email and password")</script>';
											}
											else{
												echo '<script>alert("Account already exists! Please login!")</script>';
											}
											
										}
										else{
											echo '<script>alert("Passwords do not match!")</script>'; 
										}
									}


									// echo($u_name);        
									// echo($p_word);
									
								}
								// else{
								//   echo '<script>alert("Error!")</script>';
								// }
							?>
							</div>
							</div>
						</div>
					</div>
				</div> 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-3 col-6">
				<div class="card" style="width: 18rem;">
					<img src="https://cdn3.iconfinder.com/data/icons/business-vol-21/100/Artboard_9-512.png" class="card-img-top" alt="...">
					<div class="card-body" style="display:flex; justify-content:center;">
						<a href="admin.php"><button type="button" class="btn btn-primary">Admin Login</button></a>
					</div>
					</div>  
				</div>
            
        </div>
		<hr>        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../scripts/app.js"></script>
</body>
</html>