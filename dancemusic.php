<!DOCTYPE html>
<html lang="en">
    <?php
    session_start(); 
    error_reporting(0); 
    include("connection/connect.php");
    ?>
    
<head>
    <style>
#citieswithlines {
  font-family:"Playfair Display", serif;
  font-size: 24px;
  font-style: bold;
  color: #cda45e;
  line-height: 0.5;
  text-align: center;
}
#citieswithlines span {
  display: inline-block;
  position: relative;  
}
#citieswithlines span:before,
#citieswithlines span:after {
  content: "";
  position: absolute;
  height: 8px;
  border-bottom: 1px solid goldenrod;
  border-top: 1px solid goldenrod;
  top: 0;
  width: 400px;
}
#citieswithlines span:before {
  right: 100%;
  margin-right: 35px;
  margin-top: 2px;
  margin-bottom: 5px;
}
#citieswithlines span:after {
  left: 100%;
  margin-left: 35px;
  margin-top: 2px;
  margin-bottom: 5px;
}

#clicktype {
  font-family:"Playfair Display", serif;
  font-size: 24px;
  font-style: bold;
  color: #cda45e;
  text-align: center;   
}

    </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings - Dance & Music</title>
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
                    <h2>Dance & Music</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Dance & Music</li>
                    </ol>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Dance & Music</h2>
                <p>Choose from a variety of Dance & Music Vendors</p>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <p id="clicktype"><a href="djs.php">DJ</a></p>
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="assets/img/dancemusic1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="djs.php">DJs</a></h4>
                                <span>Music</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <p id="clicktype"><a href="choreo.php">Choreographers</a></p>
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <img src="assets/img/dancemusic2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="choreo.php">Choreographers</a></h4>
                                <span>Dance</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <p id="clicktype"><a href="entertainment.php">Wedding Entertainment</a></p>
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img src="assets/img/dancemusic3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="entertainment.php">Wedding Entertainment</a></h4>
                                <span>Anchors & Bands</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>  
        </div>
    </div>
    </section><!-- End Chefs Section -->
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