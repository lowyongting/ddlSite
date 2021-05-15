<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Check List</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Registration Form in PHP</h3>
                        </div>
                        <div class="card-body">
<form action="upload.php" method="post">
 <td colspan="2"><input type="button" value="Back" onclick="window.location = 'otherInfoBack.php'"></td>
<?php session_start();  
?>

 
<?php 
    if($_POST){		
	$_SESSION['pName'] = ($_POST['pName']);
	$_SESSION['pIC'] = ( $_POST['pIC']);
	$_SESSION['pNationality'] = ( $_POST['pNationality']);
	$_SESSION['pRace'] = ($_POST['pRace']);
	$_SESSION['pAddress'] = ($_POST['pAddress']);
	$_SESSION['pEmail'] = ($_POST['pEmail']);
	$_SESSION['bank_Name'] = ($_POST['bank_Name']);
	$_SESSION['bank_Branch'] = ($_POST['bank_Branch']);
	$_SESSION['bank_Signatory'] = ($_POST['bank_Signatory']);
	$_SESSION['Bank_Conditions'] = ($_POST['Bank_Conditions']);

	}
?>


<table border="1">

  <tr>
  <td>(1)</td>
  <td><b>PORPOSED NAME(S) TO SEARCH:</td>
  <td><?php echo $_SESSION['ProposedName'];?></textarea></td>
    </tr>
	
  <tr>
    <td>(2)</td>
    <td><b>PAID UP CAPITAL:</td>
    <td><?php echo $_SESSION['PaidUpCapital']; ?> </td>
  </tr>
  <tr>
    <td>(3)</td>
    <td><b>NATURE OF BUSINESS:</td>
	<td><?php echo $_SESSION['NatureOfBusiness'];?></textarea></td>
  <tr>
    <td>(3a)</td>
    <td><b>BUSINESS ADDRESS/SERVICE ADDRESS:</td>
    <td><?php echo $_SESSION['BusinessAddress'];?></textarea></td>
  </tr>
  
  	  <tr>
    <td></td>
    <td></td>
   <td></td>
    </tr>
	  <tr>
	  
  <tr>
    <td>(4)</td>
  <td><b>First Directors(s)</td>
    </tr>
	  <tr>
    <td>a.</td>
    <td>Name:</td>
   <td><?php echo$_SESSION['Name']; ?></td>
    </tr>
	  <tr>
	<td></td>
  <td>NRIC/Passport:</td>
  <td><?php echo$_SESSION['NRIC']; ?></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Passport Expiry Date:</td>
   <td><?php echo$_SESSION['PassportExpiry']; ?></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Date of Birth:</td>
   <td><?php echo$_SESSION['DateOfBirth']; ?></td>
    </tr>
	
	<tr>
	<td></td>
  <td>Gender:</td>
   <td>

<?php echo$_SESSION['Gender']; ?>
    </td>
  </tr>
  
  	  <tr>
	<td></td>
  <td>Nationality:</td>
  <td><?php echo$_SESSION['Nationality']; ?></td>
    </tr>

    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
  <td><?php echo$_SESSION['Race']; ?></td>
    </tr>
	<td></td>	  
  <td>Residential Address:</td>
  <td><?php echo $_SESSION['ResidentialAddress'];?></td>
    </tr>
	<td></td>	  
  <td>Email:</td>
   <td><?php echo$_SESSION['Email']; ?></td>
    </tr>
	<td></td>	  
  <td>Share(s) taken up:</td>
   <td><?php echo$_SESSION['Share']; ?></td>
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
   <td><?php echo$_SESSION['sName']; ?></td>
    </tr>
	  <tr>
	<td></td>
  <td>NRIC/Passport:</td>
  <td><?php echo$_SESSION['sNRIC']; ?></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Passport Expiry Date:</td>
   <td><?php echo$_SESSION['sPassportExpiry']; ?></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Date of Birth:</td>
   <td><?php echo$_SESSION['sDOB']; ?></td>
    </tr>
	
	<tr>
	<td></td>
  <td>Gender:</td>
   <td>
