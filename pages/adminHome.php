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
    <title>Admin Home</title>
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
            <div class="col col-lg-6 col-mg-6 col-sm-6">
            <h3>Articles:</h3>
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
        
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../scripts/app.js"></script>
</body>
</html>