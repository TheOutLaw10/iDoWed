<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("connection/connect.php");

if(isset($_POST['submit'] ))
{
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $subject = $_POST['subject'];  
    $message = $_POST['message'];  

    $mql = "INSERT INTO contact_form(name,email,subject,message) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";
	mysqli_query($db, $mql);

    $success = '<div class="" style="color:#CDA45E; padding:10px; font-weight: bold;" role="alert">Message sent successfully, thank you for contacting us.</div>';
}

if(isset($_POST['subscribe'] ))
{
    $email = $_POST['email'];  
   
    $mql = "INSERT INTO newsletter_subscriber(email) VALUES('".$_POST['email']."')";
	mysqli_query($db, $mql);

    $success = '<div class="" style="color:#CDA45E; background-color:white; padding:10px; font-weight: bold;" role="alert">Subscribed!!</div>';
}


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

#sendmessage {
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

#name, #email, #subject, #message {
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
 </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings</title>
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
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <?php echo $success?>
                    <h1>Welcome to <span>iDo Weddings</span></h1>
                    <h2>To Love, Laughter & Happily ever after</h2>

                    <div class="btns">
                    <?php
						if(empty($_SESSION["email"])) 
							{
					echo '<a href="banquethalls.php" class="btn-menu animated fadeInUp scrollto">Our Wedding Venues</a>';
                    echo '<a href="login.php" class="btn-book animated fadeInUp scrollto">Get Started</a>';         
							}
						else
							{
                                    
             
               echo  '<a href="banquethalls.php" class="btn-menu animated fadeInUp scrollto">Our Wedding Venues</a>';    
               echo  '<a href="userdashboard.php" class="btn-book animated fadeInUp scrollto">Dashboard</a>';   
							}

						?>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=7pVpquui3Rc" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="assets/img/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>iDo Weddings - Your Personal Wedding Planner.</h3>
                        <p class="fst-italic">
                            Aspiring to be India's favorite wedding planner website, iDo Weddings is a stylish alternative to the outdated wedding planning process.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> From photographers to wedding priests, iDo Weddings has many active vendors for you to choose from.</li>
                            <li><i class="bi bi-check-circle"></i> Kick-start your wedding shopping here from the comfort of your home.</li>
                            <li><i class="bi bi-check-circle"></i> iDo Wedding’s Photo Gallery serves you a collection of the most dreamy wedding photos that perfectly sum up 'All Things Weddings'.</li>
                        </ul>
                        <p>
                            iDo Weddings is an Indian Wedding Planning Website where you can find the best wedding vendors, with prices and reviews at the click of a button. Whether you are looking to hire wedding planners in India, or looking for the top photographers, or just some ideas and inspiration for your wedding. iDo Weddings can help you solve your wedding planning woes through its unique features. With a checklist, detailed vendor list, inspiration gallery and blog - you won't need to spend hours planning a wedding anymore.
                        </p>
                    </div>
                </div>

            </div><br><br>

    
<div class="container" data-aos="fade-up">

    <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
                <img src="assets/img/about2.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Delivery Of Commitments</h3>
            <ul>
                <li><i class="bi bi-check-circle"></i> Our team ensures that all the services are delivered as committed to ensure a hassle-free experience for you.</li>
                </ul>
                <h3>One-Stop Shop</h3>
            <ul>
                <li><i class="bi bi-check-circle"></i> No need to run around for your wedding services - Book our trusted vendors under one roof.</li>
                </ul>
                <h3>Guaranteed Best Prices</h3>
            <ul>
                <li><i class="bi bi-check-circle"></i> We guarantee our prices for venue and non-venue services.</li>
            </ul>
            <p>
            iDo Weddings can help you solve your wedding planning woes through its unique features. With a checklist, detailed vendor list and inspiration gallery - you won't need to spend hours planning a wedding anymore.
                </p>
        </div>
    </div>

