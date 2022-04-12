<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("connection/connect.php");


?>

<head>
    <style>
        #formbanquets {
  border-radius: 7px;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;
}
  #contactustobook {
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

  #prices {
  font-size: 14px;
  font-weight: 500;
  padding: 0;
  line-height: 1px;
  margin: 0 0 5px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #aaaaaa;
  font-family: "Poppins", sans-serif;
  }
  #Select1, #Select2 {

/* styling */
border-radius: 7px;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;

/* reset */

margin: 0;      
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-appearance: none;
-moz-appearance: none;



/* arrows */

background-image:
  linear-gradient(45deg, transparent 50%, black 50%),
  linear-gradient(135deg, black 50%, transparent 50%),
  linear-gradient(to right, #cda45e, #cda45e);
background-position:
  calc(100% - 20px) calc(1em + 2px),
  calc(100% - 15px) calc(1em + 2px),
  100% 0;
background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
background-repeat: no-repeat;
}

#Select1:focus {
background-image:
  linear-gradient(45deg, white 50%, transparent 50%),
  linear-gradient(135deg, transparent 50%, white 50%),
  linear-gradient(to right, gray, gray);
background-position:
  calc(100% - 15px) 1em,
  calc(100% - 20px) 1em,
  100% 0;
background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
background-repeat: no-repeat;
border-color: grey;
outline: 0;
}

#formbanquetsdate {

/* styling */
border-radius: 7px;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;

/* reset */

margin: 0;      
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-appearance: none;
-moz-appearance: none;



/* arrows */

background-image:
  linear-gradient(45deg, transparent 100%, black 0%),
  linear-gradient(135deg, black 0%, transparent 100%),
  linear-gradient(to right, #cda45e, #cda45e);
background-position:
  calc(100% - 20px) calc(1em + 2px),
  calc(100% - 15px) calc(1em + 2px),
  100% 0;
background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
background-repeat: no-repeat;
}

#formbanquetsdate:focus {
background-image:
  linear-gradient(45deg, white 0%, transparent 100%),
  linear-gradient(135deg, transparent 100%, white 0%),
  linear-gradient(to right, gray, gray);
background-position:
  calc(100% - 15px) 1em,
  calc(100% - 20px) 1em,
  100% 0;
background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
background-repeat: no-repeat;
border-color: grey;
outline: 0;
}
    </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings - Packages</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+91 76669 03729</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span>Calling Hours : Mon - Sat: 11:00 AM - 11:00 PM</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">
                <ul>
                    <!--<li>En</li>-->
                    <!--<li><a href="#">De</a></li>-->
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
            <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <h1 class="logo me-auto me-lg-0"><a href="index.php">iDo Weddings</a></h1>


            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="about.php">About</a></li>
                    <li><a class="nav-link scrollto" href="banquethalls.php">Banquets</a></li>
                    <li><a class="nav-link scrollto" href="caterers.php">Caterers</a></li>
                    <li><a class="nav-link scrollto" href="packages.php">Packages</a></li>
                    <li><a class="nav-link scrollto" href="makeup.php">Makeup</a></li>
                    <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
                    <li class="dropdown">
                        <a class="nav-link scrollto" href="#"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="events-engagement.html">Engagement</a></li>
                            <li class="dropdown">
                                <a href="events-wedding.html"><span>Wedding</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="events-traditional.html">Traditional/Classic Wedding</a></li>
                                    <li><a href="events-destination.html">Destination Wedding</a></li>
                                    <li><a href="events-diy.html">DIY Wedding</a></li>
                                    <li><a href="events-vintage.html">Vintage Wedding</a></li>
                                    <li><a href="events-elopement.html">Elopement Wedding</a></li>
                                </ul>
                            </li>
                            <li><a href="events-haldi.html">Haldi Ceremony</a></li>
                            <li><a href="events-sangeet.html">Sangeet Ceremony</a></li>
                            <li><a href="events-reception.html">Reception</a></li>
                        </ul>
                    </li>
                     <li><a class="nav-link scrollto" href="dancemusic.php">Dance & Music</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
             <?php
						if(empty($_SESSION["email"])) 
							{
					echo '<a href="login.php" style="font-size:10px;" class="book-a-table-btn scrollto d-none d-lg-flex">Get Started</a>';
                              
							}
						else
							{
                                    
               echo  '<a href="userdashboard.php" class="book-a-table-btn scrollto d-none d-lg-flex">'.$_SESSION["first_name"].'</a>';
                                    
               echo  '<a href="logout.php" class="book-a-table-btn scrollto d-none d-lg-flex">Logout</a>';   
							}

						?>

        </div>
    </header><!-- End Header -->
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Packages</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Packages</li>
                    </ol>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Packages</h2>
                <p>Check Out Some Of Our Packages <?php 
