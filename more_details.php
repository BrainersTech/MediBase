<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Medi Base</title>
<!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <!-- Custom style for url -- adding icon-->
   <link rel="shortcut icon" type="image/x-icon" href="img/bg_image.jpg">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          
        

          <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small" style="color:#d51709;">Welcome Muhammed Ahmed</span>
                <img class="img-profile rounded-circle" src="img/photo.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 " style="color:#d51709;"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

       <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold" style="color:#d51709;">Patient Detail</h6>
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
        <td>ID: KD123456789</td></td>
         </tr>
       <tr>
        <td>Fullname: UMAR FARUQ ABDULLAHI</td></td>
        </tr>
        <tr>
        <td>Phone Number: 0814567823</td></td>
        </tr>
        <tr>
        <td>Last Visit: 11/12/2019</td></td>
        </tr>
        <tr>
        <td>Blood Pressure: 23</td></td>
        </tr>
        <td>Sugar Level: 12</td></td>
        </tr>
        </tr>
     </table>
    </div>
   <table class="table table-hover" id="dataTable" width="100%" cellspacing="0" >
        <td>Doctor: Dr. chinyedu Huzie Samual</td>
        <td></td>
      </tr>
      <tr>
        <td>description</td>
        <td></td>
      </tr>
      <tr>
        <td>Drug Prescribe</td>
        <td></td>
      </tr>
      <tr>
        <td>Test</td>
        <td></td>
      </tr>
      
      <tr>
        <td></td>
        <td>
          <a href='add_record.php' class='btn btn-outline-danger'>ADD RECORD</a>
        </td>
        <td>
          <a href='patient_details.php' class='btn btn-outline-danger'>Back to Patient Records</a>
            <tr>
            </td>
            </tr>
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
