<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
error_reporting(0); 
include("connection/connect.php");

if(isset($_POST['submit'] ))
{
    $hall = $_POST['hall'];  
    $fullname = $_POST['fullname'];  
    $email = $_POST['email'];  
    $phone = $_POST['phone'];  
    $no_of_guests = $_POST['no_of_guests'];      
    $price_per_plate = $_POST['price_per_plate'];  
    $rooms = $_POST['rooms'];  
    $event_type = $_POST['event_type'];      
    $event_time = $_POST['event_time'];  
    $date_of_event = $_POST['date_of_event'];  
    
    $total_bill = $no_of_guests*$price_per_plate;

    $mql = "INSERT INTO banquet_hall_bookings(hall_name,full_name,email,phone,number_of_guests,price_per_plate,total_bill,date_of_event,number_of_rooms,function,function_time) VALUES('".$_POST['hall']."','".$_POST['fullname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['no_of_guests']."','".$_POST['price_per_plate']."','".$total_bill."','".$_POST['date_of_event']."','".$_POST['rooms']."','".$_POST['event_type']."','".$_POST['event_time']."')";
	mysqli_query($db, $mql);

    
    $success = '<div class="" style="color:#CDA45E; background-color:transparent; padding:5px; font-weight: bold; text-align: center; border-style: groove; border-color:#CDA45E; border-radius: 8px; border-size: 25px;" role="alert">Booking Done Successfully</div>';

    $customer_email=$_POST['email'];       
    $html='Congratulations, your iDo Weddings booking was successful. Hope you like our services. <br><br> Booking Details : <br> Name : '.$_POST['fullname'].' <br> Phone Number : '.$_POST['phone'].' <br> Location : '.$_POST['hall'].' <br> Price Per Plate : '.$_POST['price_per_plate'].' <br> Number of Guests : '.$_POST['no_of_guests'].' <br> Number of Rooms : '.$_POST['rooms'].' <br> Event Type : '.$_POST['event_type'].' <br> Event Time : '.$_POST['event_time'].' <br> Event Date : '.$_POST['date_of_event'].' <br> Total Bill : Rs. '.$total_bill.'';
    $sender_email = "idoweddings55@gmail.com";
    $sender_password = "jaidev123";
    include('smtp/PHPMailerAutoload.php');
    $mail=new PHPMailer();
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->Port=587;
    $mail->SMTPSecure="tls";
    $mail->SMTPAuth=true;
    $mail->Username = $sender_email;
    $mail->Password = $sender_password;
    $mail->setFrom($sender_email, "iDo Weddings");
    $mail->addAddress($customer_email);
    $mail->IsHTML(true);
    $mail->Subject="Banquet Hall Booking Confirmation";
    $mail->Body=$html;
    $mail->send();

}
    



?>
<head>

    <style>
    .bookbanquets {
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

    input[type=submit] {
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

#formbanquets {
  border-radius: 7px;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;
}

#formbanquets1 {
  border-radius: 25px;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;
  text-align:center;
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

#Select1:focus, #Select2:focus {
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

    <title>iDo Weddings - The Chancery Pavilion</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

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
                            <a class="nav-link scrollto" href="events.html"><span>Events</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="events-engagement.aspx">Engagement</a></li>
                                <li class="dropdown">
                                    <a href="events-wedding.aspx"><span>Wedding</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="events-traditional.aspx">Traditional/Classic Wedding</a></li>
                                        <li><a href="events-destination.aspx">Destination Wedding</a></li>
                                        <li><a href="events-diy.aspx">DIY Wedding</a></li>
                                        <li><a href="events-vintage.aspx">Vintage Wedding</a></li>
                                        <li><a href="events-elopement.aspx">Elopement Wedding</a></li>
                                    </ul>
                                </li>
                                <li><a href="events-haldi.aspx">Haldi Ceremony</a></li>
                                <li><a href="events-sangeet.aspx">Sangeet Ceremony</a></li>
                                <li><a href="events-reception.aspx">Reception</a></li>
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


        </main><!-- End #main -->
        <!-- ======= Banquet Halls Section ======= -->
        <section id="about" class="about">
            <section id="book-a-table" class="book-a-table">
                <div class="container" data-aos="fade-up">

                    <form action="" method="post"  data-aos="fade-up" data-aos-delay="100">

                        <div class="row">
                            <div class="col-lg-6 order-1 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
                                <div class="about-img">
                                    <img src="assets/img/halls/chancerybangalore.jpg" alt="" />
                                </div>
                                <div>
                         <label class="price" style="margin-top:50px; margin-left:150px">Price per Plate : Rs.1650</label>
                                </div>
                                <br />

                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
                                <h3>The Chancery Pavilion</h3>
                                <?php echo $success;?>
                            
                                <p class="fst-italic">
                                135, Residency Rd, Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025.
                                </p>

                                <div class="row">
                                <div class="col-md-12 form-group">
                                        <input type="text" name="hall" class="form-control" value="The Chancery Pavilion" readonly  id="formbanquets1">
                                    </div><br></br>
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="fullname" class="form-control" value="<?php echo $_SESSION['first_name']; echo ' '; echo $_SESSION['last_name']?>" readonly   id="formbanquets">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" readonly   id="formbanquets">
                                    </div><br><br />
                                    <div class="col-md-6 form-group">
                                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="formbanquets" pattern="^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="number" name="no_of_guests" class="form-control" placeholder="Number Of Guests" id="formbanquets" min="50" max="1500" required>
                                    </div><br><br />

                                    <div class="col-md-6 form-group">                                  
                                    <input type="text"  class="form-control" value="Price Per Plate:" readonly   id="formbanquets">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                      
                                        <input type="text" name="price_per_plate" class="form-control" value="1650" readonly   id="formbanquets">
                                    </div><br><br />


                                    <div class="col-md-6 form-group">
                                        <input type="date" name="date_of_event" class="form-control"  id="formbanquetsdate" min="<?php echo date('Y-m-d'); ?>" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="number" name="rooms" class="form-control" placeholder="Number of Rooms"   id="formbanquets" min="5" max="250" required>
                                    </div><br><br />
                                    <div class="col-md-6 form-group">
                                        Function Type
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        Function Time
                                    </div><br />
                                    <div class="col-md-6 form-group">
                                        <select id="Select1" name="event_type" class="form-select" required>
                                            <option value="">Choose Type</option>
                                            <option>Engagement</option>
                                            <option>Wedding</option>
                                            <option>Haldi Ceremony</option>
                                            <option>Sangeet Ceremony</option>
                                            <option>Mehendi</option>
                                            <option>Reception</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <select name="event_time" id="Select2" class="form-select" required>
                                            <option value="">Choose Time</option>
                                            <option>Evening</option>
                                            <option>Day</option>
                                        </select>
                                    </div>


                                    <br /> <br /><br />
                                    <div class="col-md-6 form-group mt-3 mt-md-0" style="margin-left:260px;">
<?php
if(!isset($_SESSION["email"]) ){
   echo '<a href="login.php" class="bookbanquets">Login to Book</a>';
  }
else{
echo '<input type="submit" name="submit" value="BOOK" class="bookbanquets">';
}
?>

                                 

                                    </div>


                                   
                                </div>





                            </div>

                        </div>
                    </form>
                </div>
            </section>
        </section>
        <!-- End About Section -->
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