<?php
include 'navbar.php';
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Bus</h4>
                  <!-- <p class="card-description">
                    View all Bookings here
                  </p> -->
                  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                 
                  <form class="forms-sample" method="post" action="up2.php">
                  <?php
                                                if (isset($_GET['updatebus'])) {
                                                    $ser_id=$_GET['updatebus'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM bus WHERE bus.bus_id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label>Bus Plate</label>
                        <input type="text" name="ser_id" value="<?php echo $ser_id; ?>" hidden>
                        <input type="text" name="bus_plate" value="<?php echo $row['bus_plate']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-sm-6">
                        <label>Free Seats</label>
                        <input type="text" name="free_seats" value="<?php echo $row['free_seats']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label>Destination</label>
                        <input type="text" name="destination" value="<?php echo $row['destination']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-sm-6">
                        <label>Agency Name</label>
                        <select name="agencyid" class="form-control form-control-normal">
                                              <?php
                                                    $quer=mysqli_query($conn,"SELECT * FROM agency ");
                                                      while ($row=mysqli_fetch_array($quer)){
                                               ?>
                                                <option value="<?php echo $row['agency_id'] ; ?>"><?php echo $row['agency_name'] ; ?></option>
                                                  <?php
                                                    }
                                                  ?>
                                               </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      
                    </div>
                    <button type="submit" name="updatebus" value="update" class="btn btn-primary mr-2">Update Bus</button>
                    <?php
                }}
                ?>
                  </form>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          
            </div>
     
          </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>