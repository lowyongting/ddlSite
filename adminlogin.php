<?php
require 'controllers/adminAuthController.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Login</title>
</head>

<body>

    <img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form action="adminlogin.php" method="post">
				<img src="images/avatar.svg">
                <h2 class="title">Admin Login</h2>
                
                <?php if (count($errors)>0): ?> 
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                            <li> <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </div>
                <?php endif; ?>

                <br>
                
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
                   </div>

           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" <?php echo $username; ?> class="input" name="username"> 
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	
            	<input type="submit" name="adminlogin-btn" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>