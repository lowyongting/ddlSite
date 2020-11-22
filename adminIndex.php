<?php 
require_once 'controllers/adminAuthController.php'; 

if (!isset($_SESSION['id'])) {
    header('location: adminlogin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css" >

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Homepage</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class= "col-md-4 offset-md-4 form-div login" >

            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert <?php echo $_SESSION['alert-class']; ?>">
                    <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                    unset($_SESSION['alert-class']);
                    ?>
                </div>
                <?php endif; ?>

                <h3>Welcome Admin, <?php echo $_SESSION['username']; ?></h3>

                <a href="adminindex.php?logout=1" class="logout">logout</a>

                
                <button class="btn btn-block btn-lg btn-primary">Next Page</button>

            </div>
        </div>
    </div>

</body>
</html>