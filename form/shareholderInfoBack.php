<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Page3</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Shareholder (s) </h3>
                        </div>
                        <div class="card-body">
						
						
<form action="otherInfoBack.php" method="post">
<?php session_start();  

if (isset($_POST[''])){
 if (empty($_POST[''])
 || empty($_POST[''])){
 $_SESSION['error2'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: directorInfoBack.php");
 }
}
?>

 <span id="error3">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error3'])) {
 echo $_SESSION['error3'];
 unset($_SESSION['error3']);
 }
?>
 </span>

<?php
  if($_POST){
	$_SESSION['Name'] = ($_POST['Name']);
	$_SESSION['NRIC'] = ( $_POST['NRIC']);
	$_SESSION['PassportExpiry'] = ( $_POST['PassportExpiry']);
	$_SESSION['DateOfBirth'] = ($_POST['DateOfBirth']);
	$_SESSION['Gender'] = ($_POST['Gender']);
	$_SESSION['Nationality'] = ($_POST['Nationality']);
	$_SESSION['Race'] = ($_POST['Race']);
	$_SESSION['ResidentialAddress'] = ($_POST['ResidentialAddress']);
	$_SESSION['Email'] = ($_POST['Email']);
	$_SESSION['Share'] = ($_POST['Share']);
	$_SESSION['sName'] = ($_POST['sName']);
	$_SESSION['sNRIC'] = ($_POST['sNRIC']);
	$_SESSION['sPassportExpiry'] = ($_POST['sPassportExpiry']);
	$_SESSION['sDOB'] = ($_POST['sDOB']);
	$_SESSION['sGender'] = ($_POST['sGender']);
	$_SESSION['sNationality'] = ($_POST['sNationality']);
	$_SESSION['sRace'] = ($_POST['sRace']);
	$_SESSION['sAddress'] = ($_POST['sAddress']);
	$_SESSION['sEmail'] = ($_POST['sEmail']);
	$_SESSION['sShare'] = ($_POST['sShare']);
  }
  ?>

<table border="1">	 

 <td colspan="2"><input type="button" value="Back" onclick="window.location = 'directorInfoBack.php'"></td>
<tr>
    <td>(5)</td>
  <td><b>OTHER SHAREHOLDER(S),WHO IS NOT A DIRECTOR(IF ANY)</td>
    </tr>
	  <tr>
    <td>a.</td>
    <td>Name:</td>
   <td><input type="text" name="shareholderName"  size="97" value="<?php echo$_SESSION['shareholderName']; ?>" ></td>
    </tr>
	  <tr>
	<td></td>
  <td>I/C No./Company No:</td>
  <td><input type="text" name="shareholderICNo"  size="97" value="<?php echo$_SESSION['shareholderICNo']; ?>"></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Nationality:</td>
   <td><input type="text" name="shareholderNationality"  size="97"value="<?php echo$_SESSION['shareholderNationality']; ?>" ></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
   <td><input type="text" name="shareholderRace" size="97" value="<?php echo$_SESSION['shareholderRace']; ?>"></td>
    </tr>
	
	<tr>
	<td></td>
  <td>Place of Incorporation(If it is a corporation):</td>
 <td><input type="text" name="shareholderPlace"  size="97" value="<?php echo$_SESSION['shareholderPlace']; ?>"></td>
  </tr>
  
  	  <tr>
	<td></td>
  <td>Residential Address/Registered Office Address (If it is a corporation):</td>
  <td><textarea name="shareholderAddress" rows="5" cols="100"><?php echo $_SESSION['shareholderAddress'];?></textarea></td>
    </tr>

    </tr>
	  <tr>
	<td></td>	  
  <td>Email(Compulsory):</td>
  <td><input type="text" name="shareholderEmail"  size="97" value="<?php echo$_SESSION['shareholderEmail']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Contact No.:</td>
  <td><input type="text" name="shareholderContact"  size="97" value="<?php echo$_SESSION['shareholderContact']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Designation(Individual)/Name of Official Corporate Representative:</td>
   <td><input type="text" name="shareholderDesignation"  size="97" value="<?php echo$_SESSION['shareholderDesignation']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Share(s) taken up:</td>
   <td><input type="text" name="shareholderShare" size="97" value="<?php echo$_SESSION['shareholderShare']; ?>"></td>
    </tr>


	  <tr>
    <td></td>
    <td></td>
   <td></td>
    </tr>
	  <tr>






	  <tr>
    <td>b.</td>
    <td>*Name:</td>
   <td><input type="text" name="shareholderName2"  size="97" value="<?php echo$_SESSION['shareholderName2']; ?>"></td>
    </tr>
	  <tr>
	<td></td>
  <td>I/C No./Company No:</td>
  <td><input type="text" name="shareholderICNo2"  size="97" value="<?php echo$_SESSION['shareholderICNo2']; ?>"></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Nationality:</td>
   <td><input type="text" name="shareholderNationality2"  size="97" value="<?php echo$_SESSION['shareholderNationality2']; ?>"></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
   <td><input type="text" name="shareholderRace2" size="97" value="<?php echo$_SESSION['shareholderRace2']; ?>"></td>
    </tr>
	
	<tr>
	<td></td>
  <td>Place of Incorporation(If it is a corporation):</td>
 <td><input type="text" name="shareholderPlace2"  size="97" value="<?php echo$_SESSION['shareholderPlace2']; ?>"></td>
  </tr>
  
  	  <tr>
	<td></td>
  <td>Residential Address/Registered Office Address (If it is a corporation):</td>
  <td><textarea name="shareholderAddress2" rows="5" cols="100"><?php echo $_SESSION['shareholderAddress2'];?></textarea></td>
    </tr>

    </tr>
	  <tr>
	<td></td>	  
  <td>*Email(Compulsory) :</td>
  <td><input type="text" name="shareholderEmail2"  size="97" value="<?php echo$_SESSION['shareholderEmail2']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Contact No.:</td>
  <td><input type="text" name="shareholderContact2"  size="97" value="<?php echo$_SESSION['shareholderContact2']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Designation(Individual)/Name of Official Corporate Representative:</td>
   <td><input type="text" name="shareholderDesignation2"  size="97" value="<?php echo$_SESSION['shareholderDesignation2']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Share(s) taken up:</td>
   <td><input type="text" name="shareholderShare2" size="97" value="<?php echo$_SESSION['shareholderShare2']; ?>"></td>
    </tr>



  
<tr>
    <td colspan="2"><input type="submit" name="submit" value="NextPage"></td>
  </tr>
  
</table>
</form>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>