<?php echo$_SESSION['sGender']; ?>
    </td>
  </tr>
  
  	  <tr>
	<td></td>
  <td>Nationality:</td>
  <td><?php echo$_SESSION['sNationality']; ?></td>
    </tr>

    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
  <td><?php echo$_SESSION['sRace']; ?></td>
    </tr>
	<td></td>	  
  <td>Residential Address:</td>
  <td><?php echo $_SESSION['sAddress'];?></td>
    </tr>
	<td></td>	  
  <td>Email:</td>
   <td><?php echo$_SESSION['sEmail']; ?></td>
    </tr>
	<td></td>	  
  <td>Share(s) taken up:</td>
   <td><?php echo$_SESSION['sShare']; ?></td>
    </tr>
  
  	  <tr>
    <td></td>
    <td><?php echo"hid"; ?></td>
   <td></td>
    </tr>
	  <tr>
  
  
  <tr>
    <td>(5)</td>
  <td><b>OTHER SHAREHOLDER(S),WHO IS NOT A DIRECTOR(IF ANY)</td>
    </tr>
	  <tr>
    <td>a.</td>
    <td>Name:</td>
   <td><?php echo$_SESSION['shareholderName']; ?></td>
    </tr>
	  <tr>
	<td></td>
  <td>I/C No./Company No:</td>
  <td><?php echo$_SESSION['shareholderICNo']; ?></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Nationality:</td>
   <td><?php echo$_SESSION['shareholderNationality']; ?></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
   <td><?php echo$_SESSION['shareholderRace']; ?></td>
    </tr>
	
	<tr>
	<td></td>
  <td>Place of Incorporation(If it is a corporation):</td>
 <td><?php echo$_SESSION['shareholderPlace']; ?></td>
  </tr>
  
  	  <tr>
	<td></td>
  <td>Residential Address/Registered Office Address (If it is a corporation):</td>
  <td><?php echo $_SESSION['shareholderAddress'];?></textarea></td>
    </tr>

    </tr>
	  <tr>
	<td></td>	  
  <td>Email(Compulsory):</td>
  <td><?php echo$_SESSION['shareholderEmail']; ?></td>
    </tr>
	<td></td>	  
  <td>Contact No.:</td>
  <td><?php echo$_SESSION['shareholderContact']; ?></td>
    </tr>
	<td></td>	  
  <td>Designation(Individual)/Name of Official Corporate Representative:</td>
   <td><?php echo$_SESSION['shareholderDesignation']; ?></td>
    </tr>
	<td></td>	  
  <td>Share(s) taken up:</td>
   <td><?php echo$_SESSION['shareholderShare']; ?></td>
    </tr>

	  <tr>
    <td>b.</td>
    <td>*Name:</td>
   <td><?php echo$_SESSION['shareholderName2']; ?></td>
    </tr>
	  <tr>
	<td></td>
  <td>I/C No./Company No:</td>
  <td><?php echo$_SESSION['shareholderICNo2']; ?></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Nationality:</td>
   <td><?php echo$_SESSION['shareholderNationality2']; ?></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
   <td><?php echo$_SESSION['shareholderRace2']; ?></td>
    </tr>
	
	<tr>
	<td></td>
  <td>Place of Incorporation(If it is a corporation):</td>
 <td><?php echo$_SESSION['shareholderPlace2']; ?></td>
  </tr>
  
  	  <tr>
	<td></td>
  <td>Residential Address/Registered Office Address (If it is a corporation):</td>
  <td><?php echo $_SESSION['shareholderAddress2'];?></td>
    </tr>

    </tr>
	  <tr>
	<td></td>	  
  <td>*Email(Compulsory) :</td>
  <td><?php echo$_SESSION['shareholderEmail2']; ?></td>
    </tr>
	<td></td>	  
  <td>Contact No.:</td>
  <td><?php echo$_SESSION['shareholderContact2']; ?></td>
    </tr>
	<td></td>	  
  <td>Designation(Individual)/Name of Official Corporate Representative:</td>
   <td><?php echo$_SESSION['shareholderDesignation2']; ?></td>
    </tr>
	<td></td>	  
  <td>Share(s) taken up:</td>
   <td><?php echo$_SESSION['shareholderShare2']; ?></td>
    </tr>





	  <tr>
    <td></td>
    <td></td>
   <td></td>
    </tr>
	  <tr>

    <td>(6)</td>
  <td><b>PARTICULARS OF NEXT OF KIN</td>
    </tr>
	  <tr>
	  <tr>
    <td>a.</td>
    <td>Name:</td>
   <td><?php echo$_SESSION['pName']; ?></td>
    </tr>
	  <tr>
	<td></td>
  <td>I/C No./Passport No:</td>
  <td><?php echo$_SESSION['pIC']; ?></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Nationality:</td>
   <td><?php echo$_SESSION['pNationality']; ?></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Race:</td>
   <td><?php echo$_SESSION['pRace']; ?></td>
    </tr>
  	  <tr>
	<td></td>
  <td>Residential Address/Registered Office Address (If it is a corporation):</td>
  <td><?php echo $_SESSION['pAddress'];?></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Email(Compulsory):</td>
  <td><?php echo$_SESSION['pEmail']; ?></td>
    </tr>

	  <tr>
    <td></td>
    <td></td>
   <td></td>
    </tr>
	  <tr>

<tr>
    <td>(7)</td>
  <td><b>OPENING OF COMPANY'S BANK ACCOUNT AFTER INCORPORATION</td>
    </tr>
	  <tr>
	  <tr>
    <td>a.</td>
    <td>Name of bank:</td>
   <td><?php echo$_SESSION['bank_Name']; ?></td>
    </tr>
	  <tr>
	<td></td>
  <td>Bank Branch:</td>
  <td><?php echo$_SESSION['bank_Branch']; ?></td>
    </tr>
	  <tr>
	  
	<td></td>
  <td>Authorised Signatory(ies):</td>
  <td><?php echo $_SESSION['bank_Signatory'];?></td>
    </tr>
	  <tr>
	<td></td>	  
  <td>Conditions of signing cheque:</td>
  <td><?php echo $_SESSION['Bank_Conditions'];?></td>
    </tr>





	  <tr>
    <td></td>
    <td></td>
   <td></td>
    </tr>
	  <tr>  
  
  Confirm to submit?


    <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
	
	  <script src="CSS/bootstrap-validate.js"></script>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>