<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Medi BASE</title>
<!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom style for url -- adding icon-->
  <link rel="shortcut icon" type="image/x-icon" href="img/bg_image.jpg">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/font-awesome.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<script src="assets/js/ace-extra.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"  style="background-color:#00BFFF;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon">
          <img src="img/bg_image.jpg" style="width:200px; height:55px;">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider my-0" style="background-color:white;">
       <!-- Nav Item - Register Guest -->
      <li class="nav-item active">
        <a class="nav-link" href="patient_form.php">
          <i class="fas fa-registered"></i>
          <span>Register New Patient</span></a>
      </li>
      <hr class="sidebar-divider my-0" style="background-color:white;">
      <!-- Nav Item - Guest Report -->
      <li class="nav-item active">
        <a class="nav-link" href="doctor_form.php">
          <i class="fas fa-user"></i>
          <span>Add Doctor</span></a>
      </li>
      <hr class="sidebar-divider my-0" style="background-color:white;">
      <!-- Nav Item - Guest Report -->
      <li class="nav-item active">
        <a class="nav-link" href="pharmacist_form.php">
          <i class="fas fa-user"></i>
          <span>Add Pharmacist</span></a>
      </li>
      <hr class="sidebar-divider my-0" style="background-color:white;">
      <!-- Nav Item - Guest Report -->
      <li class="nav-item active">
        <a class="nav-link" href="admin_report.php">
          <i class="fas fa-flag-checkered"></i>
          <span>View Report</span></a>
      </li>
      <hr class="sidebar-divider my-0" style="background-color:white;">
      <!-- Nav Item - Guest Report -->
      <li class="nav-item active">
        <a class="nav-link" href="pharmacist_form.php">
          <i class="fas fa-flag-checkered"></i>
          <span>Setting</span></a>
      </li>
      <hr class="sidebar-divider my-0" style="background-color:white;">

         <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        
      </div>

    </ul>
    <!-- End of Sidebar -->
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
          <span class="mr-2 d-none d-lg-inline small" style="color:#d51709;">Admin</span>
          <img class="img-profile rounded-circle" src="img/photo.jpg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2" style="color:#d51709;"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->