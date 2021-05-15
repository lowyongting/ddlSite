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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>DDL Associates Sdn. Bhd.</title>

    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
  
    </style>
</head>

<body>

<div class="menu-bar">
      <a class="logo" href="#top">DDL ASSOCIATES FIRM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<ul>
    <li><a href="#top">HOME</a></li>
    <li><a href="#about-us">ABOUT US</a></li>
    <li><a href="#services">SERVICES</a><i class="fa fa-sort-desc"></i>
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

<section id="home">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <p class="promo-title">BEST ACCOUNTING COMPANY</p>
    <p>SCROLL THROUGH OUR WEBSITE TO KNOW ABOUT US AND THE SERVICE PROVIDED PLEASE FEEL FREE TO CONTACT US IF YOU ARE INTERESTED</p>
    </div>
    <div class="col-md-6 text-center">
    <img src="images/cartoon.jpg" class="img-fluid">
    </div>
    </div>
    </div>
    
    </section>
    
    <!-------------------ABOUT US START----------------------------->
    
    <section id="about-us">
      <div class="container">
      <h1 class="title text-center">WHY CHOOSE US ?</h1>
      <div class="row">
      <div class="col-md-6 about-us">
      <p class="about-title">Why We Are Different</p>
        <ul>
          <li>BELIEVE IN DOING BUSINESS WITH HONESTY</li>
          <li>BELIEVE IN US TO BRING YOUR COMPANY TO BETTER FUTURE</li>
          <li>BELIEVE IN DOING BUSINESS WITH HONESTY</li>
          <li>BELIEVE IN DOING BUSINESS WITH HONESTY</li>
          <li>BELIEVE IN DOING BUSINESS WITH HONESTY</li>
          <li>BELIEVE IN DOING BUSINESS WITH HONESTY</li>
          <li>BELIEVE IN DOING BUSINESS WITH HONESTY</li>
        </ul>
      </div>
      <div class="col-md-6 ">
      <img src="images/2.png"  class="img-fluid">
      </div>
      </div>
      </section>
    
    <!-------------------SERVICES START----------------------------->
    
    <section id="services">
    <div class="container text-center">
    <h1 class="title ">WHAT WE DO ?</h1>
    <div class="row text-center">
    <div class="col-md-6 services">
    <img src="images/1.png" class="service-img">
    <h4>Accounting</h4>
    <p>Provide organizations with a range of accounting services to keep the business operating as efficiently and as cost effectively as possible, 
      so all that the organizations need to concentrate on, is their core business.</p>
    </div>

    <div class="col-md-6 services">
    <img src="images/1.png" class="service-img">
    <h4>Company Secreterial</h4>
    <p>Provide services of Company formation / Company incorporation in Malaysia. The most common type of company used is a company limited by shares; 
      it may be incorporated as a private limited company or public limited company.</p>
    </div>
    </div>
      <button type="button" class="w3-btn w3-round-xlarge w3-purple w3-hover-light-blue w3-padding-large w3-large w3-margin-top">All Services</button>
    
    </div>
    </section>
    

    <!-- Start Corporating -->
    <div class="w3-row w3-padding-64 w3-container">
      <div class="w3-content w3-center">
        
          <h1>Start your business as a Sdn Bhd in Malaysia.</h1>
          <h5 class="w3-padding-32">Submit your incorporation form in 20 minutes. Get your Sdn Bhd approved in 3 - 5 working days.</h5>
          <button id="btnCorporate" class="w3-btn w3-round-xlarge w3-purple w3-hover-light-blue w3-padding-large w3-large w3-margin-top">Start incorporating</button> 

      </div>
    </div>

    
    <!-------------------CONTACT START----------------------------->
    
    <section id="social-media">
    <div class="container text-center">
    <p>CONTACT US THROUGH</p>
      <div class="social-icons">
        <a href="#"><img src="images/whatsapp.png"></a>
        <a href="#"><img src="images/facebook.jpg"></a>
        <a href="mailto:ddl@ddlassociates.com.my"><img src="images/gmail.jpg"></a>
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

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<script>
    var btn = document.getElementById('btnCorporate');
    btn.addEventListener('click', function() {
      document.location.href = '<?php if (!isset($_SESSION['id'])) {
        echo "login.php";
      } else {
        echo "form/companyInfo.php";
      } ?>';
    });
  </script>

    <script src="js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>
</html>
