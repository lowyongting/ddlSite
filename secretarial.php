<?php 
require_once 'controllers/authController.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>DDL ASSOCIATES SDN BHD</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/cosec.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


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

<!-------------------HOME START----------------------------->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Us</h2>
      <h5>Photo of me:</h5>
      <div><img src="images/people.jpg" class="fakeimg"></div>
      <br>
      <p>We provide services of Company formation / Company incorporation in Malaysia. The most common type of company used is a company limited by shares; it may be 
          incorporated as a private limited company or public limited company. You can count on our expertise for your 
          business setting-up needs. Besides Company formation / Company incorporation, we are able to provide ready made companies or 
          incorporation of Shelf Company for clients seeking to set-up businesses within 24 hours in Malaysia. This includes the change of ownerships as per the clients' requirements. Our team of 
          dedicated professionals has been assuming responsibilities in supporting our clients from various businesses and industries. We are at all times striving for professional competency and 
          exhibit a high level of skill and proficiency in the performance of our duties as Company Secretarial Consultants.</p>
      
    
    </div>
    <div class="col-sm-8">
      <h2>COMPANY SECRETERIAL</h2>
      <div><img src="images/companysec.jpg" class="fakeimg" width=700px></div>
      <br>
      <p>Must for every company to appoint Company Secretary within 30 days from company incorporation. 
        Penalty would entail by Companies Commission of Malaysia (CCCM) if fails to do so.
        In order, to provide qualified professionals to be appointed as Company Secretary pursuant to the Companies Act 2016</p>
      <br>
      <p>We provide full range of Company Secreterial such as:</p>
      <li>Company formation / Company incorporation or incorporation of Shelf Company</li>
      <li>Company Secretarial Services</li>
      <li>Striking off and winding up Company</li>
      <li>Company Searches and Bankruptcy Searches</li>
    </div>
  </div>
</div>
    
    
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