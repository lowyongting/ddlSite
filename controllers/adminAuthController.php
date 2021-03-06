<?php

session_start();

require 'config/db.php';


$errors = array();
$username ="";
$email = "";

// if user clicks on the sign up button
if(isset($_POST['adminsignup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    //Validation
    if(empty($username)){
        $errors['username'] = "Username required";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email address is invalid";
    }
    
    if(empty($email)){
        $errors['email'] = "Email required";
    }

    if(empty($password)){
        $errors['password'] = "Password required";
    }

    if($password !== $passwordConf){
        $errors['password'] = "The two password does not match ";
    }

    $emailQuery = "SELECT * FROM admin WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0) {
        $errors['emai'] = "Email already exist";
    }


    if (count($errors) === 0) {


    $sql = "INSERT INTO admin (username, email, password) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $username, $email, $password);
    
    
    if ($stmt->execute()) {
        // login user
        $user_id = $conn->insert_id;
        $_SESSION['admin_id'] = $user_id;
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_email'] = $email;


        // set flash message
        $_SESSION['message'] = "You are now logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: adminindex.php');
        exit();

    } else {
        $errors['db_error'] = "Database error: failed to register";
    }

    }
    

}



// if user clicks on login
if(isset($_POST['adminlogin-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Validation
    if(empty($username)){
        $errors['username'] = "Username required";
    }

    if(empty($password)){
        $errors['password'] = "Password required";
    }



    if(count($errors) === 0){

        $sql = "SELECT * FROM admin WHERE email=? OR username=? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $username, $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if($user != null) {
            $passwords = $user['password'];

            if ($password === $passwords) {
                // login success
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['admin_username'] = $user['username'];
                $_SESSION['admin_email'] = $user['email'];
                // set flash message
                $_SESSION['message'] = "You are now logged in!";
                $_SESSION['alert-class'] = "alert-success";
                header('location: admin/index.php');
                exit();
        
            } else {
                $errors['login_fail'] = "Wrong Credential";
            }
        } else {
            $errors['login_fail'] = "Wrong Credential";
        }
    }


}

// logout user

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin_username']);
    unset($_SESSION['admin_email']);
    unset($_SESSION['verify']);
    header('location: adminlogin.php');
    exit();

}