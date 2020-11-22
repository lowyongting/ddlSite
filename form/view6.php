<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Page6</title>
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


<?php
include("em.php");



$query = mysqli_query($con, "SELECT * FROM proposal6");

echo '<table border="1"><tr>
	<td>No</td>
	<td></td>
	<td></td>
	<td> </td>
	<td></td>
	<td></td>
	<td></td>
	<td> </td>
	<td> </td>
	<td> </td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	
		

	</tr>';
while($row = mysqli_fetch_array($query)){
	echo '<tr>
		<td>'.$row['ID6'].'</td>
	 <td>'.$row['pName'].'</td>
	 <td>'.$row['pIC'].'</td>
	<td>'.$row['pNationality'].'</td>
	<td>'.$row['pRace'].'</td>
	 <td>'.$row['pAddress'].'</td>
	 <td>'.$row['pEmail'].'</td>


		</tr>';
}
echo '</table>';

?>
<a href="view1.php">1</a>
<a href="view2.php">2</a>
<a href="view3.php">3</a>
<a href="view4.php">4</a>
<a href="view5.php">5</a>
6
<a href="view7.php">7</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>