<?php
include_once('header.php')
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0" style="color:#d51709;">HOSPITAL DOCTORS LIST TABLE</h1>
          </div>
                <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <input type="text" class="search" placeholder="Search using the Patient ID" style="width:50%;">
              <a href="more_details.php"><button type="button" class="btn btn-outline-danger">SEARCH</button></a>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0" style="color:#d51709;" >
                  <thead class="thead-dark">
                    <tr>
                    <th></th>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Phone Number</th>
                      <th>Date Registered</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>
                        <image src="img/photo.jpg" style="width:50px; height:50px;"></td>
                    <td>KD123456789	<span class="label label-info arrowed arrowed-in-right">Active</span></td>
                    <td>Umar</td>
                    <td>Faruq Abdullahi</td>
                    <td>08124578394</td>
                    <td>11/12/2019</td>

                    <td><a href="more_details.php"><button type="button" class="btn btn-outline-danger">More Details</button></a>
                        </t><a href="more_details.php"><button type="button" class="btn btn-outline-danger">REMOVE</button></a></td>
                    </tr>
                    <tr>
                    <td>
                        <image src="img/photo2.jpg" style="width:50px; height:50px;"></td>
                    <td>KD123456789</td>
                    <td>Muhammad</td>
                    <td>Ahmad</td>
                    <td>08186966350</td>
                    <td>11/12/2019</td>

                    <td><a href="more_details.php"><button type="button" class="btn btn-outline-danger">More Details</button></a>
                    </t><a href="more_details.php"><button type="button" class="btn btn-outline-danger">REMOVE</button></a></td>
                    </tr>
                    <tr>
                    <td>
                        <image src="img/avatar.png" style="width:50px; height:50px;"></td>
                    <td>KD123456789<span class="label label-info arrowed arrowed-in-right">Active</span></td>
                    <td>Muhammad</td>
                    <td>Sani</td>
                    <td>09023456789</td>
                    <td>11/12/2019</td>

                    <td><a href="more_details.php"><button type="button" class="btn btn-outline-danger">More Details</button></a>
                    </t><a href="more_details.php"><button type="button" class="btn btn-outline-danger">REMOVE</button></a></td>
                    </tr>
                    </tbody>
                </table>
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
