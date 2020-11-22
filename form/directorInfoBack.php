<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Page2</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Director (s) </h3>
                        </div>
                        <div class="card-body">
						
						
<form action="shareholderInfoBack.php" method="post">
<?php session_start();  

if (isset($_POST[''])){
 if (empty($_POST[''])
 || empty($_POST[''])){
 $_SESSION['error2'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: companyInfoBack.php");
 }
}
?>

 <span id="error2">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error2'])) {
 echo $_SESSION['error2'];
 unset($_SESSION['error2']);
 }
?>
 </span>

 <?php 
    if($_POST){
	$_SESSION['ProposedName'] = ($_POST['ProposedName']);
	$_SESSION['PaidUpCapital'] = ( $_POST['PaidUpCapital']);
	$_SESSION['NatureOfBusiness'] = ( $_POST['NatureOfBusiness']);
	$_SESSION['BusinessAddress'] = ($_POST['BusinessAddress']);
	}
?>


<table border="1">	
 <td colspan="2"><input type="button" value="Back" onclick="window.location = 'companyInfoBack.php'"></td>
<tr>
    <td>(4)</td>
  <td><b>First Directors(s)</td>
    </tr>
	  <tr>
    <td>a.</td>
    <td>Name:</td>
   <td><input type="text" name="Name"  size="97"  value="<?php echo$_SESSION['Name']; ?>"></td>
    </tr>
	  <tr>
	<td></td>
  <td>NRIC/Passport:</td>
  <td><input type="text" name="NRIC"  size="97" value="<?php echo$_SESSION['NRIC']; ?>"></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Passport Expiry Date:</td>
   <td><input type="date" name="PassportExpiry"  size="97" value="<?php echo$_SESSION['PassportExpiry']; ?>"></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Date of Birth:</td>
   <td><input type="date" name="DateOfBirth" placeholder="YYYY-MM-DD" size="97" value="<?php echo$_SESSION['DateOfBirth']; ?>"></td>
    </tr>
	
	<tr>
	<td></td>
  <td>Gender:</td>
   <td>
  <select name="Gender">
<option value="">--option--</option>
<option value="Male" <?php if($_SESSION['Gender'] == "Male") echo " SELECTED"; ?>>Male</option>
<option value="Female" <?php if($_SESSION['Gender'] == "Female") echo " SELECTED"; ?>>Female</option>
</select>

    </td>
  </tr>
  
  	  <tr>
	<td></td>
  <td>Nationality:</td>
  <td><input type="text" name="Nationality"  size="97" value="<?php echo$_SESSION['Nationality']; ?>"></td>
    </tr>

    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
  <td><input type="text" name="Race"  size="97" value="<?php echo$_SESSION['Race']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Residential Address:</td>
  <td><textarea name="ResidentialAddress" rows="5" cols="100"><?php echo $_SESSION['ResidentialAddress'];?></textarea></textarea></td>
    </tr>
	<td></td>	  
  <td>Email:</td>
   <td><input type="text" name="Email"  size="97" value="<?php echo$_SESSION['Email']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Share(s) taken up:</td>
   <td><input type="text" name="Share" size="97" value="<?php echo$_SESSION['Share']; ?>"></td>
    </tr>

	  <tr>
    <td></td>
    <td></td>
   <td></td>
    </tr>
	  <tr>



	  <tr>
    <td>b.</td>
    <td>Name:</td>
   <td><input type="text" name="sName"  size="97" value="<?php echo$_SESSION['sName']; ?>"></td>
    </tr>
	  <tr>
	<td></td>
  <td>NRIC/Passport:</td>
  <td><input type="text" name="sNRIC"  size="97" value="<?php echo$_SESSION['sNRIC']; ?>"></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Passport Expiry Date:</td>
   <td><input type="date" name="sPassportExpiry"  size="97" value="<?php echo$_SESSION['sPassportExpiry']; ?>"></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Date of Birth:</td>
   <td><input type="date" name="sDOB" placeholder="YYYY-MM-DD" size="97" value="<?php echo$_SESSION['sDOB']; ?>"></td>
    </tr>
	
	<tr>
	<td></td>
  <td>Gender:</td>
   <td>
  <select name="sGender">
	<option value="">--option--</option>
<option value="Male" <?php if($_SESSION['sGender'] == "Male") echo " SELECTED"; ?>>Male</option>
<option value="Female" <?php if($_SESSION['sGender'] == "Female") echo " SELECTED"; ?>>Female</option>
</select>

    </td>
  </tr>
  
  	  <tr>
	<td></td>
  <td>Nationality:</td>
  <td><input type="text" name="sNationality"  size="97" value="<?php echo$_SESSION['sNationality']; ?>"></td>
    </tr>

    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
  <td><input type="text" name="sRace"  size="97" value="<?php echo$_SESSION['sRace']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Residential Address:</td>
  <td><textarea name="sAddress" rows="5" cols="100"><?php echo $_SESSION['sAddress'];?></textarea></td>
    </tr>
	<td></td>	  
  <td>Email:</td>
   <td><input type="text" name="sEmail"  size="97" value="<?php echo$_SESSION['sEmail']; ?>"></td>
    </tr>
	<td></td>	  
  <td>Share(s) taken up:</td>
   <td><input type="text" name="sShare" size="97" value="<?php echo$_SESSION['sShare']; ?>"></td>
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