</div>
        </section><!-- End About Section -->
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Why Us</h2>
                    <p>Why Choose Our Services</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>01</span>
                            <h4>Customer Service</h4>
                            <p>Customer Satisfaction is of utmost importance to us.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span>02</span>
                            <h4>Variety of Vendors</h4>
                            <p>With multiple active vendors, we've got you covered for all your wedding needs.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span>03</span>
                            <h4>Effectiveness</h4>
                            <p>With everything available at one place, our work is to make your job easier.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->
        <!-- ======= Banquet Halls ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Banquet Halls</h2>
                    <p>Check Some of Our Venue Options</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-starters">Mumbai</li>
                            <li data-filter=".filter-salads">Delhi</li>
                            <li data-filter=".filter-specialty">Bangalore</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/grandballroommumbai.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="HyattMum.php">The Grand Ballroom</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            Grand Hyatt Mumbai Hotel And Residences Bandra Kurla Complex Vicinity, Santacruz East, Mumbai - 400055
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/crowneplaza.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="CrowneBengaluru.php">Crowne Plaza</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            43, Velankani Drive, Electronics City Phase 1, Electronic City, Bengaluru, Karnataka 560100
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/pacific.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="PacificMum.php">Pacific Banquets</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            4th Floor, The Pacific, Shilp Chowk, Sector 13, Kharghar, Navi Mumbai - 410210
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/radisson.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="RadissonDelhi.php">Radisson Blu</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            Plot 4, Dwarka City Centre, Sector 13, Dwarka, New Delhi, Delhi 110075
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/chancery.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="ChanceryBengaluru.php">The Chancery Pavilion</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            135, Residency Rd, Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/holidayinn.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="HolidayMum.php">The Holiday Inn</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            Sakinaka Junction, Andheri - Kurla Rd, Andheri East, Mumbai - 400072
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/jwmariott.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="MarriottDelhi.php">JW Mariott</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            Asset Area 4 - Hospitality District Delhi, Aerocity, New Delhi, Delhi 110037
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/leela.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="LeelaDelhi.php">Leela Ambience Convention Hotel</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            CBD, 1, Maharaja Surajmal Marg, Near Yamuna Sports Complex, Vishwas Nagar Extension, Vishwas Nagar, Shahdara, Delhi, 110032
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/tajwestend.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="TajBengaluru.php">The Taj West End</a><span></span>
                        </div>
                        <div class="menu-ingredients">
                            25, Race Course Rd, High Grounds, Bengaluru, Karnataka 560001
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Menu Section -->
        <!-- ======= Caterers Section ======= -->
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
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-9">WeCare Foods & Beverages – Memory Maker</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Le Kitchen</h3>
                                    <p id="addresscaterers">Address: 249, P D’Mello Road, near GPO, Indira Docks, Mumbai Port Trust, Fort, Mumbai, Maharashtra 400001.</p>
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
                                    <h3>WeCare Foods & Beverages – Memory Maker</h3>
                                    <p id="addresscaterers">No 3, Doddanakundi Phase II, Industrial Area, Hoodi, Bengaluru, Karnataka 560048</p>
                                    <p id="aboutcaterer">WeCare Foods & Beverages – Memory Maker have been in the industry for over five years and have treated people to authentic and delicious delicacies from all over the country. The culinary experts are some of the best caterers in Bangalore and are known for their passion and dedication towards the art of cooking. <br><p id="pricecaterer">Price Per Plate : INR 300 onwards.</p>
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
        <!-- ======= Packages ======= -->
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
    </section><!-- End Packages Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Safety</h2>
                    <p>Our Safety Standards</p>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>

                                    Routine use of masks, gloves and sanitizers.

                                </p>
                                <img src="assets/img/testimonials/face-mask.png" class="testimonial-img" alt="">
                                <h3>Protective Gears</h3>

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>

                                    Regular temperature checks of the team.

                                </p>
                                <img src="assets/img/testimonials/thermometer.png" class="testimonial-img" alt="">
                                <h3>Staff Screening</h3>

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>

                                    Inititatives to disinfect the workplaces frequently.

                                </p>
                                <img src="assets/img/testimonials/liquid-soap.png" class="testimonial-img" alt="">
                                <h3>Sanitization Services</h3>

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>

                                    Maintain 2 feet distance at all times & limit working staff.

                                </p>
                                <img src="assets/img/testimonials/social-distancing.png" class="testimonial-img" alt="">
                                <h3>Social Distancing</h3>

                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>

                                    Regular & thorough cleaning of the workplaces done without fail.

                                </p>
                                <img src="assets/img/testimonials/household.png" class="testimonial-img" alt="">
                                <h3>Regular Cleaning</h3>

                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>MakeUp</h2>
                <p>Some of Our Professional Beauticians Vendors</p>
            </div>
            <p id="citieswithlines"><span>Mumbai</span></p><br>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Pri Makeup Studio</h4>
                                <span>Powai, Mumbai</span>
                            </div>
                            <div class="social">
                                <i class="bi">Price Per Event : Rs.27,999 </i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Bhavya Wadhwa's Bridal World</h4>
                                <span>Mulund West, Mumbai</span>
                            </div>
                            <div class="social">
                            <i class="bi">Price Per Event : Rs.12,999 </i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Varshaa Shah Bridal Makeup Artist</h4>
                                <span>Andheri West, Mumbai</span>
                            </div>
                            <div class="social">
                            <i class="bi">Price Per Event : Rs.16,499 </i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
            <p id="citieswithlines"><span>Delhi</span></p><br>
            <div class="row">

