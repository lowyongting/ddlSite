<?php
  include('actionClient.php');
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
          $query = 'SELECT * FROM requests';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <h3 class="text-center text-info">Client's Form Submission</h3>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Form id</th>
              <th>Date</th>
              <th>User id</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['request_id']; ?></td>
              <td style="width:230px;"><?= $row['form_id']; ?></td>
              <td style="width:220px;"><?= $row['date_request']; ?></td>
              <td style="width:220px;"><?= $row['user_id']; ?></td>
              <td style="width:220px;"><?= $row['status']; ?></td>
              <td>
              
                <a href="viewForm.php?id=<?= $row['request_id']; ?>" class="badge badge-success p-2"> 
                    <i class="fas fa-eye"></i>
                    View Form 
                </a>
                <a href="approve.php?id=<?= $row['request_id']; ?>" class="badge badge-success p-2">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    Approve 
                </a>
                <a href="reject.php?id=<?= $row['request_id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want reject this form?');"> 
                    <i class="fa fa-ban" aria-hidden="true"></i>
                    Reject 
                </a> |
                
              </td>
            </tr>
            <?php } ?>
            
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