<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>online Ticket Booking Management System </title>
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/bus2.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/bus2.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/bus2.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/bus2.png">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <link href="assets/css/theme.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    .navbar-brand {
      color: black;
      font-weight: bolder;
      font-size: 35px;
    }

    .navbar-light .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-toggler {
      border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-toggler:focus,
    .navbar-toggler:active {
      outline: none;
    }

    .navbar-collapse {
      justify-content: flex-end;
    }

    .nav-link {
      color: black;
    }

    .btn {
      font-weight: bold;
      text-transform: uppercase;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-warning {
      background-color: #ffc107;
      color: black;
    }

    .btn-secondary-outline {
      color: black;
      background-color: transparent;
      border: 2px solid black;
    }

    .btn-secondary-outline:hover {
      background-color: black;
      color: white;
    }

    .pt-7 {
      padding-top: 7rem;
    }

    .pt-5 {
      padding-top: 5rem;
    }

    .pt-md-9 {
      padding-top: 9rem;
    }

    .mb-4 {
      margin-bottom: 4rem;
    }

    .mb-6 {
      margin-bottom: 6rem;
    }

    .text-secondary {
      color: #6c757d !important;
    }

    .fs-1 {
      font-size: 2.5rem;
    }

    .fw-bold {
      font-weight: bold;
    }

    .bg-holder {
      background-size: cover;
      background-position: center;
    }

    .pricing-thumb {
      padding: 40px;
      border: 1px solid #e8e8e8;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .pricing-list {
      list-style: none;
      padding: 0;
    }

    .pricing-list-item {
      margin-bottom: 0.5rem;
      color: #6c757d;
    }

    .pt-md-11 {
      padding-top: 11rem;
    }

    .pb-2 {
      padding-bottom: 2rem;
    }

    .py-md-11 {
      padding-top: 11rem;
      padding-bottom: 11rem;
    }

    .background-position-top {
      background-position: top !important;
    }

    .border-top-secondary {
      border-top: 1px solid #6c757d !important;
    }

    .py-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }

    .list-unstyled {
      list-style: none;
      padding-left: 0;
    }
  </style>
</head>

<body>
  <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html" style="color: black;font-weight: bolder;font-size: 35px;">Ticket<span style="font-size: 10px;color: orange;">Booking</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#feature">Services</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#validation">Contactus</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#superhero">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#marketing">Resources</a></li>
            </ul>
            <div class="d-flex ms-lg-4"><a class="btn btn-warning ms-3" href="booking.php">Booking</a>&nbsp;&nbsp;<a class="btn btn-secondary-outline" href="login.php">Sign In</a></div>
          </div>
        </div>
      </nav>
      <section class="pt-7">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-md-start text-center py-6">
              <h1 class="mb-4 fs-9 fw-bold">online Ticket Booking Management System</h1>
              <p class="mb-6 lead text-secondary">Convenient and affordable bus travel<br> at unbeatable prices.<br class="d-none d-xl-block" />Book your ticket online now!.</p>
              <div class="text-center text-md-start"><a class="btn btn-warning me-3 btn-lg" href="#!" role="button">Get started</a></div>
            </div>
            <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="assets/img/hero/hero-img.png" alt="" /></div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pt-md-9 mb-6" id="feature">

        <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block" style="background-image:url(assets/img/category/shape.png);opacity:.5;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <h1 class="fs-9 fw-bold mb-4 text-center"> Get to Travel to any place of your Choice Easily</h1>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon1.png" width="75" alt="Feature" />
              <h4 class="mb-3">Buy Ticket</h4>
              <p class="mb-0 fw-medium text-secondary">While most people enjoy casino gambling,</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon2.png" width="75" alt="Feature" />
              <h4 class="mb-3">Book your ticket</h4>
              <p class="mb-0 fw-medium text-secondary">Sports betting,lottery and bingo playing for the fun</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon3.png" width="75" alt="Feature" />
              <h4 class="mb-3">Travel alot</h4>
              <p class="mb-0 fw-medium text-secondary">The Myspace page defines the individual.</p>
            </div>
             <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon4.png" width="75" alt="Feature" />
              <h4 class="mb-3">Save your Time</h4>
              <p class="mb-0 fw-medium text-secondary">The Myspace page defines the individual.</p>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>


      <section class="pt-5" id="validation">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h5 class="text-secondary">Save your time by booking your ticket before time</h5>
              <h2 class="mb-2 fs-7 fw-bold">Avoid standing waiting for the bus </h2>
              <p class="mb-4 fw-medium text-secondary">
                The Myspace page defines the individual,his or her
                characteristics, traits, personal choices and the overall<br />personality of the person.
              </p>
              <h4 class="fs-1 fw-bold">Book your ticket today </h4>
              <p class="mb-4 fw-medium text-secondary">While most people stand for long, sports betting,<br />lottery and bingo playing for the fun</p>
              <h4 class="fs-1 fw-bold">Travel to any place by getting your ticket through us</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you money,</p>
              <h4 class="fs-1 fw-bold">Custom any bus agency of your choice</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you more money,</p>
            </div>
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/validation/validation.png" alt="" /></div>
          </div>
        </div><!-- end of .container-->

      </section>

      <section class="pt-5" id="manager">

        <div class="container">
          <div class="row">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/manager/manager.png" alt="" /></div>
            <div class="col-lg-6">
              <h5 class="text-secondary">Easier work  for</h5>
              <p class="fs-7 fw-bold mb-2">Bus Agencies</p>
              <p class="mb-4 fw-medium text-secondary">
                Providing strong services and delivering tickets on time
              </p>
              <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">Never worry about overpaying for your<br />energy again.</p>
              </div>
              <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">We will only switch you to energy companies<br />that we trust and will treat you right</p>
              </div>
              <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary"> We track the sits daily in buses and avoid bargainers</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>

      <section class="py-md-11 py-8" id="superhero">

        <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block background-position-top" style="background-image:url(assets/img/superhero/oval.png);opacity:.5; background-position: top !important ;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row justify-content-center">
             <div class="col-lg-6 col-12">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>

                                    <p>destinations:</p>
                                </div>

                                
                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">kigali - huye: 3740frw</li>

                                <li class="pricing-list-item">nyanza - ruhango: 1240frw</li>

                                <li class="pricing-list-item">muhanga - karongi: 2860frw</li>

                                <li class="pricing-list-item">kigali - rwamagana: 1800frw</li>
                                <li class="pricing-list-item">kigali - kayonza: 2400frw</li>
                                <li class="pricing-list-item">kigali - nyagatare: 4300frw</li>
                            </ul>

                            <a class="link-fx-1 color-contrast-higher mt-4" href="booking.php">
                                <span>Buy Ticket</span>
                               
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <div class="pricing-thumb">
                            <div class="d-flex">
                                <div>
                                    

                                    <p>Destination:</p>
                                </div>
                            </div>

                            <ul class="pricing-list mt-3">
                                <li class="pricing-list-item">kigali - rubavu: 7000frw</li>

                                <li class="pricing-list-item">kigali - nyabihu: 4260frw</li>

                                <li class="pricing-list-item">kigali - nyamasheke: 3300frw</li>

                                <li class="pricing-list-item">kigali - gicumbi: 2800frw</li>

                                <li class="pricing-list-item">kigali - musanze: 3500frw</li>
                                <li class="pricing-list-item">kigali - rulindo: 3100frw</li>

                            </ul>

                            <a class="link-fx-1 color-contrast-higher mt-4" href="booking.php">
                                <span>Buy Ticket</span>
                                
                            </a>
                        </div>
                    </div>
          </div>
        </div><!-- end of .container-->

      </section>

      <section class="pb-2 pb-lg-5" id="marketing">

        <div class="container">
          <div class="row border-top border-top-secondary pt-7">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-6 mb-lg-0 mb-sm-2 order-1 order-md-1 order-lg-1"><a class="navbar-brand" href="index.html" style="color: black;font-weight: bolder;font-size: 35px;">Ticket<span style="font-size: 10px;color: orange;">Booking</span></a></div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-3 order-md-3 order-lg-2">
              <p class="fs-2 mb-lg-4" style="font-weight: bolder;">Quick Links</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">About us</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Contact</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Services</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-4 order-md-4 order-lg-3">
              <p class="fs-2 mb-lg-4" style="font-weight: bolder;">Legal stuff</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Disclaimer</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Financing</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Privacy Policy</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Terms of Service</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-4 mb-lg-0 order-2 order-md-2 order-lg-4">
              <p class="fs-2 mb-lg-4">
                <b>Knowing you're Always on the Best Energy Deal.</b><br>
                contact us<br>
                Tel: +250789766191<br>
                Email:ticketbooking@gmail.com</p>
            </div>
          </div>
        </div>

      </section>

      <section class="text-center py-0">

        <div class="container">
          <div class="container border-top py-3">
            <div class="row justify-content-between">
              <div class="col-12 col-md-auto mb-1 mb-md-0">
                <p class="mb-0">&copy; <b style="text-align: center;">2024 GATETE JAMES </b></p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
    </main>
  <!-- JavaScripts -->
  <!-- ===============================================-->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="assets/js/theme.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
</body>

</html>
