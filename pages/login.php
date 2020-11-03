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
    <link rel="stylesheet" href="../stlyes/login.css">  
    <title>Login/SignUp</title>
</head>
<body style="font-weight: 900;">    
    <div id="header">        
        <nav class="top-nav">
            <h1 class="main-heading">GeeksforGeeks Clone</h1>
            <div class="nav-items">
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="login.html"></a><button class="login-btn">Login/Sign Up</button></li> 
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
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-3"></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-3">
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

                        <form action="" method="post">
                          <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="loginemail" aria-describedby="emailHelp">                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" name="loginpass" id="exampleInputPassword1">
                            </div>  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="login_submit">Login</button>
                          </div>
                        </form>
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
                                  // echo('<a href="../index.html"><button class="btn btn-outline-secondary">Click to go back</button></a>');
                              }
                          }
                        ?>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-3">
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
                                <input type="text" name="name" class="form-control" id="name">                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address:</label>
                                <input type="email" class="form-control" name="loginemail" id="exampleInputEmail1" aria-describedby="emailHelp">                                
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="number" name="phoneno" class="form-control" id="phone-number">                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" name="loginpass" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="InputPasswordConfirm">Confirm Password:</label>
                                <input type="password" class="form-control" name="loginpass_confirm" id="InputPasswordConfirm">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Send me your newsletter</label>
                                <small id="emailHelp" class="form-text text-muted">(Note: Your Email address will be used for login)</small>
                              </div> 
                          </div>
                        
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="signup_submit">Sign Up</button>
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

                            // echo($u_name);        
                            // echo($p_word);
                            if((strcmp($p_word,$p_word_confirm)) == 0){
                                $connection = mysqli_connect("localhost","root","","miniproject");        

                                $query1 = "insert into user_details (name,email,phone,password) values ('$name','$u_name','$p_number','$p_word')";
                                $query2 = "insert into login (username,password) values ('$name','$p_word')";

                                $result = mysqli_query($connection, $query1);
                                $result = mysqli_query($connection, $query2);
                                echo '<script>alert("Signup Successful")</script>'; 
                                // echo '<a href="../pages/login.html"><button class="btn btn-outline-success">Click to go back</button></a>';
                            }
                            else{
                                echo '<script>alert("Passwords do not match!")</script>'; 
                            }
                        }
                      ?>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-3"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../scripts/app.js"></script>
</body>
</html>