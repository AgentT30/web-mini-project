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
    <link rel="stylesheet" href="../stlyes/password_strength.css"> 

	<script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script> 
	
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

    <div class="container change_password_div" style="display:flex; flex-direction: column; align-items: center;">
    <h1>Change password:</h1>
        <form action="" method="post">        
            <div class="form-group">
                <h3 for="emailInput">Enter new password:</h3>
                <input type="password" class="form-control" style="width: 400px" id="InputPasswordSignUp" name="new_pass">            
            </div>
            <div class="form-group">
                <h3 for="emailInput">Confirm new password:</h3>
                <input type="password" class="form-control" style="width: 400px" name="new_pass_confirm">
                <small id="pass_strength_title" class="form-text text-muted" style="margin-top:10px">Password Strength</small>
                <div class="progress">											
                    <div id="password-strength" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>            
            </div>
            <small id="pass_strength_tips" class="form-text text-muted">A secure password must have:</small>
                <ul class="list-unstyled">
                    <li>
                        <span class="low-upper-case">
                            <i class="fas fa-circle" aria-hidden="true"></i>
                            Lowercase &amp; Uppercase
                        </span>
                    </li>
                    <li>
                        <span class="one-number">
                            <i class="fas fa-circle" aria-hidden="true"></i>
                            Number (0-9)
                        </span>
                    </li>
                    <li>
                        <span class="one-special-char">
                            <i class="fas fa-circle" aria-hidden="true"></i>
                            Special Character (!@#$%^&*)
                        </span>
                    </li>
                    <li>
                        <span class="eight-character">
                            <i class="fas fa-circle" aria-hidden="true"></i>
                            At least 8 character
                        </span>
                    </li>
                </ul>
            <button type="submit" class="btn btn-primary" name="change-submit-btn" data-toggle="modal" data-target="#exampleModal">
                Set New Password
            </button>
        </form>   
        <?php
            $connection = mysqli_connect("localhost","root","","miniproject");  
            if(isset($_POST['change-submit-btn'])){                
                $new_pass = $_POST['new_pass'];
                $new_pass_confirm = $_POST['new_pass_confirm'];
                $user_name = $_GET['username'];             

                
                if((strcmp($new_pass,$new_pass_confirm)) == 0){                            

                    $query = "UPDATE login SET password= '$new_pass' WHERE username= '$user_name'";

                    $result = mysqli_query($connection, $query);                        
                    echo '<script>alert("Password Changed Successfully!")</script>';
                }
                else{
                    echo '<script>alert("Passwords do not match!")</script>';
                }
                
                                   
            }
        ?>          
    </div>
    <script>
		let password = document.querySelector("#InputPasswordSignUp");
		let password_strength = document.getElementById("password-strength");

		let lower_upper_case = document.querySelector(".low-upper-case i");
		let number = document.querySelector(".one-number i");
		let special_char = document.querySelector(".one-special-char i");
		let eight_char = document.querySelector(".eight-character i");

		function checkStrength(password){
			let strength = 0;
			
			if(password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)){
				strength += 1;				
				lower_upper_case.classList.add('fa-check');
				lower_upper_case.classList.remove('fa-circle');
				
			}
			else{
				lower_upper_case.classList.add('fa-circle');
				lower_upper_case.classList.remove('fa-check');
			}

			if(password.match(/[0-9]/)){
				strength += 1;
				number.classList.add('fa-check');
				number.classList.remove('fa-circle');
			}
			else{
				number.classList.remove('fa-check');
				number.classList.add('fa-circle');
			}

			if(password.match(/[!,@,#,$,%,^,&,*,_,~]/)){
				strength += 1;
				special_char.classList.add('fa-check');
				special_char.classList.remove('fa-circle');
			}
			else{
				special_char.classList.remove('fa-check');
				special_char.classList.add('fa-circle');
			}

			if(password.length > 7){
				strength += 1;
				eight_char.classList.add('fa-check');
				eight_char.classList.remove('fa-circle');
			}
			else{
				eight_char.classList.remove('fa-check');
				eight_char.classList.add('fa-circle');
			}

			if(strength == 0){
				password_strength.style = "width: 0%";
			}
			else if (strength == 2){
				password_strength.classList.remove("progress-bar-warning");
				password_strength.classList.remove("progress-bar-success");
				password_strength.classList.add("progress-bar-danger");
				password_strength.style = "width: 10%";
			}
			else if (strength == 3){
				password_strength.classList.remove("progress-bar-success");
				password_strength.classList.remove("progress-bar-danger");
				password_strength.classList.add("progress-bar-warning");
				password_strength.style = "width: 60%";
			}
			else if (strength == 4){
				password_strength.classList.remove("progress-bar-warning");
				password_strength.classList.remove("progress-bar-danger");
				password_strength.classList.add("progress-bar-success");
				password_strength.style = "width: 100%";
			}
		}

		password.addEventListener('keyup', function(){
			let pass = password.value;
			console.log(pass);
			checkStrength(pass);
		})
	</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../scripts/app.js"></script>
</body>
</html>