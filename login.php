<?php
include 'connection.php';
if (isset($_POST['sign'])) {
   
    session_start();

  $email=$_POST['email'];
  $password=$_POST['password'];
  $email=stripcslashes($email);
  $password=stripcslashes($password);
  $email=mysqli_real_escape_string($conn,$email);
  $password=mysqli_real_escape_string($conn,$password);
if (empty($email) || empty($password)) {
    header("location:index.php?empty=Email and Password are required");
  }
  else {
    $select=mysqli_query($conn,"SELECT * FROM user WHERE email='$email' AND password='$password' ") or die(mysqli_error($conn)) ;
    
        if (mysqli_num_rows($select)>0) {

          session_regenerate_id();
          $verfied=mysqli_fetch_assoc($select); 

          $agent=$verfied['agent_id'];

     
          $_SESSION['userid']=$verfied['id'] ;
          $_SESSION['userfirstname']=$verfied['firstname'] ;
          $_SESSION['userlastname']=$verfied['lastname'] ;
          $_SESSION['useremail']=$verfied['email'] ;
          $_SESSION['userphone']=$verfied['phone'] ;
          $_SESSION['userpassword']=$verfied['password'] ; 
          $_SESSION['userrole']=$verfied['role'] ;
          $_SESSION['useragencyname']=$verfied['agency_name'] ;
          session_write_close();

            if ($verfied['role']=='admin') {
              header("location:admin/index.php");
            }
            elseif ($verfied['role']=='agent') {
              $_SESSION['userid']=$agent;
                header("location:agency/index.php");
            }
            else {
                $errormessage .='you are not registered as user!';
            }
    }
    else {
            $errormessage .='you are not registered as user!';      
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus TicketBooking | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <style>
    body {
      font-family: Arial, sans-serif;
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
      margin-top: 0;
      color: orange;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .sign-up__subtitle {
      margin-top: 0;
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

    .forget-link {
      display: block;
      margin-top: 10px;
      text-decoration: none;
      color: #007bff;
    }

    .form-checkbox-wrapper {
      margin-bottom: 15px;
      display: flex;
      align-items: center;
    }

    .form-checkbox-label {
      font-size: 14px;
      margin-left: 5px;
    }

    .form-checkbox {
      margin: 0;
      margin-right: 5px;
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

    .primary-default-btn {
      color: #fff;
      background-color: orange;
    }

    .transparent-btn {
      background-color: transparent;
      border: 1px solid orange;
      color: orange;
      margin-right: 10px;
      text-decoration: none;
    }

    .transparent-btn:hover {
      background-color: #fff;
      color: orange;
    }
  </style>
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Welcome to Bus Ticket Booking Management System!</h1>
    <p class="sign-up__subtitle">Sign in to your account to continue</p>
    <form class="sign-up-form form" action="" method="POST">
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" name="email" placeholder="Enter your email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" name="password" placeholder="Enter your password" required>
      </label>
      <a class="link-info forget-link" href="##">Forgot your password?</a>
      <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" required>
        <span class="form-checkbox-label">Remember me next time</span>
      </label>
      <button class="form-btn primary-default-btn transparent-btn" type="submit" name="sign">Sign in</button>
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
