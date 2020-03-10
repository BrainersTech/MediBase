<?php
include_once('header.php')
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0" style="color:#d51709;">Register Guest</h1>
          </div>

          <!-- Content Row -->
          <div class="align-items-center">
         <form method="POST" action="register.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label style="color:#d51709;">Surname</label>
                <input type="text" name="fname" class="form-control" id="inlineFormInputName" placeholder="Enter First Name..." required> 
                </div>
                <div class="form-group col-md-6">
                <label style="color:#d51709;">Other Name(s)</label>
                <input type="text" name="lname" class="form-control" id="inlineFormInputName" placeholder="Enter Last Name..." required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Unit Number</label>
                <input type="number" name="phone" class="form-control" id="inlineFormInputNumber" placeholder="Enter Number..." required>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Marital Status</label>
                <select id="inlineForminputState" class="form-control" name="whomtosee" required>
                    <option selected></option>
                    <option>Married</option>
                    <option>Single</option>
                    <option>Divorced</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Date of Birth</label>
                <input type="date" name="phone" class="form-control" id="inlineFormInputNumber" placeholder="Enter Number..." required>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Sex</label>
                <select id="inlineForminputState" class="form-control" name="whomtosee" required>
                    <option selected></option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label style="color:#d51709;">Occupation</label>
                <input type="test" name="phone" class="form-control" id="inlineFormInputNumber" placeholder="Enter Number..." required>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Place of Origin</label>
                <select id="inlineForminputState" class="form-control" name="whomtosee" required>
                    <option selected></option>
                    <option>Adamawa</option>
                    <option>Akwa-ibom</option>
                    <option>Anambra</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Tribe</label>
                <input type="test" name="phone" class="form-control" id="inlineFormInputNumber" placeholder="Enter Number..." required>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Religion</label>
                <input type="text" name="phone" class="form-control" id="inlineFormInputNumber" placeholder="Enter Number..." required>
                </div>
               <div class="form-group col-md-10">
                    <label style="color:#d51709;" >Home Address</label>
                    <textarea class="form-control" rows="2" name="addr" required></textarea>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">City/Town</label>
                <input type="test" name="phone" class="form-control" id="inlineFormInputNumber" placeholder="Enter Number..." required>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">State</label>
                <select id="inlineForminputState" class="form-control" name="whomtosee" required>
                    <option selected></option>
                    <option>Adamawa</option>
                    <option>Akwa-ibom</option>
                    <option>Anambra</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Phone Number</label>
                <input type="phone" name="phone" class="form-control" id="inlineFormInputNumber" placeholder="Enter Number..." required>
                </div>
                <div class="form-group col-md-6">
                <label style="color:#d51709;">Name of Next of Kin</label>
                <input type="text" name="fname" class="form-control" id="inlineFormInputName" placeholder="Enter First Name..." required> 
                </div>
                <div class="form-group col-md-10">
                    <label style="color:#d51709;" >Next of Kin Address</label>
                    <textarea class="form-control" rows="2" name="addr" required></textarea>
                </div>
                <div class="form-group col-md-3">
                <label style="color:#d51709;">Upload Passport</label>
                <input type="file" name="phone" class="form-control" id="inlineFormInputNumber" placeholder="Enter Number..." required>
                </div>
                </div>
        <button type="submit" name="submit" class="btn btn-outline-danger">Submit</button>
          </div>
            
        </form> 
        

              

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
