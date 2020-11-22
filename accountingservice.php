<?php 
require_once 'controllers/authController.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/accountingstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Accounting Service</title>

    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
    </style>
</head>

<body>
  
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
    
    <?php
    if (!isset($_SESSION['id'])) {
      ?>
      <li><a href="login.php">LOGIN</a></li>
    <?php } else {
    ?>
      
      <h6 class="w3-bar-item w3-hide-small w3-padding-large w3-right" >Welcome, <?php echo $_SESSION['username']; ?></h6>
      <a href="index.php?logout=1" class="w3-bar-item w3-button w3-right w3-hide-small logout">logout</a>
      
    <?php }
    ?>

</ul>
</div>


<!-------------------SLIDESHOW START----------------------------->

<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="images/slideshow3.png" style="width:100%" alt="Error when displaying image">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/slideshow2.jpg" style="width:100%" alt="Error when displaying image">
      <div class="text">Outsourcing various accounting processes makes a lot of business sense. By turning to outsourcing as a tool to reduce costs and time, 
          improve productivity and enhance their ability to compete in the marketplace.</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="images/slideshow1.jpg" style="width:100%" alt="Error when displaying image">
      <div class="text">We work closely with our clients to help them to develop sound financial control processes, 
          provide constructive solutions to problems and develop strategies for improving profitability</div>
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    
    <script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>


<!-------------------CONTENT START----------------------------->

<section id="services">
    <div class="container text-center">
    <h1 class="title ">ACCOUNTING</h1>
    <div class="row text-center">
    <div class="col-md-4 services">
    <img src="images/1.png" class="service-img" alt="Error when displaying image">
    <h4>Bookkeeping Service</h4>
            <ul>
                <li>Full Scope</li>
                <li>Monthly, Quarterly & Yearly for Active and Dormant Company</li>
            </ul>
    </div>
    <div class="col-md-4 services">
    <img src="images/1.png" class="service-img" alt="Error when displaying image">
    <h4>Accounting</h4>
            <ul>
                <li>Set Up Accounting System</li>
                <li>Preparation of full sets of Accounts for Audit Purposes</li>
                <li>Preparation of customized management account and report</li>
            </ul>
    </div>
    <div class="col-md-4 services">
    <img src="images/1.png" class="service-img" alt="Error when displaying image">
    <h4>Others Service</h4>
            <ul>
                <li>Payroll services</li>
                <li>General accounting advisory</li>
            </ul>
    </div>
    </div>
    
    </div>
    </section>
    
    
    <!-------------------FOOTER START----------------------------->
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