<?php
include '../connection.php';
// $seri_id=$_GET['bus_id'];

if (isset($_POST['updatebus'])){ 
   echo $user_id=$_POST['ser_id'];
   $bus_plate=$_POST['bus_plate'];
   $agencyid=$_POST['agencyid'];
   $free_seats=$_POST['free_seats'];
   $destination=$_POST['destination'];

    $sql=mysqli_query($conn,"UPDATE bus SET 
        bus_plate='$bus_plate',
        agency_id='$agencyid',
        free_seats='$free_seats',
        destination='$destination'
         WHERE bus_id='$user_id'");
    if ($sql) {
     echo '<script>alert("bus update, Successfully!")</script>';
     echo "<script>window.location='allbus.php'</script>";
    }
    else {
        echo '<script>alert("bus update, Failed!")</script>' .$conn->error;		
    }     
   
}  

?>