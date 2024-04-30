<?php

include '../connection.php';
// $seri_id=$_GET['booking_id'];

if (isset($_POST['updatebooking'])){

    echo $user_id=$_POST['ser_id'];
    
     $fullname=$_POST['fullname'];
     $phone=$_POST['phone'];
     $idnumber=$_POST['idnumber'];
     $email=$_POST['email'];
    $agencyname=$_POST['agencyid'];
    $amount=$_POST['amount'];
    $location=$_POST['location'];
    $destination=$_POST['destination'];
    $booking_date=$_POST['booking_date'];
    $bus_station=$_POST['bus_station'];

    $sql=mysqli_query($conn,"UPDATE booking SET 
        fullname='$fullname',
        phone='$phone',
        idnumber='$idnumber',
        email='$email',
        agency_id='$agencyname',
        amount='$amount',
        location='$location',
        destination='$destination',
        booking_date='$booking_date',
        bus_station='$bus_station'
         WHERE booking_id=$user_id;");
    if ($sql) {



     echo '<script>alert("booking update, Successfully!")</script>';
     echo "<script>window.location='allbooking.php'</script>";
    }
    else {
        echo '<script>alert("booking update, Failed!")</script>' .$conn->error;		
    }     
   
}  

?>