<div class="col-lg-4 col-md-6">
    <div class="member" data-aos="zoom-in" data-aos-delay="100">
        <img src="assets/img/chefs/chefs-4.jpg" class="img-fluid" alt="">
        <div class="member-info">
            <div class="member-info-content">
                <h4>Glam Up by Navneet</h4>
                <span>Delhi NCR</span>
            </div>
            <div class="social">
            <i class="bi">Price Per Event : Rs.24,999 </i>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="member" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/chefs/chefs-5.jpg" class="img-fluid" alt="">
        <div class="member-info">
            <div class="member-info-content">
                <h4>Surbhi Make Up Artist</h4>
                <span>Patparganj, Delhi</span>
            </div>
            <div class="social">
            <i class="bi">Price Per Event : Rs.9,499 </i>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="member" data-aos="zoom-in" data-aos-delay="300">
        <img src="assets/img/chefs/chefs-6.jpg" class="img-fluid" alt="">
        <div class="member-info">
            <div class="member-info-content">
                <h4>Pallavi Makeover</h4>
                <span>Laxmi Nagar, Delhi</span>
            </div>
            <div class="social">
            <i class="bi">Price Per Event : Rs.18,999 </i>
            </div>
        </div>
    </div>
</div>

</div>
<br><br>
            <p id="citieswithlines"><span>Bengaluru</span></p><br>
            <div class="row">

<div class="col-lg-4 col-md-6">
    <div class="member" data-aos="zoom-in" data-aos-delay="100">
        <img src="assets/img/chefs/chefs-7.jpg" class="img-fluid" alt="">
        <div class="member-info">
            <div class="member-info-content">
                <h4>Makeup Stories By Subiya</h4>
                <span>Jagajeevanram Nagar, Bengaluru</span>
            </div>
            <div class="social">
            <i class="bi">Price Per Event : Rs.22,999 </i>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="member" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/chefs/chefs-8.jpg" class="img-fluid" alt="">
        <div class="member-info">
            <div class="member-info-content">
                <h4>Makeup By Rekha Krishnamurthy</h4>
                <span>K S Layout, Bengaluru</span>
            </div>
            <div class="social">
            <i class="bi">Price Per Event : Rs.7,499 </i>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6">
    <div class="member" data-aos="zoom-in" data-aos-delay="300">
        <img src="assets/img/chefs/chefs-9.jpg" class="img-fluid" alt="">
        <div class="member-info">
            <div class="member-info-content">
                <h4>Kulsum Parvez Makeup Studio</h4>
                <span>Langford Rd, Bengaluru</span>
            </div>
            <div class="social">
            <i class="bi">Price Per Event : Rs.13,999 </i>
            </div>
        </div>
    </div>
</div>

</div>
        </div>
    </section><!-- End Chefs Section -->
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Some Photos From Our Gallery</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15085.955196918254!2d72.88582662826873!3d19.042234893715182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8ab1575fc05%3A0xbdae7c91630ed818!2sNityanand%20Baug%20Co-operative%20Housing%20Society%2C%20Laxmi%20Colony%2C%20Tolaram%20Colony%2C%20Chembur%2C%20Mumbai%2C%20Maharashtra%20400074!5e0!3m2!1sen!2sin!4v1641573203416!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>8C/12, Nityanand Baugh CHS Ltd, R.C. Marg, Mahul Road, Chembur, Mumbai-400074</p>
                            </div>

                            <div class="open-hours">
                                <i class="bi bi-clock"></i>
                                <h4>Calling Hours:</h4>
                                <p>
                                    Monday-Saturday:<br>
                                    11:00 AM - 11:00 PM
                                </p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>bhambhani123456@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+91 76669 03729</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">


                        <form action="" method="post" >
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="8" id="message" placeholder="Message" required></textarea>
                            </div>
                            <br>
                            <div class="text-center"><input type="submit" name="submit" id="sendmessage" value="Send Message"></div>
                        </form>


                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
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
                            <?php
						if(empty($_SESSION["email"])) 
							{
					echo '<li><i class="bx bx-chevron-right"></i> <a href="admin/dashboard.php">Admin</a></li>';
                              
							}
                            ?>
                            
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
                            <input type="email" name="email"><input type="submit" name="subscribe" value="Subscribe">
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
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-analytics.js";

        const firebaseConfig = {
            apiKey: "AIzaSyCjWp1Bg7_FKzb5_khlr3ynG8fo9Ydj5tI",
            authDomain: "ido-weddings-c287f.firebaseapp.com",
            projectId: "ido-weddings-c287f",
            storageBucket: "ido-weddings-c287f.appspot.com",
            messagingSenderId: "912965218160",
            appId: "1:912965218160:web:d33b8650fc6cf05df4e9b5",
            measurementId: "G-K702CVNSMC"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
    </script>
</body>

</html>