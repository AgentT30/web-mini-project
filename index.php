<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0  maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     
    <link rel="icon" type="image/png" href="images/favicon.png"/>    
    <link rel="stylesheet" href="stlyes/frontPage.css">  
    <link rel="stylesheet" href="stlyes/base.css">
  
    <title>NerdsforNerds</title>
</head>
<body style="font-weight: 900;">    
    <div id="fullpage">
        <section class="section s1">
            <nav class="top-nav">
                <a href="index.html"><h1 class="main-heading">NerdsforNerds</h1></a>
                <div class="nav-items">
                    <ul class="nav-links" style="text-decoration: none; list-style-type: none">
                      <li style="text-decoration: none; list-style-type: none"><a href="index.html">Home</a></li>
                      <li style="text-decoration: none; list-style-type: none"><a href="#about-us">About Us</a></li>
                      <li style="text-decoration: none; list-style-type: none"><a href="#contact-us">Contact Us</a></li>
                      <li style="text-decoration: none; list-style-type: none"><a href="pages/login.php"><button class="login-btn">Login/Sign Up</button></a></li> 
                    </ul>
                </div>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
            <div id="search">        
                <div class="search-bar">            
                    <form action="pages/articles.php" method="POST">            
                        <input type="search" name="search" id="search-box" placeholder="Search...">
                        <button class="search-btn" href="#"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>            
        </section>

        

        <section class="section s2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-lg-3">
                            <h2 class="articles-heading" align="left">Read some top articles</h2>
                        </div>
                        <div class="col">
                            <h2 class="articles-heading-1" align="left">Top News</h2>
                        </div>
                    </div>
                    <!-- <h3 class="articles-heading-h3">Featured Articles:</h3>
                    <h3 class="articles-heading-h3">Explore</h3> -->
                    <div class="row">                        
                        <div class="col-lg-3 col-md-3 col-sm-6 featured" >
                            <!-- <a href="pages/computer.html"><p class="featured-articles">What is a computer?</p> </a>                                                 
                            <a href="pages/cpu.html"><p class="featured-articles">Central Processing Unit?</p> </a>                        
                            <a href="pages/inputdevices.html"><p class="featured-articles">Input Devices</p> </a>                        
                            <a href="pages/outputdevies.html"><p class="featured-articles">Output Devices</p> </a>                        
                            <a href="pages/hardware_software.html"><p class="featured-articles">Difference between Hardware and Software</p> </a>                        
                            <a href="pages/algorithms.html"><p class="featured-articles">What are algorithms?</p> </a>
                            <a href="pages/programming.html"><p class="featured-articles">What is programming?</p> </a>                         
                            <a href="pages/cprogramming.html"><p class="featured-articles featured-articles-last">C Programming Language</p> </a>                        
                            <a href="pages/htmlexplain.html"><p class="featured-articles featured-articles-last">HTML (HyperText Markup Language)</p> </a>                        
                            <a href="pages/javascript.html"><p class="featured-articles featured-articles-last">JavaScript</p> </a>  -->


                            <!-- THIS SCRIPT IS USED TO LOAD THE FEATUED ARTICLES IN RANDOM ORDER -->
                            <!-- THIS SCRIPT IS USED TO LOAD THE FEATUED ARTICLES IN RANDOM ORDER -->
                            <!-- THIS SCRIPT IS USED TO LOAD THE FEATUED ARTICLES IN RANDOM ORDER -->
                            <!-- THIS SCRIPT IS USED TO LOAD THE FEATUED ARTICLES IN RANDOM ORDER -->
                            <!-- THIS SCRIPT IS USED TO LOAD THE FEATUED ARTICLES IN RANDOM ORDER -->
							<script> 
							function shuffle(array) {
								var currentIndex = array.length, temporaryValue, randomIndex;									
								while (0 !== currentIndex) {										
									randomIndex = Math.floor(Math.random() * currentIndex);
									currentIndex -= 1;										
									temporaryValue = array[currentIndex];
									array[currentIndex] = array[randomIndex];
									array[randomIndex] = temporaryValue;
								}
								return array;
							}                              
							let articles = [
								'<a href="pages/computer.html"><p class="featured-articles">What is a computer?</p> </a>',
								'<a href="pages/cpu.html"><p class="featured-articles">Central Processing Unit?</p> </a>',
								'<a href="pages/inputdevices.html"><p class="featured-articles">Input Devices</p> </a>',
								'<a href="pages/outputdevies.html"><p class="featured-articles">Output Devices</p> </a>',
								'<a href="pages/hardware_software.html"><p class="featured-articles">Difference between Hardware and Software</p> </a>',
								'<a href="pages/algorithms.html"><p class="featured-articles">What are algorithms?</p> </a>',
								'<a href="pages/programming.html"><p class="featured-articles">What is programming?</p> </a>',
								'<a href="pages/cprogramming.html"><p class="featured-articles featured-articles-last">C Programming Language</p> </a>',
								'<a href="pages/htmlexplain.html"><p class="featured-articles featured-articles-last">HTML (HyperText Markup Language)</p> </a>',
								'<a href="pages/javascript.html"><p class="featured-articles featured-articles-last">JavaScript</p> </a>'                                  
							];
							articles = shuffle(articles);
							for(var i of articles){
								console.log(i);
								document.write(i);
							}
                            </script>                              
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            
                        <?php
                          $run_script = shell_exec("python news_scrapper.py");


                          $str = file_get_contents('news.json');
                          $json = json_decode($str, true);
                          $count = 0;
                          $numbers = ['zero','one','two','three','four','five','six','seven','eight','nine','ten'];
                      
                          foreach ($json as $field => $value) {
                              $count += 1;
                              // echo("<b>".$value['heading']."</b>");
                              // echo "<br>";
                              // echo($value['body']);
                              // echo "<br>";        
                              // echo($value['link']);
                              // echo "<br>";
                              // echo "<br>";
                      
                              echo '<div class="accordion" id="accordionExample">
                              <div class="card">
                                  <div class="card-header" id="headingOne">
                                  <h2 class="mb-0">
                                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#'.$numbers[$count].'" aria-expanded="false" aria-controls="0">
                                      '.$value["heading"].'
                                      </button>
                                  </h2>
                                  </div>';
                      
                              echo '
                                  <div id="'.$numbers[$count].'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                      '.$value["body"].'... <a href='.$value["link"].'><button type="button" class="btn btn-outline-secondary">Read More</a></button>
                                  </div>
                                  </div>
                              </div>';
                              if($count == 8){
                                  break;
                              }
                          }
                          ?>
                        </div>
                    </div>
                </div>                
        </section>
        <section class="section s3" id="about-us">
          <div class="container">
            <h2 align="center" style="padding-top:150px">About the Developers</h2>
            <div class="row-about-us">
              <a href="https://www.linkedin.com/in/chaitanya-thekkunja-aa0ba8195/">           
                <div class="card about-us-card" style="width: 18rem;">                  
                  <div class="card-body">
                    <h5 class="card-title" align="center">Chaitanya Thekkunja</h5>
                    <p class="card-text" align="center">4SN17CS711, CS - C</p>                    
                  </div>
                </div>              
              </a>  
              <a href="https://www.linkedin.com/in/kishan-kashyap-805802163/">
                <div class="card about-us-card" style="width: 18rem;">                  
                  <div class="card-body">
                    <h5 class="card-title" align="center">Kishan Kashyap</h5>
                    <p class="card-text" align="center">4SN17CS714, CS - C</p>                    
                  </div>
                </div> 
              </a>            
            </div>
          </div>
        </section>

        <section class="section s4" id="contact-us">
          <form action="backend/contactus.php" method="POST">
            <div class="container container-form" style="margin-top: 100px; margin-bottom: 50px;">
                <h4 align="center" class="write-us-title">Write us here:</h4>
                <div class="form-row">
                    <div class="form-group col-lg-6 col-md-6">
                        <label>Name:</label>
                        <input type="text" name="fname" required="" class="form-control" />
                    </div> 
                    <div class="form-group col-lg-6 col-md-6">
                        <label>E-Mail:</label>
                        <input type="email" name="email" class="form-control" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-12 col-md-12">
                        <label>Question:</label>
                        <textarea name="question" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-12 col-md-12" >                        
                        <button class="btn btn-primary" style="width: 100%;" name="sbtbtn">Submit</button>
                    </div>
                </div>
            </div>
          </form>        
        </section>
        <section class="section s5">
          <div class="container">
            <div class="row map-contents">
                <div class="col col-lg-4 col-md-4 contact-info">
                    <h4><u>Contact Us:</h4></u>
                    <h5>Valachil, Mangaluru, Karnataka 574143</h5>
                </div>
                <div class="col col-lg-4 col-md-4 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.5227798807255!2d74.93731361526939!3d12.874070220493058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba3585ea5927d6f%3A0xc65abe4f89ccf8ab!2sSrinivas%20Institute%20Of%20Technology(S.I.T.)!5e0!3m2!1sen!2sin!4v1594319744352!5m2!1sen!2sin" width="600" height="450" frameborder="1" style="border:1px solid black; padding: 2px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
          </div>
        </section>
        

      
    </div>   
      

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script src="frameworks/fullpage.min.js"></script>
    <script src="scripts/app.js"></script>
</body>
</html>