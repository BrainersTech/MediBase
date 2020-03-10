<?php
include_once('header.php')
?>

       <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold" style="color:#d51709;">Patient Record</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive"> 
              <div class="row">
    <div class="col-md-2">
    <image src="img/photo.jpg" style="width:80%; height:200px;">
    </div>
    <div class="col-md-10">
    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0" style="color:#d51709;">
                <tr>
        <td>ID</td></td>
         </tr>
       <tr>
        <td>Fullname</td></td>
        </tr>
        <tr>
        <td>Phone Number</td></td>
        </tr>
        <tr>
        <td>Last Visit</td></td>
        </tr>
        <tr>
        <td>Blood Pressure</td></td>
        </tr>
        <td>Sugar Level</td></td>
        </tr>
        </tr>
                </table>
    </div>
    <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0" style="color:#d51709;" >
                  <thead class="thead-dark">
                    <tr>
                      <th>Date</th>
                      <th>Description</th>
                      <th>Doctor</th>
                      <th>Appointment</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td><a href="admin_full_patient.php"><button type="button" class="btn btn-outline-danger">More Details</button></a></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td><a href="admin_full_patient.php"><button type="button" class="btn btn-outline-danger">More Details</button></a></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td><a href="admin_full_patient.php"><button type="button" class="btn btn-outline-danger">More Details</button></a></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td><a href="admin_full_patient.php"><button type="button" class="btn btn-outline-danger">More Details</button></a></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td><a href="admin_full_patient.php"><button type="button" class="btn btn-outline-danger">More Details</button></a></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td><a href="admin_full_patient.php"><button type="button" class="btn btn-outline-danger">More Details</button></a></td>
                    </tr>
                    </tbody>
                </table>
              </div>
             
          </div>
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