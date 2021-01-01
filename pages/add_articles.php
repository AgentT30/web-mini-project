<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0  maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">     

    <style>
        body{
            min-height: 100vh;
            background: linear-gradient(rgba(126, 187, 202, 0.7), rgba(99, 208, 216, 0.9)),
            url("https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80")
            center/cover fixed no-repeat;
            position: relative;
        }
    </style>

    <link rel="icon" type="image/png" href="../images/favicon.png"/>    
    <link rel="stylesheet" href="../stlyes/frontPage.css">  
    <link rel="stylesheet" href="../stlyes/add_articles.css">  
    <link rel="stylesheet" href="../stlyes/base.css">
  
    <title>Add Article</title>
</head>
<body style="font-weight: 900;">    
    <div id="fullpage">        
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
        <form action="" method="post">
            <div class="top-layer">  
                <h2>Please provide a heading and a body for the article.</h2>          
                <input type="text" style="margin-top:10px;" class="form-control" placeholder="Enter article title" name="title" aria-label="Username" aria-describedby="basic-addon1">
                <textarea class="form-control rounded-0" id="output" name="body" rows="18" style="resize:none; margin-top:20px;background-color:#393e46;color:white;" placeholder="Enter the article data here"></textarea>
                <div class="header-layer">
                    <button type="submit" class="btn btn-light header-btn" name="publish-btn">Submit Article</button>
                    <button type="reset" class="btn btn-light header-btn" onclick="document.getElementById('output').value=''">Clear</button>
                </div>
            </div>
        </form>

        <?php
            error_reporting(0);
            $username = $_GET['username'];
            if($username == NULL){
                $username = "admin";
            }
            if(isset($_POST['publish-btn'])){
                $title = $_POST['title'];
                $body = $_POST['body'];

                $connection = mysqli_connect("localhost","root","","miniproject");

                if($username == "admin"){
                    $query = "insert into articles (title,definition) values ('$title','$body')";
                    $result = mysqli_query($connection, $query);

                    echo '<script>alert("Article Published Successfully")</script>';
                }
                else{
                    $query = "insert into articles_for_review (title,definition,username) values ('$title','$body','$username')";
                    $result = mysqli_query($connection, $query);
               
                    echo '<script>alert("Article submitted successfully for review!")</script>';
                }
                
            }
        ?>

        <div class="container tips">
            <h2>Tips on writing a good article:</h2>
            <ul style="font-size: 1.3rem;">
                <li>Minimize your barrier to entry: Make it easy for your reader to be drawn in.</li>
                <li>Keep your paragraphs short and your text visually appealing.</li>
                <li>Keep it short and sweet.</li>
                <li>While writing an article, always use proper grammar, spelling, and proper punctuations.</li>
                <li>Avoid using the points which interest you only and not for the general public.</li>
            </ul>
        </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <script src="../scripts/app.js"></script>
</body>
</html>