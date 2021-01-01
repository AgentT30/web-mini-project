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
        .stats{
            display: flex;
            justify-content: space-around;            
        }

        .border-class{
            border: 2px solid black;
            border-radius: 10px;  
            width: 30%;  
            padding: 10px;    
        }

		@media screen and (max-width: 1110px) {
		.row{
			display: flex;
			flex-direction: column;
		}
		.col{
			max-width: 100% !important;
            
		}
	}

	</style>
    
    <title>Admin Home</title>
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
                  <li style="text-decoration: none; list-style-type: none"><a href="login.php"><button class="login-btn">Log Out</button></a></li>                   
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
        <div class="stats">
            <div class="border-class">
                <h2>Users Online:</h2>
                <h3 class="users-online"></h3>
            </div>
            <div class="border-class">                
                <h3 class="total-views">
                    <?php
                        $file="count.txt";
                        $handle=fopen($file,'r') or die("Cannot Open File : $file");
                        $count=fread($handle,10);
                        fclose($handle);
                        $count++;
                        echo "<h2>No of visitors who visited this page : $count </h2>";
                        $handle=fopen($file,'w') or die("Cannot Open File : $file");
                        fwrite($handle,$count);
                        fclose($handle);
                    ?>                    
                </h3>
            </div>
            <div class="border-class">
                <h2>Unique Views:</h2>
                <h3 class="unique-views"></h3>
            </div>
        </div>
    </div>

    <script>
        var users = document.querySelector(".users-online");
        var views = document.querySelector(".total-views");
        var users_unique = document.querySelector(".unique-views");

        function getRandomInteger(min, max) {
            return Math.floor(Math.random() * (max - min) ) + min;
        }
        users.innerHTML = getRandomInteger(10,100);
        users_unique.innerHTML = getRandomInteger(10,100);
    </script>

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

    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-6 col-mg-6 col-sm-6">
                <h3>User Details:</h3>
                <table class="table" style="text-align:center">
                    <thead class="thead-dark">
                        <tr>                        
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $connection = mysqli_connect("localhost","root","","miniproject");        
                            $query = "select * from user_details";
                            $result = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<tr>';
                                echo '<td>'.$row['name'].'</td>';
                                echo '<td>'.$row['email'].'</td>';
                                echo '<td>'.$row['phone'].'</td>'; 
                                echo '<td><a href="deleteuser.php?email='.$row['email'].'"><button class="btn btn-dark">Delete this Record</button></a></td>';
                                echo '</tr>';
                            }
                        ?>                        
                    </tbody>
                </table>
            </div>
            <div class="col col-lg-6 col-mg-6 col-sm-6 articles-table">
            <span style="display: flex; justify-content:space-between;"><h3>Articles:</h3></span>
                <table class="table" style="text-align:center">
                    <thead class="thead-dark">
                        <tr>                        
                            <th scope="col">Title</th>                                                      
                            <th scope="col">Action</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $connection = mysqli_connect("localhost","root","","miniproject");        
                            $query = "select * from articles";
                            $result = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<tr >';
                                echo '<td>'.strtoupper($row['title']).'</td>';                                                                
                                echo '<td><a href="deletearticle.php?title='.$row['title'].'"><button class="btn btn-dark">Delete this Record</button></a></td>';
                                echo '</tr>';
                            }
                        ?>                        
                    </tbody>
                </table>
            </div>
        </div>
        <span style="display: flex; justify-content:center; margin-bottom: 20px;"><a href="add_articles.php"><button class="btn btn-dark">Add Article</button></a></span>
		<hr>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../scripts/app.js"></script>
</body>
</html>