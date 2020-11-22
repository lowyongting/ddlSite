
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
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Enquiry</title>

    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}

    </style>
</head>

<body>

<div class="menu-bar">
      <a class="logo" href="../index.php">DDL ASSOCIATES FIRM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<ul>
    <li><a href="../index.php">HOME</a></li>
    <li><a href="../index.php#about-us">ABOUT US</a></li>
    <li><a href="../index.php#services">SERVICES</a><i class="fa fa-sort-desc"></i>
        <div class="sub-menu-1">
            <ul>
                <li class="over-me"><a href="../accountingservice.php">Accounting</a><i class="fa fa-arrow-right"></i>
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



                <li class="over-me"><a href="../secretarial.php">Co Secreterial</a><i class="fa fa-arrow-right"></i>
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
    <li><a href="enquiry.php">CONTACT</a></li>
    
    <?php
    if (!isset($_SESSION['id'])) {
      ?>
      <li><a href="../login.php">LOGIN</a></li>
    <?php } else {
    ?>
      
      <h6 class="w3-bar-item w3-hide-small w3-padding-large w3-right" >Welcome, <?php echo $_SESSION['username']; ?></h6>
      <a href="../index.php?logout=1" class="w3-bar-item w3-button w3-right w3-hide-small logout">logout</a>
      
    <?php }
    ?>
    
</ul>
</div>

    <div class="w3-container">
        <div class="w3-row" style="margin-top:4%; margin-bottom:4%;">
            <div class= "col-md-4 offset-md-4 form-div">
                <h4 class="sent-notification"></h4>

                <form id="myForm">
                    <h2 style="font-weight:bold; text-align:center;">Enquiry Form</h2>

                    <div class = "form-group">
                        <label>Name</label>
                        <input id="name" type="text" placeholder="Enter Name" class="form-control" required>
                    </div>

                    <div class = "form-group">
                        <label>Email</label>
                        <input id="email" type="text" placeholder="Enter Email" class="form-control" required>
                    </div>

                    <div class = "form-group">
                        <label>Phone</label>
                        <input id="phone" type="tel" placeholder="Enter Phone Number" class="form-control" pattern="[0-9]{3}-[0-9]{7}" required>
                    </div>

                    <div class = "form-group">
                        <label>Subject</label>
                        <input id="subject" type="text" placeholder=" Enter Subject" class="form-control" required> 
                    </div>

                    <div class = "form-group">
                        <label>Message</label>
                        <textarea id="body" rows="5" placeholder="Type Message" class="form-control" required></textarea>
                    </div>

                    <button type="button" class="w3-btn w3-round-xlarge w3-teal w3-padding-large btn-block" onclick="sendEmail()" value="Send An Email">Submit</button> 
                </form>
            </div>
	    </div>
    </div>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
			var phone = $("#phone");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
					   phone: phone.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

    <!-------------------FOOTER START----------------------------->
    <section id="footer">
    
    <div class="container">
    <div class="row">
    <div class="col-md-4 footer-box">
    <img src="../images/companyLogo.jpg ">
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
    <script src="../js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>
</html>