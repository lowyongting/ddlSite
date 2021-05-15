<?php
  include('actionAcc.php');
  if(!isset($_SESSION['admin_id'])) {
    header("location: ../adminlogin.php");
  }
  
  include('master/header.php'); 
  include('master/navbar.php'); 
?>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <hr>
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
    </div>
    <div class="row">
      <!--  -->
      <div class="col-md-12">
        <?php
          $query = 'SELECT * FROM accountingservices';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
          $row_no = 1;
        ?>
        <h3 class="text-center text-info">Accounting Service Info</h3>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Service Info</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row_no; ?></td>
              <td style="width:900px;"><?= $row['service']; ?></td>
              <td>
              
                <a href="editAccounting.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">
                  <i class="fas fa-edit"></i>
                  Edit
                </a>
                <a href="actionAcc.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want delete this record?');">
                  <i class="fas fa-trash-alt"></i>
                  Delete
                </a>
                
              </td>
            </tr>
            <?php $row_no += 1; } ?>
            <tr>
                <td> <a href="editAccounting.php" class="badge badge-primary p-2">Add Data</a> </td>
                <td></td> <td></td> <td></td> 
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>

<?php
  // include('master/scripts.php');
  include('master/footer.php');
?>