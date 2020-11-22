<?php
	session_start();
	include 'config.php';

	$update=false;
	$id="";
	$service="";

	if(isset($_POST['add'])){
		$service=$_POST['service'];

		$query="INSERT INTO secretarialservices(services)VALUES(?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("s",$service);
		$stmt->execute();

		header('location:secretarial.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$sql="SELECT services FROM secretarialservices WHERE id=?";
		$stmt2=$conn->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$query="DELETE FROM secretarialservices WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:secretarial.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM secretarialservices WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$service=$row['services'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$service=$_POST['service'];

		$query="UPDATE secretarialservices SET services=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("si",$service,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:secretarial.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM secretarialservices WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vservice=$row['services'];
	}

	if(isset($_POST['cancel'])) {
		header("Location:secretarial.php");
	}
?>