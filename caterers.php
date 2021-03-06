<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("connection/connect.php");
?>

<head>
    <style>
#aboutcaterer { 
            font-size: 18px;
            color: white;
    }

#pricecaterer { 
            font-size: 25px;
            font-style: italic;
            color: goldenrod;
    }

#addresscaterers {
            font-size: 16px;
            color: white;
            font-style: italic;
    }

#catererimg {
  border: 1px solid goldenrod;
  border-radius: 8px;
  padding: 5px;
  width: 350px;
    }

#catererimg:hover {
  box-shadow: 0 0 10px 5px #daa520;
    }
    </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings - Caterers</title>
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
    </header><!-- End Header -->    <main id="main">
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Caterers</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Caterers</li>
                    </ol>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Caterers</h2>
                <p>Check Some of Our Caterers</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Le Kitchen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Eat Drink Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Diamond Hospitality</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Kwality Caterers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">The Kitchen Art Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Get Your Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-7">The Creative Kitchen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-8">S S Caterers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-9">WeCare Foods & Beverages ??? Memory Maker</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Le Kitchen</h3>
                                    <p id="addresscaterers">Address: 249, P D???Mello Road, near GPO, Indira Docks, Mumbai Port Trust, Fort, Mumbai, Maharashtra 400001.</p>
                                    <p id="aboutcaterer">
                                        Le Kitchen is a premium catering service with lots to offer to their clients. The belief that customer satisfaction is as important as their products and services, have helped them create a vast base of customers, which continues to grow by the day. Not only do they excel in curating culinary experience but also are the best ones for gifting purposes.<br><p id="pricecaterer">Price Per Plate : INR 1,100 onwards.</p>
                                    </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-1.png" alt="" id="catererimg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Eat Drink Design</h3>
                                    <p id="addresscaterers">Address: 23, Industrial Area, Andheri West, Mumbai, Maharashtra 400102.</p>
                                    <p id="aboutcaterer">For an unforgettable catering experience, Eat Drink Design should be your pick. They cook delicious food for your guests and make sure that all of them leave home with a happy tummy. Their fancy skills will create an experience for your guests that they will remember for a very long time. <br><p id="pricecaterer">Price Per Plate : INR 1,500 onwards.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-2.png" alt="" id="catererimg" >
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Diamond Hospitality</h3>
                                    <p id="addresscaterers">808, Filix Tower, Above Asian Banquets, LBS Road, Bhandup (West), opp. Asian Paints, Mumbai, Maharashtra 400078</p>
                                    <p id="aboutcaterer">Established in the year 1985, Diamond Hospitality in Mulund West, Mumbai is an acknowledged catering establishment. This caterer has impressed countless clients with their impressionable outdoor catering services. By orienting the best of resources with dedication and commitment towards catering services, they have set their own standards in the hospitality and service industry. They toss fine, locally sourced ingredients and spices to create wholesome multi-cuisine fare.<br><p id="pricecaterer">Price Per Plate : INR 700 onwards.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-3.png" alt="" id="catererimg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Kwality Caterers</h3>
                                    <p id="addresscaterers">The Village Restaurant Complex, Next to Siri Fort Auditorium, New Delhi, Delhi 110049</p>
                                    <p id="aboutcaterer">One of the leading and oldest caterers in the Delhi NCR region, Kwality Caterings has been ruling the catering industry for the past 7 decades. Their ability to blend innovation with tradition along with commitment and grace has helped them carve a niche out of the gastronomy industry. <br><p id="pricecaterer">Price Per Plate : INR 1,200 onwards.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-4.png" alt="" id="catererimg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>The Kitchen Art Company</h3>
                                    <p id="addresscaterers">Ratiya Pradhan Rd, Junapur Village, Juanapur, New Delhi, Delhi 110047</p>
                                    <p id="aboutcaterer">A leader in catering services in Delhi,  The Kitchen Art Company is known for its exclusive international services. This Juanapur based company provides solutions to complete catering business anywhere in Delhi creating a fine dining experience for your guests. If you are in favor of quality ingredients and super commitment, you can choose from a wide variety of cuisines served by The Kitchen Art Company. <br><p id="pricecaterer">Price Per Plate : INR 2,500 onwards.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-5.png" alt="" id="catererimg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-6">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Get Your Menu</h3>
                                    <p id="addresscaterers">F-20, Dwarka Link Rd, Samalka, New Delhi, Delhi 110037</p>
                                    <p id="aboutcaterer">Get Your Menu creates sustainable, stylish and delectable catering for all occasions and reasons. They help create beautiful memories for their clients with their culinary extravaganzas. They are a subsidiary of Get Your Venue, Your Venue Partner for Diverse Events and Occasions. Get Your Menu, leading caterer in Delhi has been consistently and continually creating scrumptious and stylish delicacies and catering solutions since its inception. <br><p id="pricecaterer">Price Per Plate : INR 2,500 onwards.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-6.png" alt="" id="catererimg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-7">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>The Creative Kitchen</h3>
                                    <p id="addresscaterers">949, 3rd Floor, 24th Main Rd, opp. LIC Office, 2nd Phase, J. P. Nagar, Bengaluru, Karnataka 560078</p>
                                    <p id="aboutcaterer">The Creative Kitchen is a bangalore based food and bar catering service provider. They are known for their creativity, authenticity of cuisine, warm and attentive service, innovative presentation, overall professionalism and hygiene. Their core strength is innovation and creativity which they proved with their creations like Bangalore's first virgin bar, Rainbow Paani Poori etc. They offer both Pan Indian and Global cuisines and also other professional services like Alcoholic and Virgin Bar Catering, Pre-packed Thali, Snack boxes, Sweet Boxes, etc.<br><p id="pricecaterer">Price Per Plate : INR 800 onwards.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-7.png" alt="" id="catererimg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-8">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>S S Caterers</h3>
                                    <p id="addresscaterers">No.155/3, Bilekanahalli Road-BTM Layout, BTM Layout, Bengaluru - 560076</p>
                                    <p id="aboutcaterer">S S Caterers in Bangalore is one of the leading businesses in the Veg Caterers. Also known for Caterers, Veg Caterers, Caterers (Upto 100 Persons), Brahmin Food Caterers, Caterers For Office, Caterers (Upto 150 Persons), Veg Caterers (Upto 50 Persons), Caterers For Wedding and much more. <br><p id="pricecaterer">Price Per Plate : INR 1,999 onwards.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-8.png" alt="" id="catererimg">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-9">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>WeCare Foods & Beverages ??? Memory Maker</h3>
                                    <p id="addresscaterers">No 3, Doddanakundi Phase II, Industrial Area, Hoodi, Bengaluru, Karnataka 560048</p>
                                    <p id="aboutcaterer">WeCare Foods & Beverages ??? Memory Maker have been in the industry for over five years and have treated people to authentic and delicious delicacies from all over the country. The culinary experts are some of the best caterers in Bangalore and are known for their passion and dedication towards the art of cooking. <br><p id="pricecaterer">Price Per Plate : INR 300 onwards.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/specials-9.png" alt="WeCare" id="catererimg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Specials Section -->
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