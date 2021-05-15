<?php
require_once 'controllers/authController.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>User Login</title>
    <style>
        input[type=text],  
        input[type=password] {  
            width: 100%;  
            padding: 12px 50px;  
            margin: 0;  
            display: inline-block;  
            border: 1px solid #ccc;  
            box-sizing: border-box;  
        }  
        .fontuser { 
            position: relative; 
        } 
          
        .fontuser i{ 
            position: absolute; 
            left: 20px; 
            top: 50px; 
            color: gray; 
        } 
          
        .fontpassword { 
            position: relative; 
        } 
          
        .fontpassword i{ 
            position: absolute; 
            left: 20px; 
            top: 50px; 
            color: gray; 
        } 
    </style>
</head>

<body>

<!----------------Nav Bar-------------------->
<div class="menu-bar">
      <a class="logo" href="index.php">DDL ASSOCIATES FIRM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="index.php#about-us">ABOUT US</a></li>
    <li><a href="index.php#services">SERVICES</a><i class="fa fa-sort-desc"></i>
        <div class="sub-menu-1">
            <ul>
                <li class="over-me"><a href="accountingservice.php">Accounting</a><i class="fa fa-arrow-right"></i>
                    <!-- <div class="sub-menu-2">
                        <ul>
                            <li><a href="#">ZXCV</a></li>
                            <li><a href="#">ZXCV</a></li>
                            <li><a href="#">ZXCV</a></li>
                            <li><a href="#">ZXCV</a></li>
                            <li><a href="#">ZXCV</a></li>
                        </ul>
                    </div> -->
                </li>



                <li class="over-me"><a href="secretarial.php">Co Secreterial</a><i class="fa fa-arrow-right"></i>
                    <!-- <div class="sub-menu-2">
                        <ul>
                            <li><a href="#">ZXCV</a></li>
                            <li><a href="#">ZXCV</a></li>
                            <li><a href="#">ZXCV</a></li>
                            <li><a href="#">ZXCV</a></li>
                            <li><a href="#">ZXCV</a></li>
                        </ul>
                    </div> -->
                </li>

            </ul>
        </div>
    </li>
    <li><a href="contactus/enquiry.php">CONTACT</a></li>
    <li><a href="login.php">LOGIN</a></li>
</ul>
</div>

    <div class="w3-container">
        <div class="w3-row" style="margin-top:4%;margin-bottom:4%;">
            <div class= "col-md-4 offset-md-4 form-div login" >
                <form action="login.php" method="post">
                <h2 style="font-weight:bold; text-align:center;">Login</h2>
                <img src="images/companylogo.jpg" alt="Error when displaying image" class="w3-image" width="500" height="120">
                        
                    <?php if (count($errors)>0): ?> 
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li> <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </div>
                            <?php endif; ?>

                        <div class = "form-group fontuser">
                           <label for="username">Username or Email</label>
                            <input type="text" <?php echo $username; ?> class="form-control form-control-lg rounded-pill" name="username" placeholder="username / email">
                            <i class="fa fa-user fa-lg"></i> 
                        </div>
                        
                        <div class = "form-group fontpassword">
                           <label for="password">Password</label>
                            <input type="password" class="form-control form-control-lg rounded-pill" name="password" placeholder="password">
                            <i class="fa fa-lock fa-lg"></i> 
                        </div>
                        
                        <div class = "form-group">
                            <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg rounded-pill">Login</button>
                        </div>
                        <p class="text-center">Not yet a member? <a href="signup.php">Sign Up</a></p>
                        <p class="text-center">Are you an admin? <a href="adminlogin.php">Admin Page</a></p>

                </form>

            </div>
        </div>
    </div>

    <!-------------------FOOTER----------------------------->
    <section id="footer">
    
    <div class="container">
    <div class="row">
    <div class="col-md-4 footer-box">
    <img src="images/companyLogo.jpg ">
      <p>Subscribe to our website to know us more. Press on the icon to communicate to our advisor.</p>
    </div>
    <div class="col-md-4 footer-box">
        <p><b>CONTACT US</b></p>
        <p><i class="fa fa-map"></i> 9-1,Jalan PJU 1A/41B,Pusat Dagangan NZX Ara Jaya,47301 Petaling Jaya,Selangor.</p>
        <p><i class="fa fa-mobile"></i> TEL: =603-7880 1928/ 1923/ 7806 1928</p>
        <p><i class="fa fa-fax"></i> FAX: +603 7880 1528/ 2728/ 7928 </p>
        <p><i class="fa fa-envelope"></i> ddl@ddlassociates.com.my</p>
    </div>
    <div class="col-md-4 footer-box">
        <p><b>SUBSCRIBE NEWSLETTER</b></p>
        <input type="email" class="form-control" placeholder="Your Email">
        <button type="button" class="btn btn-primary">Subscribe</button>
    </div>
    </div>
      <hr>
      <p class="copyright">COPYRIGHT RESERVERED BY DDL ASSOCIATES SDN BHD @ 2020</p>
    </div>
    </section>
    
    
    
    <!-------------------SMOOTH SCROLL START----------------------------->
    <script src="js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>
</html>