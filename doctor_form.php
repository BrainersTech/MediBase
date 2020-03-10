<?php
include_once('header.php')
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0" style="color:#d51709;">Register New Doctor</h1>
          </div>

          <!-- Content Row -->
          <div class="align-items-center">
         
          <div class="row">
              <div class="col-lg-2">
              </div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">PLEASE ENTER THE DOCTOR ID</h1>
                  </div>
                  <form class="user" method="" action="" style="width:100%;">
                    <div class="form-group">
                      <input type="text" name="hosp_code" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter ID Here" required>
                    </div>
                    <input type="submit" name="login" value="ADD DOCTOR" class="btn btn-outline-danger btn-user btn-block" href="staff_id.php">
                    
                  </form>
                </div>
              

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-outline-danger" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
