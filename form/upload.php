<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Submit Successfully</title>
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
					

 <td colspan="2"><input type="button" value="Back" onclick="window.location = '../index.php'"></td>					
<?php 	
	session_start();  		
				
	include("em.php");
if(isset($_POST['submit'])){
	
	
	$p_name = mysqli_real_escape_string($con, $_SESSION['ProposedName']);
	$p_capital = mysqli_real_escape_string($con, $_SESSION['PaidUpCapital']);
	$nature = mysqli_real_escape_string($con, $_SESSION['NatureOfBusiness']);
	$b_add = mysqli_real_escape_string($con, $_SESSION['BusinessAddress']);

	$d1_Name = mysqli_real_escape_string($con, $_SESSION['Name']);
	$d1_ICno = mysqli_real_escape_string($con, $_SESSION['NRIC']);
	$d1_passexp = mysqli_real_escape_string($con, $_SESSION['PassportExpiry']);
	$d1_dob = mysqli_real_escape_string($con, $_SESSION['DateOfBirth']);
	$d1_gen = mysqli_real_escape_string($con, $_SESSION['Gender']);
	$d1Nation = mysqli_real_escape_string($con, $_SESSION['Nationality']);
	$d1Race = mysqli_real_escape_string($con, $_SESSION['Race']);
	$d1_Add = mysqli_real_escape_string($con, $_SESSION['ResidentialAddress']);
	$d1Email = mysqli_real_escape_string($con, $_SESSION['Email']);
	$d1Share = mysqli_real_escape_string($con, $_SESSION['Share']);

	$d2Name = mysqli_real_escape_string($con, $_SESSION['sName']);
	$d2ICno = mysqli_real_escape_string($con, $_SESSION['sNRIC']);
	$d2_passexp = mysqli_real_escape_string($con, $_SESSION['sPassportExpiry']);
	$d2_dob = mysqli_real_escape_string($con, $_SESSION['sDOB']);
	$d2_gen = mysqli_real_escape_string($con, $_SESSION['sGender']);
	$d2Nation = mysqli_real_escape_string($con, $_SESSION['sNationality']);
	$d2Race = mysqli_real_escape_string($con, $_SESSION['sRace']);
	$d2Add = mysqli_real_escape_string($con, $_SESSION['sAddress']);
	$d2Email = mysqli_real_escape_string($con, $_SESSION['sEmail']);
	$d2Share = mysqli_real_escape_string($con, $_SESSION['sShare']);

	$s1Name = mysqli_real_escape_string($con, $_SESSION['shareholderName']);
	$s1IC = mysqli_real_escape_string($con, $_SESSION['shareholderICNo']);
	$s1Nation = mysqli_real_escape_string($con, $_SESSION['shareholderNationality']);
	$s1Race = mysqli_real_escape_string($con, $_SESSION['shareholderRace']);
	$s1Place = mysqli_real_escape_string($con, $_SESSION['shareholderPlace']);
	$s1Address = mysqli_real_escape_string($con, $_SESSION['shareholderAddress']);
	$s1Email = mysqli_real_escape_string($con, $_SESSION['shareholderEmail']);
	$s1Cont = mysqli_real_escape_string($con, $_SESSION['shareholderContact']);
	$s1Desig = mysqli_real_escape_string($con, $_SESSION['shareholderDesignation']);
	$s1Share = mysqli_real_escape_string($con, $_SESSION['shareholderShare']);

	$s2Name = mysqli_real_escape_string($con, $_SESSION['shareholderName2']);
	$s2IC = mysqli_real_escape_string($con, $_SESSION['shareholderICNo2']);
	$s2Nation = mysqli_real_escape_string($con, $_SESSION['shareholderNationality2']);
	$s2Race = mysqli_real_escape_string($con, $_SESSION['shareholderRace2']);
	$s2Place = mysqli_real_escape_string($con, $_SESSION['shareholderPlace2']);
	$s2Address = mysqli_real_escape_string($con, $_SESSION['shareholderAddress2']);
	$s2Email = mysqli_real_escape_string($con, $_SESSION['shareholderEmail2']);
	$s2Cont = mysqli_real_escape_string($con, $_SESSION['shareholderContact2']);
	$s2Desig = mysqli_real_escape_string($con, $_SESSION['shareholderDesignation2']);
	$s2Share = mysqli_real_escape_string($con, $_SESSION['shareholderShare2']);

	$nok_name = mysqli_real_escape_string($con, $_SESSION['pName']);
	$nok_IC = mysqli_real_escape_string($con, $_SESSION['pIC']);
	$nok_Nation = mysqli_real_escape_string($con, $_SESSION['pNationality']);
	$nok_Race = mysqli_real_escape_string($con, $_SESSION['pRace']);
	$nok_Address = mysqli_real_escape_string($con, $_SESSION['pAddress']);
	$nok_Email = mysqli_real_escape_string($con, $_SESSION['pEmail']);
	$bankName = mysqli_real_escape_string($con, $_SESSION['bank_Name']);
	$bankBranch = mysqli_real_escape_string($con, $_SESSION['bank_Branch']);
	$bankSigna = mysqli_real_escape_string($con, $_SESSION['bank_Signatory']);
	$bankCondi = mysqli_real_escape_string($con, $_SESSION['Bank_Conditions']);
	$userid = $_SESSION['id'];
	$formid = uniqid();
	$day_time = date('Y-m-d H:i:s');
	
	$insert = "INSERT INTO forms (form_id, proposed_name, paid_up_capital, nature_business, business_address, d1_name, d1_IC, d1_passport_exp, d1_DOB, d1_gender, d1_nation, d1_race, d1_resident_add, d1_email, d1_share, d2_name, d2_IC, d2_passport_exp, d2_DOB, d2_gender, d2_nation, d2_race, d2_resident_add, d2_email, d2_share, s1_name, s1_IC, s1_nation, s1_race, s1_place, s1_address, s1_email, s1_contact, s1_designation, s1_share, s2_name, s2_IC, s2_nation, s2_race, s2_place, s2_address, s2_email, s2_contact, s2_designation, s2_share, kin_name, kin_IC, kin_nation, kin_race, kin_address, kin_email, bank_name, bank_branch, bank_signatory, bank_condition, user_id) VALUES ('$formid', '$p_name', '$p_capital', '$nature', '$b_add', '$d1_Name', '$d1_ICno', '$d1_passexp', '$d1_dob', '$d1_gen', '$d1Nation', '$d1Race', '$d1_Add', '$d1Email', '$d1Share', '$d2Name', '$d2ICno', '$d2_passexp', '$d2_dob', '$d2_gen', '$d2Nation', '$d2Race', '$d2Add', '$d2Email', '$d2Share', '$s1Name', '$s1IC', '$s1Nation', '$s1Race', '$s1Place', '$s1Address', '$s1Email', '$s1Cont', '$s1Desig', '$s1Share', '$s2Name', '$s2IC', '$s2Nation', '$s2Race', '$s2Place', '$s2Address', '$s2Email', '$s2Cont', '$s2Desig', '$s2Share', '$nok_name', '$nok_IC', '$nok_Nation', '$nok_Race', '$nok_Address', '$nok_Email', '$bankName', '$bankBranch', '$bankSigna', '$bankCondi', '$userid');";
	$insert .= "INSERT INTO requests (form_id, date_request, status, user_id) VALUES ('$formid', '$day_time', 'Pending', '$userid');";
	
	$queryResult = mysqli_multi_query($con, $insert);

	if($queryResult) {
		echo "Records inserted successfully.";
	} 			
	else {			
		echo "Error: " . $insert . "<br>" . mysqli_error($con);
	}

}	 


?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>