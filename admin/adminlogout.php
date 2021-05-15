<?php
    session_start();
    session_destroy();
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin_username']);
    unset($_SESSION['admin_email']);
    header('location: ../adminlogin.php');
    exit();

?>