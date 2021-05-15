<?php
	session_start();
	include 'config.php';

	if(isset($_GET['approve'])) {
        $id = $_GET['approve'];
        $query = "UPDATE `requests` SET status='Approved' where `request_id` = '$id'; ";

        if (mysqli_query($conn, $query)) {
            $_SESSION['response']="Approved successfully!";
            $_SESSION['res_type']="success";
            header('location:client.php');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
	}
	
	if(isset($_GET['reject'])) {
        $id = $_GET['reject'];
        $query = "UPDATE `requests` SET status='Rejected' where `request_id` = '$id'; ";

        if (mysqli_query($conn, $query)) {
            $_SESSION['response']="Rejected successfully!";
            $_SESSION['res_type']="success";
            header('location:client.php');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

?>