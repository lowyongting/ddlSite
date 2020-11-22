<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Page1</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Company Information </h3>
                        </div>
                        <div class="card-body">
						
<form action="directorInfoBack.php" method="post">
<?php session_start();
  
?>
<font color='red'>
 <span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
?>
 </span>
 </font>

<?php 
    if($_POST){
	$_SESSION['ProposedName'] = ($_POST['ProposedName']);
	$_SESSION['PaidUpCapital'] = ( $_POST['PaidUpCapital']);
	$_SESSION['NatureOfBusiness'] = ( $_POST['NatureOfBusiness']);
	$_SESSION['BusinessAddress'] = ($_POST['BusinessAddress']);
	}
?>


<table border="1">

  <tr>
  <td>(1)</td>
  <td><b>*PORPOSED NAME(S) TO SEARCH:</td>
  <td><textarea name="ProposedName" rows="5" cols="100 " id="ProposedName"  required><?php echo $_SESSION['ProposedName'];?></textarea></td>
    </tr>
	
  <tr>
    <td>(2)</td>
    <td><b>*PAID UP CAPITAL:</td>
    <td><input type="number" min="0" name="PaidUpCapital" placeholder="RM" autofocus size="50" id="PaidUpCapital" value="<?php echo $_SESSION['PaidUpCapital']; ?>" required></td>
  </tr>
  <tr>
    <td>(3)</td>
    <td><b>*NATURE OF BUSINESS:</td>
	<td><textarea name="NatureOfBusiness" rows="5" cols="100" id="NatureOfBusiness" required><?php echo $_SESSION['NatureOfBusiness'];?></textarea></td>
  <tr>
    <td>(3a)</td>
    <td><b>*BUSINESS ADDRESS/SERVICE ADDRESS:</td>
    <td><textarea name="BusinessAddress" rows="5" cols="100" id="BusinessAddress" required><?php echo $_SESSION['BusinessAddress'];?></textarea></td>
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