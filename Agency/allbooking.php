<?php
include 'navbar.php';
// include 'agent_session.php';
session_start();


?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Booking</h4>
                  <p class="card-description">
                    View all Bookings here
                  </p>
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group row">
                      <div class="col-sm-3">
                        <label>Email</label>
                        <input type="email" name="email"  class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-sm-6">
                      <label class="form-label-wrapper">
                    <p class="form-label">Agency Name </p>
                    <select name="agency_name" class="form-input form-control">
                                              <?php
                                                    $quer=mysqli_query($conn,"SELECT * FROM agency");
                                                      while ($row=mysqli_fetch_array($quer)){
                                               ?>
                                                <option value="<?php echo $row['agency_name'] ; ?>"><?php echo $row['agency_name'] ; ?></option>
                                                  <?php
                                                    }
                                                  ?>
                                               </select>
                  </label>
                      </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-12">
                    <button type="submit" name="add" value="add" class="btn btn-primary mr-2">View Bookings</button>
                 </div>
</div>
                  </form>
                  <?php
                  $email=$_POST['email'];
                   $agencyname=$_POST['agency_name'];

                  $sql2=mysqli_query($conn,"SELECT agency_id FROM agency where agency_name='$agencyname'");
while($rowx=mysqli_fetch_array($sql2)){
  $aid= $rowx['0'];

}
                  if(isset($_POST['add'])){
                  
                  
                  ?>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>Id</th>
                          <th>
                            FullName
                          </th>
                          <th>
                            Phonenumber
                          </th>
                          <th>
                            Idnumber
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Agency Name
                          </th>
                          <th>
                            Amount
                          </th>
                          <th>
                            Location
                          </th>
                          <th>
                            Destination
                          </th>
                          <th>
                            Booking Date
                          </th>
                          <th>
                            Bus Station
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                   
                        $quer=mysqli_query($conn,"SELECT * FROM booking,user where 
                        booking.agency_id=user.agency_name and user.email='$email' and user.agency_name='$aid'");
                        while ($row=mysqli_fetch_array($quer)){
                        ?>
                        <tr>

                          <td><?php echo $row['booking_id'] ; ?></td>
                          <td><?php echo $row['fullname'] ; ?></td>
                          <td><?php echo $row['phone'] ; ?></td>
                          <td><?php echo $row['idnumber'] ; ?></td>
                          <td><?php echo $row['email'] ; ?></td>
                          <td><?php
                                          $agencyid=$row['agency_id'];
                                          $quertwo=mysqli_query($conn,"SELECT * FROM agency WHERE agency_id=$agencyid");
                                          $rowtwo=mysqli_fetch_array($quertwo);
                                         echo  $rowtwo['agency_name'] ;
                                                    ?></td>
                          <td><?php echo $row['amount'] ; ?></td>
                          <td><?php echo $row['location'] ; ?></td>
                          <td><?php echo $row['destination'] ; ?></td>
                          <td><?php echo $row['booking_date'] ; ?></td>
                          <td><?php echo $row['bus_station'] ; ?></td>
                          <td><a class="btn btn-danger"  href="delete.php?delbooking=<?php echo $row['booking_id']; ?> " onclick="return confirm('are you sure! you want to delete')" id="red">Delete</a></td>
                          <td><a class="btn btn-success"  href="bookingupdate.php?updatebooking=<?php echo $row['booking_id']; ?>"  id="red">Update</a></td>
                          <?php
                          if($row['status']=='approved')
                          {
                            ?>
                            <td><a class="btn btn-info"  href="#" 
                             id="red">Approved</a></td>
                                                       <?php

                          }
                          else{
                            ?>
                           <td><a class="btn btn-primary"  href="approve.php?id=<?php echo $row['booking_id']; ?>"  id="red">Approve</a></td>
                            <?php

                          }

                          ?>
                         

                       
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <?php
                  }
                  ?>
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