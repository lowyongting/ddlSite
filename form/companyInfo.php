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

<font color='red'>
<?php
session_start(); 
?>
 <span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo  $_SESSION ['error'];
 unset($_SESSION['error']);
 }
?>
 </span>

</font>

<form action="directorInfo.php" method="post">
<table border="1">	 

  <tr>
  <td>(1)</td>
  <td><b>*PROPOSED NAME(S) TO SEARCH:</td>
  <td><textarea name="ProposedName" rows="5" cols="100 " id="ProposedName" required ></textarea></td>
    </tr>
	
  <tr>
    <td>(2)</td>
    <td><b>*PAID UP CAPITAL:</td>
    <td><input type="number" min="0" name="PaidUpCapital" placeholder="RM" autofocus size="50" id="PaidUpCapital" required></td>
  </tr>
  <tr>
    <td>(3)</td>
    <td><b>*NATURE OF BUSINESS:</td>
	<td><textarea name="NatureOfBusiness" rows="5" cols="100" id="NatureOfBusiness" required ></textarea></td>
  <tr>
    <td>(3a)</td>
    <td><b>*BUSINESS ADDRESS/SERVICE ADDRESS:</td>
    <td><textarea name="BusinessAddress" rows="5" cols="100" id="BusinessAddress" required ></textarea></td>
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

