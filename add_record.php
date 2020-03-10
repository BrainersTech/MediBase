<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADD|Record</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom style for url -- adding icon-->
  <link rel="shortcut icon" type="image/x-icon" href="img/bg_image.jpg">
</head>

<body style=background-image:url("img/bg_image.jpg"); >
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center" style="margin-top:200px;">

      <div class="col-xl-8 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-md-4">
                <image src="img/photo.jpg" style="width:80%; height:200px;">
                </div>
                <div class="col-md-8">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0" style="color:#d51709;">
                            <tr>
                    <td>ID: KD123456789</td></td>
                    </tr>
                <tr>
                    <td>Fullname: Umar Abdullahi Frauq</td></td>
                    </tr>
                    <tr>
                    <td>Phone Number: 08186966350</td></td>
                    </tr>
                    <tr>
                    <td>Last Visit: 12/11/2019</td></td>
                    </tr>
                    <tr>
                    <td>Blood Pressure: 23</td></td>
                    </tr>
                    <td>Sugar Level: 12</td></td>
                    </tr>
                    </tr>
                            </table>
                </div>
              <div class="col-lg-2">
              
              </div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">PLEASE FILL THE FORM TO ADD PATIENT RECORD</h1>
                  </div>
                  <form class="user" method="" action="" style="width:100%;">
                    <div class="form-group">
                    <h6 class="h4 text-gray-900 mb-4">* (Required)</h6>
                    <label> Enter Description *</label>
                      <textarea class="form-control" placeholder="Description">
                     </textarea><br>
                    <label> Enter Drug Prescription *</label>
                     <textarea class="form-control" value="Enter Drug Prescription">
                     </textarea><br>
                    <label> Patient Status *</label>
                      <select class="form-control form-control-user" style="height:30px;">
                      <option>GOOD</option>
                      <option>NORMAL</option>
                      <option>CRITICAL</option>
                      </select>
                    </div><br>
                    <label>Appointment Date ( if any )</label>
                    <input type="Date" name="hosp_code" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter ID Here" required><br>
                    <input type="submit" name="add_record" value="ADD RECORD" class="btn btn-outline-danger btn-user btn-block" href="home.php"> 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>

