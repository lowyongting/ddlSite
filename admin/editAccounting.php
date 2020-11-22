<?php
  include 'actionAcc.php';
  include('master/header.php'); 
  include('master/navbar.php');
?>


<div class="container-fluid" style="margin-top:10%;">
    <div class="row justify-content-center">   
        <div class="col-md-4">
        <h3 class="text-center text-info">Acconting Service</h3>
        <form action="actionAcc.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="service" value="<?= $service; ?>" class="form-control" placeholder="Enter name" required>
          </div>
          
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
            <?php } else { ?>
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
            <?php } ?>
            <button type="submit" name="cancel" class="btn btn-danger btn-block"> Cancel </button>
          </div>
        </form>
        </div>
    </div>
</div>

<?php
  // include('master/scripts.php');
  include('master/footer.php');
?>