if(isset($_POST['submit'] ))
{
    $select_location = $_POST['select_location'];  
    $full_name = $_POST['full_name'];
    $package_type = $_POST['package_type'];  
    $email = $_POST['email'];  
    $date_of_package = $_POST['date_of_package'];  

    $mql = "INSERT INTO package_bookings(select_location,full_name,package_type,email,date_of_package) VALUES('".$_POST['select_location']."','".$_POST['full_name']."','".$_POST['package_type']."','".$_POST['email']."','".$_POST['date_of_package']."')";
	mysqli_query($db, $mql);

    
    echo '<div class="" style="color:#CDA45E; background-color: transparent; padding: 5px; font-weight: bold; margin-left: 870px; border-style: groove; width: fit-content; border-color:#CDA45E; border-radius: 10px;" role="alert">Booking Done Successfully</div>';



} ?></p>
            </div>
            
            <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="20000">
                <div class="swiper-wrapper">

                    <div class="swiper-slide" data-swiper-autoplay="20000">
                        <div class="row event-item">
                            <div class="col-lg-6">
                            <form action="" method="post">
                                <img src="assets/img/silver-package.jpg" class="img-fluid" alt=""><br><br>
                                <input type="text" name="package_type" class="form-control" value="Silver Package" readonly   id="formbanquets" style="text-align:center;">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3 style="text-align: center;" name="" value="Silver">The SILVER Package</h3><br>
                                <div id="prices" style="font-size: 18px;">
                                    <p><span>Prices Starting at 12.5Lakhs INR</span></p><br>
                                </div>
                                <p class="fst-italic">
                                    This package gives you a combo of Wedding followed by Reception Party.
                                </p>
                                <p>
                                • Wedding Ceremony.<br>
                                • Reception Party.<br>
                                • One of our affiliated caterers included.<br>
                                  <div class="row">
                                  <div class="col-md-6 form-group">
                                        <input type="text" name="full_name" class="form-control" value="<?php echo $_SESSION['first_name']; echo ' '; echo $_SESSION['last_name']?>" readonly   id="formbanquets">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly   id="formbanquets">
                                    </div><br><br>
                                  <div class="col-md-6 form-group mt-3 mt-md-0"><input type="date" name="date_of_package" class="form-control"  id="formbanquetsdate" min="<?php echo date('Y-m-d'); ?>" required></div>
                                  <div class="col-md-6 form-group mt-3 mt-md-0"><select id="Select1" name="select_location" class="form-select" required>
                                            <option value="">Choose Location</option>
                                            <option>The Grand Hyatt</option>
                                            <option>The Pacific</option>
                                            <option>The Chancery Pavilion</option>
                                            <option>JW Marriott</option>
                                            <option>The Taj West End</option>
                                            <option>The Crowne Plaza</option>
                                            <option>The Radisson Blu</option>
                                            <option>The Holiday Inn</option>
                                            <option>Leela Ambience Convention Hotel</option>
                                        </select></div></div><br>
                                    Contact us for the rooms, guests & extra add-ons.
                                </p>
                                <p>
                                    The prices may vary according to the vendors, location and add-ons selected.
                                </p><br>
                                <p>
                                     <?php
                    if(!isset($_SESSION["email"]) ){
                    echo '<a href="login.php" id="contactustobook" style="margin-left:250px; font-size: 14px;">Login to Book</a>';
                     }
                    else{
                        echo ' <input type="submit" name="submit" value="Book this Package" id="contactustobook" style="margin-left:250px; font-size: 14px;">';
                    }
                ?>

                </p></form>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide" data-swiper-autoplay="20000">
                        <div class="row event-item">
                            <div class="col-lg-6">
                            <form action="" method="post">
                                <img src="assets/img/gold-package.jpg" class="img-fluid" alt=""><br><br>
                                <input type="text" name="package_type" class="form-control" value="Gold Package" readonly   id="formbanquets" style="text-align:center;">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3 style="text-align: center;" name="package_type">The GOLD Package</h3><br>
                                <div id="prices" style="font-size: 18px;">
                                    <p><span>Prices Starting at 25Lakhs INR</span></p><br>
                                </div>
                                <p class="fst-italic">
                                This package gives you a combo of Engagement Ceremony, Sangeet Party and Wedding followed by Reception Party.
                                </p>
                                <p>
                                • Inclusive of four mentioned events.<br>
                                • One of our affiliated caterers & beauticians included.<br>
                                  <div class="row">
                                  <div class="col-md-6 form-group">
                                        <input type="text" name="full_name" class="form-control" value="<?php echo $_SESSION['first_name']; echo ' '; echo $_SESSION['last_name']?>" readonly   id="formbanquets">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly   id="formbanquets">
                                    </div><br><br>
                                  <div class="col-md-6 form-group mt-3 mt-md-0"><input type="date" name="date_of_package" class="form-control"  id="formbanquetsdate" min="<?php echo date('Y-m-d'); ?>" required></div>
                                  <div class="col-md-6 form-group mt-3 mt-md-0"><select id="Select1" name="select_location" class="form-select" required>
                                            <option value="">Choose Location</option>
                                            <option>The Grand Hyatt</option>
                                            <option>The Pacific</option>
                                            <option>The Chancery Pavilion</option>
                                            <option>JW Marriott</option>
                                            <option>The Taj West End</option>
                                            <option>The Crowne Plaza</option>
                                            <option>The Radisson Blu</option>
                                            <option>The Holiday Inn</option>
                                            <option>Leela Ambience Convention Hotel</option>
                                        </select></div></div><br>
                                    Contact us for the rooms, guests & extra add-ons.
                                </p>
                                <p>
                                    The prices may vary according to the vendors, location and add-ons selected.
                                </p><br>
                                <p>
                                     <?php
                    if(!isset($_SESSION["email"]) ){
                    echo '<a href="login.php" id="contactustobook" style="margin-left:250px; font-size: 14px;">Login to Book</a>';
                     }
                    else{
                    echo ' <input type="submit" name="submit" value="Book this Package" id="contactustobook" style="margin-left:250px; font-size: 14px;">';
                    }
                ?>
                </p></form>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide" data-swiper-autoplay="20000">
                        <div class="row event-item">
                            <div class="col-lg-6">
                            <form action="" method="post">
                                <img src="assets/img/platinum-package.jpg" class="img-fluid" alt=""><br><br>
                                <input type="text" name="package_type" class="form-control" value="Platinum Package" readonly   id="formbanquets" style="text-align:center;">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3 style="text-align: center;" name="package_type">The PLATINUM Package</h3><br>
                                <div id="prices" style="font-size: 18px;">
                                    <p><span>Prices Starting at 50Lakhs INR</span></p><br>
                                </div>
                                <p class="fst-italic">
                                This package gives you a combo of ALL the events associated with a wedding.
                                </p>
                                <p>
                                • All your events booked at once.<br>
                                • Decorations are included in this package.<br>
                                • One of our affiliated caterers, beauticians & photographer included.<br>
                                  <div class="row">
                                  <div class="col-md-6 form-group">
                                        <input type="text" name="full_name" class="form-control" value="<?php echo $_SESSION['first_name']; echo ' '; echo $_SESSION['last_name']?>" readonly   id="formbanquets">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly   id="formbanquets">
                                    </div><br><br>
                                  <div class="col-md-6 form-group mt-3 mt-md-0"><input type="date" name="date_of_package" class="form-control"  id="formbanquetsdate" min="<?php echo date('Y-m-d'); ?>" required></div>
                                  <div class="col-md-6 form-group mt-3 mt-md-0"><select id="Select1" name="select_location" class="form-select" required>
                                            <option value="">Choose Location</option>
                                            <option>The Grand Hyatt</option>
                                            <option>The Pacific</option>
                                            <option>The Chancery Pavilion</option>
                                            <option>JW Marriott</option>
                                            <option>The Taj West End</option>
                                            <option>The Crowne Plaza</option>
                                            <option>The Radisson Blu</option>
                                            <option>The Holiday Inn</option>
                                            <option>Leela Ambience Convention Hotel</option>
                                        </select></div></div><br>
                                    Contact us for the rooms, guests & extra add-ons.
                                </p>
                                <p>
                                    The prices may vary according to the vendors, location and add-ons selected.
                                </p><br>
                                <p>
                                     <?php
                    if(!isset($_SESSION["email"]) ){
                    echo '<a href="login.php" id="contactustobook" style="margin-left:250px; font-size: 14px;">Login to Book</a>';
                     }
                    else{
                        echo ' <input type="submit" name="submit" value="Book this Package" id="contactustobook" style="margin-left:250px; font-size: 14px;">';
                    }
                ?>
                </p></form>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide" data-swiper-autoplay="20000">
                        <div class="row event-item">
                            <div class="col-lg-6">
                            <form action="" method="post">
                                <img src="assets/img/custom-package.jpg" class="img-fluid" alt=""><br><br>
                                <input type="text" name="package_type" class="form-control" value="Custom Package" readonly   id="formbanquets" style="text-align:center;">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3 style="text-align: center;" name="package_type">The Custom Package</h3><br>
                                <div id="prices" style="font-size: 18px;">
                                    <p><span>Prices may vary according to choices</span></p><br>
                                </div>
                                <p class="fst-italic">
                                    This package allows you to choose & customize your events from A-Z.
                                </p>
                                <p>
                                • Book one or Multiple events according to your choice.<br>
                                • Get quotations according to your budget.<br>
                                • From small, intimate family events to large, spectacular celebrations.<br>
                                  <div class="row">
                                  <div class="col-md-6 form-group">
                                        <input type="text" name="full_name" class="form-control" value="<?php echo $_SESSION['first_name']; echo ' '; echo $_SESSION['last_name']?>" readonly   id="formbanquets">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly   id="formbanquets">
                                    </div><br><br>
                                  <div class="col-md-6 form-group mt-3 mt-md-0"><input type="date" name="date_of_package" class="form-control"  id="formbanquetsdate" min="<?php echo date('Y-m-d'); ?>" required></div>
                                  <div class="col-md-6 form-group mt-3 mt-md-0"><select id="Select1" name="select_location" class="form-select" required>
                                            <option value="">Choose Location</option>
                                            <option>The Grand Hyatt</option>
                                            <option>The Pacific</option>
                                            <option>The Chancery Pavilion</option>
                                            <option>JW Marriott</option>
                                            <option>The Taj West End</option>
                                            <option>The Crowne Plaza</option>
                                            <option>The Radisson Blu</option>
                                            <option>The Holiday Inn</option>
                                            <option>Leela Ambience Convention Hotel</option>
                                        </select></div></div><br>
                                    Contact us for the rooms, guests & extra add-ons.
                                </p>
                                <p>
                                    The prices may vary according to the vendors, location and add-ons selected.
                                </p><br>
                                <p>
                                     <?php
                    if(!isset($_SESSION["email"]) ){
                    echo '<a href="login.php" id="contactustobook" style="margin-left:250px; font-size: 14px;">Login to Book</a>';
                     }
                    else{
                        echo ' <input type="submit" name="submit" value="Book this Package" id="contactustobook" style="margin-left:250px; font-size: 14px;">';
                    }
                ?>
                </p></form>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Events Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>iDo Weddings</h3>
                            <p>
                                8C/12, Nityanand Baugh CHS Ltd, R.C. Marg,<br>
                                Mahul Road, Chembur, Mumbai-400074 <br><br>
                                <strong>Phone:</strong> +91 76669 03729<br>
                                <strong>Email:</strong> bhambhani123456@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
                            
                            <li><i class="bx bx-chevron-right"></i> <a href="termsofservices.php">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Vendor Sources</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="caterers.php">Caterers</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="dancemusic.php">Dance & Music</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="banquethalls.php">Banquet Halls</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="makeup.php">Beauticians</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="gallery.php">Gallery</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Sign up for our email brief for hand-picked articles, news, and more.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iDo Weddings</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                
                Designed by <a href="https://www.instagram.com/punit_kalro/">Jaidev & Punit</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>