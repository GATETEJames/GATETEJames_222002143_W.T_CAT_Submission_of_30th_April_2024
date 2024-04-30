<?php
include 'connection.php';
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
  <style>
    /* Your custom CSS styles go here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    .page-center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .sign-up {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
    }

    .sign-up__title {
      color: orange;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .form-label-wrapper {
      margin-bottom: 15px;
    }

    .form-label {
      margin: 0;
      font-size: 16px;
      color: #333;
    }

    .form-input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .form-btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .form-btn:hover {
      background-color: #ff8c00;
    }

    .form-btn.primary-default-btn {
      color: #fff;
      background-color: orange;
    }

    .form-btn.transparent-btn {
      background-color: transparent;
      border: 1px solid orange;
      color: orange;
      margin-right: 10px;
      text-decoration: none;
    }

    .form-btn.transparent-btn:hover {
      background-color: #fff;
      color: orange;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <main class="page-center">
    <article class="sign-up">
      <h1 class="sign-up__title" style="color: orange; font-weight: bold;">Full Details Of Your Ticket</h1>
      <form class="sign-up-form form" action="" method="POST">
        <div class="col-md-12">
          <label class="form-label-wrapper">
            <p class="form-label">ID Number</p>
            <input class="form-input" type="text" name="idnumber" placeholder="" required>
          </label>
        </div>
        <button class="form-btn primary-default-btn transparent-btn" type="submit" name="submit" style="background-color: orange;color: white;">View Ticket</button><br>
        <a href="index.php" class="form-btn primary-default-btn transparent-btn">Home</a><br>
        <?php 
        $idn=$_POST['idnumber'];
        $submit=$_POST['submit'];
        if(isset($submit)){
          $sql2=mysqli_query($conn,"SELECT * FROM booking WHERE idnumber='$idn'");
          while($rowx=mysqli_fetch_array($sql2)){
            $fullname= $rowx['fullname'];
            $phone= $rowx['phone'];
            $email= $rowx['email'];
            $agency_id= $rowx['agency_id'];
            $amount= $rowx['amount'];
            $location= $rowx['location'];
            $destination= $rowx['destination'];
            $booking_date= $rowx['booking_date'];
            $bus_station= $rowx['bus_station'];
            $status= $rowx['status'];
          }
        ?>

        <table style='width:80%;'>
          <tr>
            <td>Fullnames:</td> <td><?php echo $fullname; ?></td>
          </tr>
          <tr>
            <td>Phone Number:</td> <td><?php echo $phone; ?></td>
          </tr>
          <tr>
            <td>Email:</td> <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>Agency Name:</td> <td><?php
                                          $quertwo=mysqli_query($conn,"SELECT * FROM agency WHERE agency_id=$agency_id");
                                          $rowtwo=mysqli_fetch_array($quertwo);
                                          echo  $rowtwo['agency_name'] ; ?></td>
          </tr>
          <tr>
            <td>Number of Tickets:</td> <td><?php echo $amount; ?></td>
          </tr>
          <tr>
            <td>Location:</td> <td><?php echo $location; ?></td>
          </tr>
          <tr>
            <td>Destination:</td> <td><?php echo $destination; ?></td>
          </tr>
          <tr>
            <td>Booking Date:</td> <td><?php echo $booking_date; ?></td>
          </tr>
          <tr>
            <td>Bus Station:</td> <td><?php echo $bus_station; ?></td>
          </tr>
          <tr>
            <td>Status:</td> <td>
              <?php
              if($status=='approved'){
                ?>
                <a class="btn btn-primary"  href="#" style="color:Green;"><?php echo $status; ?></a>
                <?php
              }
              else{
                ?>
                <a class="btn btn-primary"  href="#" style="color:red;"><?php echo $status; ?></a>
                <?php
              }
              ?>
            </td>
          </tr>
        </table>
        <?php
        }
        ?>
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
