<?php

include '../connection.php';
$id=$_GET['id'];


  

    $sql=mysqli_query($conn,"UPDATE booking SET 
        status='approved'
       
         WHERE booking_id=$id;");
    if ($sql) {



     echo '<script>alert("Booking approved, Successfully!")</script>';
     echo "<script>window.location='allbooking.php'</script>";
    }
    else {
        echo '<script>alert("booking update, Failed!")</script>' .$conn->error;		
    }     
   
  

?>