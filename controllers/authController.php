<?php

session_start();

require 'config/db.php';


$errors = array();
$username ="";
$email = "";

// if user clicks on the sign up button
if(isset($_POST['signup-btn'])){
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

    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
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
    $password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $username, $email, $password);
    
    
    if ($stmt->execute()) {
        // login user
        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;


        // set flash message
        $_SESSION['message'] = "You are now logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();

    } else {
        $errors['db_error'] = "Database error: failed to register";
    }

    }
    

}



// if user clicks on login
if(isset($_POST['login-btn'])){
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


    $sql = "SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        // login success
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        // set flash message
        $_SESSION['message'] = "You are now logged in!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();

    }else {
        $errors['login_fail'] = "Wrong Credential";
    }
    }


}

// logout user

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verify']);
    header('location: index.php');
    exit();

}