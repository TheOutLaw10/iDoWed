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


?>

<head>
<style>
 input[type=submit] {
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
</style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iDo Weddings - Privacy Policy</title>
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
                    <h2>Privacy Policy</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Privacy</li>
                    </ol>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
<!-- ======= Body ======= -->
<section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                </div>
                <div class="content">
                    <h3>Privacy Policy</h3>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Our management has created this Privacy Statement (Policy) in order to demonstrate our firm commitment to help our users better understand what information we collect about them and what may happen to that information.</li>
                    <li><i class="bi bi-check-circle"></i> The terms "We, iDo Weddings, Us" refer to idoweddings.com and the terms "You, Your" refer to a user of idoweddings.com.</li>
                    <li><i class="bi bi-check-circle"></i> In the course of our business of helping our viewers plan their wedding, we collect certain information from you.</li>
                    <li><i class="bi bi-check-circle"></i> In the course of registering for and availing various services we provide from time to time through our website: iDo Weddings, you may be required to give your Name, address, Email address, phone number.</li>
                    <li><i class="bi bi-check-circle"></i> The Personal Information is used for three general purposes: to customize the content you see, to fulfill your requests for certain services, and to contact you about our services. Unless otherwise stated explicitly, this Policy applies to Personal Information as disclosed on any of the Media.</li>
                    <li><i class="bi bi-check-circle"></i> Dear Users, iDo Weddings undertakes and acknowledges to be compliant with all necessary legal requirements and compliances and is under process of executing the GDPR regulations & compliances on its website for all our relevant users. The Data we collect and use is upon your consent and none of our activities amount to breach of GDPR compliance. We value your security and privacy and are doing our best to ensure security of the data you provide to us in any manner whatsoever. We acknowledge your consent for providing such data to us for smooth execution of our services and note your acceptance to providing us with all information so collected, including Name, Gender, Email, Contact Number, Age, Location, Device Details, Browsing Information, SMS, App Install and Usage, Preferences, Intent etc.</li>
                    </ul><br>

                    <h3>Security</h3>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Personal Information will be kept confidential and we do not disclose the information except that in case you have specifically made an enquiry . Further, the vendors / advertisers who are listed with us, may call you, based on the query or enquiry that you make with us, enquiring about any Product / Service they might offer.</li>
                    <li><i class="bi bi-check-circle"></i> We will share Personal Information only under one or more of the following circumstances: - If we have your consent or deemed consent to do so - If we are compelled by law (including court orders) to do so.</li>
                    <li><i class="bi bi-check-circle"></i> In furtherance of the confidentiality with which we treat Personal Information we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect online.</li>
                    <li><i class="bi bi-check-circle"></i> We give you the ability to edit your account information and preferences at any time, including whether you want us to contact you regarding any services. To protect your privacy and security, we will also take reasonable steps to verify your identity before granting access or making corrections.</li>
                    <li><i class="bi bi-check-circle"></i> We treat data as an asset that must be protected against loss and unauthorized access. We employ many different security techniques to protect such data from unauthorized access by members inside and outside the company. However, "perfect security" does not exist on the Internet, or anywhere else in the world! You therefore agree that any security breaches beyond the control of our standard security procedures are at your sole risk and discretion.</li>
                    </ul><br>

                    <h3>Links To Other Websites</h3>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> We have affiliate links to many other online resources. We are not responsible for the practices employed by these affiliates or their websites linked to or from idoweddings.com nor the information or content contained on these third party websites. You should carefully review their privacy statements and other conditions of use and you agree you provide information or engage in transactions with these affiliates at your own risk.</li>
                    </ul><br>

                    <h3>Control Of Your Password</h3>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> You are responsible for all actions taken with your login information and password, including fees. Therefore we do not recommend that you disclose your account password or login information to any third parties. If you lose control of your password, you may lose substantial control over your personally identifiable information and may be subject to legally binding actions taken on your behalf. Therefore, if your password has been compromised for any reason, you should immediately change your password.</li>
                    </ul><br>
 
                    <h3>Content On The Site</h3>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> idoweddings.com features some of the latest trends in Indian weddings around the world, and tries to give its users exposure to quality hand-picked content. In our endeavor, we feature pictures and stories from various real weddings and vendors. Vendors are expected to take utmost care to take permission / hold copyright of images given to us. We also feature weddings and articles where users have given us permission to use the same.</li>
                    <li><i class="bi bi-check-circle"></i> However, in the unlikely event of anyone having any objection to content put up on our site, they are free to contact us immediately and we ll be happy to consider their request and take necessary action.</li>
                    </ul><br>

                    <h3>Updates on Privacy Policy</h3>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> We reserve the right to revise these Privacy Policies of idoweddings.com from time to time by updating this posting. Such revised policies will take effect as of the date of posting.</li>
                    </ul><br>

                    <h3>Contact Us</h3>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> If you have any further queries regarding the privacy policy, feel free to contact us at idoweddings55@gmail.com</li>
                    </ul>

                </div>
            </div>

        </div>
    </section>
<!-- End Body -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
                <?php echo  $success?>
            </div>
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

                    <form action="" method="post">
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
                            <textarea class="form-control" name="message" rows="8" id="message" placeholder="Type your message here..." required></textarea>
                        </div>
                       <br>
                        <div class="text-center"><input type="submit" name="submit" value="Send Message"></div>
                    </form>
                   
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
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