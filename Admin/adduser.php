<?php
include 'navbar.php';

if (isset($_POST['submit'])){
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $agencyname=$_POST['agency_name'];

    $sql=mysqli_query($conn,"INSERT INTO user(
        firstname,
        lastname,
        phone,
        email,
        address,
        password,
        role,
        agency_name
        ) VALUES (
            '$firstname',
            '$lastname',
            '$phone',
            '$email',
            '$address',
            '$password',
            '$role',
            '$agencyname')");

        if ($sql) {
            echo '<script>alert("User added, Successfully")</script>';
        }
        else {
            $errormessage .='Account creation failed!'.$conn->error;     
        } 
} 
?>

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Account of Agent</h5>

              <!-- Horizontal Form -->
              <form method="POST" action="">
                <div class="row mb-3">
                  <div class="col-sm-6">
                  <label>First Name</label>
                    <input type="text" name="firstname" class="form-control" id="inputText" Required>
                  </div>
                  <div class="col-sm-6">
                  <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="inputText" Required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-6">
                  <label>Email</label>
                    <input type="email" name="email" class="form-control" id="inputText" Required>
                  </div>
                  <div class="col-sm-6">
                  <label>phone</label>
                    <input type="text" name="phone" class="form-control" id="" Required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-4">
                  <label>Address</label>
                    <input type="text" name="address" class="form-control" id="inputText" Required>
                  </div>
                  <div class="col-sm-4">
                  <label>Password</label>
                    <input type="password" name="password" class="form-control" id="" Required>
                  </div>
                  <div class="col-sm-4">
                  <label>Role</label>
                    <input type="text" name="role" class="form-control" id="" Required>
                  </div>
                  <div class="col-sm-4">
                  <label class="form-label-wrapper">
                    <p class="form-label">Agency Name </p>
                    <select name="agency_name" class="form-input form-control">
                                              <?php
                                                    $quer=mysqli_query($conn,"SELECT * FROM agency ");
                                                      while ($row=mysqli_fetch_array($quer)){
                                               ?>
                                                <option value="<?php echo $row['agency_id'] ; ?>"><?php echo $row['agency_name'] ; ?></option>
                                                  <?php
                                                    }
                                                  ?>
                                               </select>
                  </label>
                  </div>
                </div>

              
             
                <div class="text-center col-sm-12">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Create</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
      
       

      </div>
    </section>

  </main>
<!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>