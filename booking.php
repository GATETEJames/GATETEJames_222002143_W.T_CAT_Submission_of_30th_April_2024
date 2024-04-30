<?php
include 'connection.php';

if (isset($_POST['submit'])){
    
    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $idnumber=$_POST['idnumber'];
    $email=$_POST['email'];
    $agencyid=$_POST['agencyid'];
    $amount=$_POST['amount'];
    $location=$_POST['location'];
    $destination=$_POST['destination'];
    $booking_date=$_POST['booking_date'];
    $bus_station=$_POST['bus_station'];
    
$sql2=mysqli_query($conn,"SELECT free_seats FROM bus,agency where bus.agency_id=agency.agency_id 
and agency.agency_id='$agencyid'");
while($rowx=mysqli_fetch_array($sql2)){
  $an= $rowx['0'];
}
if($an>=$amount)
{
  $sql=mysqli_query($conn,"INSERT INTO booking(
    fullname,
    phone,
    idnumber,
    email,
    agency_id,
    amount,
    location,
    destination,
    booking_date,
    bus_station
    ) VALUES (
        '$fullname',
        '$phone',
        '$idnumber',
        '$email',
        '$agencyid',
        '$amount',
        '$location',
        '$destination',
        '$booking_date',
        '$bus_station')");

    if ($sql) {
        echo '<script>alert("Booking Done, Successfully")</script>';
    }
    else {
        $errormessage .='Booking failed!'.$conn->error;     
    } 
}
else{
  echo '<script>alert("There is no enough seats")</script>';
}

    
}   

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus | Ticket Booking Management System </title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
  <style>
    /* Custom CSS classes */
    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .col-md-6 {
      flex: 0 0 50%;
      max-width: 50%;
      padding-right: 15px;
      padding-left: 15px;
    }

    .form-label-wrapper {
      margin-bottom: 1rem;
    }

    .form-input {
      width: 100%;
      padding: 0.5rem;
      font-size: 1rem;
      line-height: 1.5;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    .form-btn {
      padding: 0.5rem 1rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      text-decoration: none;
      cursor: pointer;
      display: inline-block;
      transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out,
        box-shadow 0.15s ease-in-out;
      border: none;
      text-align: center;
    }

    .primary-default-btn {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
    }

    .transparent-btn {
      background-color: transparent;
      border-color: transparent;
      color: orange;
    }

    .transparent-btn:hover {
      color: #28a745;
    }

    .layer {
      /* Add styles for the overlay layer */
    }

    .page-center {
      /* Styles for centering the main content */
    }

    .sign-up {
      /* Styles for the sign-up section */
    }

    .sign-up__title {
      /* Styles for the sign-up title */
    }

    .sign-up__subtitle {
      /* Styles for the sign-up subtitle */
    }

    .form {
      /* Styles for the form */
    }
  </style>
</head>

<body>
  <div class="layer"></div>
  <main class="page-center">
    <article class="sign-up">
      <h1 class="sign-up__title" style="color: orange; font-weight: bold;">Welcome Dear Client!</h1>
      <p class="sign-up__subtitle">You can book your ticket fast and easily</p>
      <form class="sign-up-form form" action="" method="POST">
        <div class="form-group row">
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Full Names</p>
              <input class="form-input" type="text" name="fullname" placeholder="" required>
            </label>
          </div>
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Phonenumber</p>
              <input class="form-input" type="text" name="phone" placeholder="" required>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">ID Number</p>
              <input class="form-input" type="text" name="idnumber" placeholder="" required>
            </label>
          </div>
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Email</p>
              <input class="form-input" type="email" name="email" placeholder="" required>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Agency Name </p>
              <select name="agencyid" class="form-input">
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
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Number of Tickets</p>
              <input class="form-input" type="text" name="amount" placeholder="" required>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Current Location </p>
              <input class="form-input" type="text" name="location" placeholder="" required>
            </label>
          </div>
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Destination</p>
              <input class="form-input" type="text" name="destination" placeholder="" required>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Booking Date </p>
              <input class="form-input" type="date" name="booking_date" placeholder="" required>
            </label>
          </div>
          <div class="col-md-6">
            <label class="form-label-wrapper">
              <p class="form-label">Bus Station Address</p>
              <input class="form-input" type="text" name="bus_station" placeholder="" required>
            </label>
          </div>
        </div>
        <br><br>
        <button class="form-btn primary-default-btn transparent-btn" type="submit" name="submit" style="background-color: orange;color: white;">Book Now</button><br>
        <a href="viewticket.php" class="form-btn primary-default-btn transparent-btn">Your Ticket</a>
      </form>
    </article>
  </main>
  <!-- Chart library -->
  <script src="./plugins/chart.min.js"></script>
  <!-- Icons library -->
  <script src="plugins/feather.min.js"></script>
  <!-- Custom scripts -->
  <script src="js/script.js"></script>
</body>

</html>
