<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Page4</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Other Information </h3>
                        </div>
                        <div class="card-body">
<form action="review.php" method="post">

<?php session_start();  

if (isset($_POST['Name'])){
 if (empty($_POST['Name'])
 || empty($_POST['Email'])){
 $_SESSION['error3'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: new3.php");
 }
}
?>
<font color='red'>
 <span id="error4">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error4'])) {
 echo $_SESSION['error4'];
 unset($_SESSION['error4']);
 }
?>
 </span>
 </font>
 
<?php 
    if($_POST){		
	$_SESSION['shareholderName'] = ($_POST['shareholderName']);
	$_SESSION['shareholderICNo'] = ( $_POST['shareholderICNo']);
	$_SESSION['shareholderNationality'] = ( $_POST['shareholderNationality']);
	$_SESSION['shareholderRace'] = ($_POST['shareholderRace']);
	$_SESSION['shareholderPlace'] = ($_POST['shareholderPlace']);
	$_SESSION['shareholderAddress'] = ($_POST['shareholderAddress']);
	$_SESSION['shareholderEmail'] = ($_POST['shareholderEmail']);
	$_SESSION['shareholderContact'] = ($_POST['shareholderContact']);
	$_SESSION['shareholderDesignation'] = ($_POST['shareholderDesignation']);
  $_SESSION['shareholderShare'] = ($_POST['shareholderShare']);
  
  $_SESSION['shareholderName2'] = ($_POST['shareholderName2']);
	$_SESSION['shareholderICNo2'] = ( $_POST['shareholderICNo2']);
	$_SESSION['shareholderNationality2'] = ( $_POST['shareholderNationality2']);
	$_SESSION['shareholderRace2'] = ($_POST['shareholderRace2']);
	$_SESSION['shareholderPlace2'] = ($_POST['shareholderPlace2']);
	$_SESSION['shareholderAddress2'] = ($_POST['shareholderAddress2']);
	$_SESSION['shareholderEmail2'] = ($_POST['shareholderEmail2']);
	$_SESSION['shareholderContact2'] = ($_POST['shareholderContact2']);
	$_SESSION['shareholderDesignation2'] = ($_POST['shareholderDesignation2']);
	$_SESSION['shareholderShare2'] = ($_POST['shareholderShare2']);
	}
?>

<table border="1">	 
 <td colspan="2"><input type="button" value="Back" onclick="window.location = 'shareholderInfoBack.php'"></td>
<tr>
    <td>(6)</td>
  <td><b>PARTICULARS OF NEXT OF KIN</td>
    </tr>
	  <tr>
	  <tr>
    <td>a.</td>
    <td>Name:</td>
   <td><input type="text" name="pName"  size="97" id="pName" required></td>
    </tr>
	  <tr>
	<td></td>
  <td>I/C No./Passport No:</td>
  <td><input type="text" name="pIC"  size="97" ></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Nationality:</td>
   <td><input type="text" name="pNationality"  size="97" ></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
   <td><input type="text" name="pRace" size="97" ></td>
    </tr>
  	  <tr>
	<td></td>
  <td>Residential Address/Registered Office Address (If it is a corporation):</td>
  <td><textarea name="pAddress" rows="5" cols="100"></textarea></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Email(Compulsory):</td>
  <td><input type="email" name="pEmail"  size="97" id="pEmail" required></td>
    </tr>



<tr>
    <td>(7)</td>
  <td><b>OPENING OF COMPANY'S BANK ACCOUNT AFTER INCORPORATION</td>
    </tr>
	  <tr>
	  <tr>
    <td>a.</td>
    <td>Name of bank:</td>
   <td><input type="text" name="bank_Name"  size="97" ></td>
    </tr>
	  <tr>
	<td></td>
  <td>Bank Branch:</td>
  <td><input type="text" name="bank_Branch"  size="97" ></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Authorised Signatory(ies):</td>
  <td><textarea name="bank_Signatory" rows="2" cols="100"></textarea></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Conditions of signing cheque:</td>
  <td><textarea name="Bank_Conditions" rows="2" cols="100"></textarea></td>
    </tr>


    <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
	
<script src="CSS/bootstrap-validate.js"></script>
<script>
bootstrapValidate('#pName','min:2:Please fill in!')
bootstrapValidate('#pEmail','min:2:Please fill in!')

</script>	

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>