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

    <title>iDo Weddings - T&C</title>
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
                    <h2>Terms Of Service</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Terms of Service</li>
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
                    <h3>Terms and Conditions</h3>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> iDo Weddings Private Limited ("iDo Weddings" or "we") is a wedding website that provides valuable wedding-related information for the modern prospective couple. The services offered by us include the iDo Weddings websites located at idoweddings.com or any sub domain of idoweddings.com (the "iDo Weddings Website"). iDo Weddings is only a platform that connects prospect wedding clients and vendors that the Clients are willing to associate with to undertake their services. iDo Weddings is a wedding aggregation platform.</li>
                    <li><i class="bi bi-check-circle"></i> These Terms of Use (this "Agreement") set forth the legally binding terms for your use and are to be complied with in addition to any agreement or terms agreed upon between the Parties for the iDo Weddings Services. By using the iDo Weddings Services, whether as a "Visitor" (meaning you simply browse the iDo Weddings website) or as a "User" (meaning you have registered with and/or submitted content to the iDo Weddings website either as an individual or as a company), you agree to be bound by this Agreement and the iDo Weddings Privacy Policy located at www.idoweddings.com/privacy. This Agreement includes your rights, obligations and restrictions regarding your use of the iDo Weddings Services, please read it carefully. User (and “You”) may refer to both Customers as well as Vendors for the purpose of this Agreement. The term “Customer” shall refer to individuals or Parties undertaking iDo Weddings Services through the iDo Weddings platform and the term “Vendor” refers to the individual or entities listed on the iDo Weddings platform who provide services independently to the customers.</li>
                    <li><i class="bi bi-check-circle"></i> If you do not agree with the Terms of this Agreement, you should leave the iDo Weddings Website and discontinue use of the iDo Weddings Services immediately. If you wish to become a User, submit content, video or images, communicate with other Users and generally make use of the iDo Weddings Services, you must read this Agreement and indicate your acceptance during the content submission process. By using the iDo Weddings services or by doing any of the above, you are complying with all our terms and conditions and clauses mentioned hereinafter.</li>
                    <li><i class="bi bi-check-circle"></i> iDo Weddings may modify this Agreement from time to time and each modification will be effective when it is posted on the iDo Weddings Website. You agree to be bound to any changes to this Agreement through your continued use of the iDo Weddings Services. You will not be notified of any modifications to this Agreement so it is important that you review this Agreement regularly to ensure you are updated as to any changes.</li>
                    </ul><br>

                    <p style="font-style: bold; font-size: 18px;">WE URGE YOU TO THINK BEFORE YOU UPLOAD, SUBMIT OR EMBED CONTENT. THIS AGREEMENT PERMITS YOU TO UPLOAD TO , SUBMIT TO OR EMBED ON THE iDo Weddings SERVICES ONLY PHOTOS OR OTHER CONTENT THAT YOU OWN THE COPYRIGHT TO OR OTHERWISE HAVE THE RIGHT TO PUBLISH. BY UPLOADING, SUBMITTING OR EMBEDDING PHOTOS OR OTHER CONTENT THAT YOU DO NOT OWN THE COPYRIGHT TO OR DO NOT OTHERWISE HAVE THE RIGHT TO PUBLISH, YOU MAY SUBJECT YOURSELF TO LEGAL LIABILITY (SEE E.G., SECTIONS 4, 5 AND 6 BELOW). IT IS YOUR RESPONSIBILITY TO ENSURE YOU HAVE ADEQUATE RIGHTS TO PUBLISH TO THE iDo Weddings SERVICES ALL PHOTOS AND OTHER CONTENT YOU POST AND iDo Weddings TAKES NO LIABILITY OF THE SAME WHATSOEVER.</p><br><br><br>

                    <h5>1. Eligibility</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Use of the iDo Weddings Services is void where prohibited. By registering, you (i) represent and warrant that you have the right, authority, and capacity to enter into and to fully abide by all of the terms and conditions of this Agreement, as far as age, jurisdiction, laws of land, etc. are concerned and (ii) agree to comply with all applicable domestic and international laws, statutes, ordinances and regulations regarding your use of the iDo Weddings Services.</li>
                    </ul><br>

                    <h5>2. Term</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> This Agreement shall remain in full force and effect while you use the iDo Weddings Services or are a User/ Vendor on the website. iDo Weddings may terminate your use of the iDo Weddings Website or the iDo Weddings Services, in its sole discretion, for any reason or no reason whatsoever, at any time, without warning or notice to you. Upon such termination of agreement, the User shall be stopped from using iDo Weddings Services and all content shall remain to be the Property of iDo Weddings.</li>
                    </ul><br>

                    <h5>3. User & iDo Weddings Content</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> iDo Weddings does not claim any ownership rights in the text, files, images, photos, video, sounds, musical works, works of authorship, or any other materials (collectively, "User Content") that you upload to, submit to, or embed on the iDo Weddings platform; expect content created in collaboration with the iDo Weddings team for its own events/ perusal. In such cases, the same will be specified while creating the content in question.</li>
                    <li><i class="bi bi-check-circle"></i> You represent and warrant that you own the User Content posted by you on or through the iDo Weddings Services. or that you otherwise have sufficient right, title and interest in and to such User Content to grant iDo Weddings the licenses and rights set forth below without violating, infringing or misappropriating the privacy rights, publicity rights, copyrights, contract rights, intellectual property rights or any other rights of any person. You agree to pay for all royalties, fees, and any other monies owing any person by reason of any User Content posted by you to or through the iDo Weddings Services. iDo Weddings shall not be liable for any violation of Copyright or any other Intellectual Property or other rights being violated in any manner whatsoever and the User/Vendor posting the same shall be liable.</li>
                    <li><i class="bi bi-check-circle"></i> After posting, uploading or embedding User Content to the iDo Weddings Services, you continue to retain such rights in such User Content as you held prior to posting such User Content on the iDo Weddings Services and you continue to have the right to use your User Content in any way you choose. However, by displaying or publishing ("posting") any User Content on or through the iDo Weddings Services, you hereby grant to iDo Weddings a non-exclusive, royalty-free, transferable, sublicensable, worldwide license to use, display, reproduce, adapt, modify (e.g., re-format), rearrange, and distribute your User Content through any media now known or developed in the future. Photographs used on the iDo Weddings Services on in any iDo Weddings publication will include attribution to the photographer and/or copyright holder. iDo Weddings holds the right to remove any User content posted by you on the website in the event that iDo Weddings finds such content to be violative, inappropriate or worthy of being removed in any manner whatsoever and shall not be held liable for the same.</li>
                    <li><i class="bi bi-check-circle"></i> Without this license, iDo Weddings would be unable to provide the iDo Weddings or its publications. For example, the license you grant to iDo Weddings is non-exclusive (meaning you are free to license your Content to anyone else in addition to iDo Weddings), fully-paid and royalty-free (meaning that iDo Weddings is not required to pay you for the use of the User Content that you post), sublicensable (so that iDo Weddings is able to use its affiliates and subcontractors such as Internet content delivery networks to provide the iDo Weddings), and worldwide (because the Internet and the iDo Weddings are global in reach).</li>
                    <li><i class="bi bi-check-circle"></i> This license will terminate at the time you remove your User Content from the iDo Weddings Services except as to any User Content that iDo Weddings has sublicensed prior to your removal of your User Content from the iDo Weddings Services, which license shall continue in perpetuity. To remove User Content, please send a request to idoweddings55@gmail.com and include a brief description of the item(s) to be removed along with a URL of the item(s) current location on the iDo Weddings Website. We will remove the item(s) as quickly as possible. In the event that iDo Weddings uses the Vendor’s content on its website it shall do so while giving credit to the Vendor.</li>
                    <li><i class="bi bi-check-circle"></i> iDo Weddings does not take liability to ensure protection of the content posted on the website/platform. In the event that the Vendor posts content on the website and the same is infringed by another Vendor or any other third party, it shall not be the liability of iDo Weddings. We attempt to prevent such copying and infringement by applying our watermark on each image, but take no responsibility to further protect the content.</li>
                    <li><i class="bi bi-check-circle"></i> The iDo Weddings Services contain Content owned by iDo Weddings ("iDo Weddings Content"). iDo Weddings Content is protected by copyright, trademark, patent, trade secret and other laws, and iDo Weddings owns and retains all rights in the iDo Weddings Content and the iDo Weddings Services. iDo Weddings hereby grants you a limited, revocable, non-sublicensable license to view the iDo Weddings Content (excluding any software code) solely for your personal use in connection with viewing the iDo Weddings Website and using the iDo Weddings Services. Without limiting the generality of the foregoing, you agree that you shall not copy, modify, translate, publish, broadcast, transmit, license, sublicense, assign, distribute, perform, display, or sell any iDo Weddings Content appearing on or through the iDo Weddings Services.</li>
                    <li><i class="bi bi-check-circle"></i> The iDo Weddings Services contain Content of other Users and other iDo Weddings licensors ("Third Party Content") and you are permitted to access the Third Party Content solely for your personal use in connection with viewing the iDo Weddings Website and using the iDo Weddings Services. Without limiting the generality of the foregoing, you agree that you shall not copy, modify, translate, publish, broadcast, transmit, license, sublicense, assign, distribute, perform, display, or sell any Third Party Content appearing on or through the iDo Weddings Services. In the event that any User is found to be in violation of another person’s Intellectual Property or any other rights in any manner, they shall be absolutely and solely liable and no liability shall be laid down on iDo Weddings for the same.</li>
                    </ul><br>
 
                    <h5>4. Prohibited Content</h5>
                    <ul>
                    <li>iDo Weddings reserves the right, in its sole and absolute discretion, to determine whether User Content is appropriate; and to remove any User Content, without notice or liability to you, which it determines to be inappropriate. Without limiting the generality of the foregoing, the following is a partial list of the types of User Content that iDo Weddings deems to be inappropriate :</li>
                    <li><i class="bi bi-check-circle"></i> Content that criticizes a business or individual beyond that of merely offering an opinion.</li>
                    <li><i class="bi bi-check-circle"></i> Content that harasses or advocates harassment of another person.</li>
                    <li><i class="bi bi-check-circle"></i> Content that exploits people in a sexual or violent manner.</li>
                    <li><i class="bi bi-check-circle"></i> Content that contains nudity, violence, or offensive subject matter or contains a link to an adult website.</li>
                    <li><i class="bi bi-check-circle"></i> Content that includes racially, ethically, or otherwise objectionable language.</li>
                    <li><i class="bi bi-check-circle"></i> Content that is libelous, defamatory, or otherwise tortious language.</li>
                    <li><i class="bi bi-check-circle"></i> Content that solicits personal information from anyone under 18.</li>
                    <li><i class="bi bi-check-circle"></i> Content that promotes information that you know is false or misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libelous.</li>
                    <li><i class="bi bi-check-circle"></i> Content that promotes an illegal or unauthorized copy of another person’s copyrighted work, such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files.</li>
                    <li><i class="bi bi-check-circle"></i> Content that involves the transmission of "junk mail," "chain letters," or unsolicited mass mailing, instant messaging, "spimming," or "spamming".</li>
                    <li><i class="bi bi-check-circle"></i> Content that contains restricted or password only access pages or hidden pages or images (those not linked to or from another accessible page.</li>
                    <li><i class="bi bi-check-circle"></i> Content that furthers or promotes any criminal activity or enterprise or provides instructional information about illegal activities including, but not limited to making or buying illegal weapons, violating someone’s privacy, or providing or creating computer viruses.</li>
                    <li><i class="bi bi-check-circle"></i> Content that solicits passwords or personal identifying information for commercial or unlawful purposes from other Users.</li>
                    <li><i class="bi bi-check-circle"></i> Content that is owned, created or belongs to a third party and the entity posting/publishing such content has no authority to do so.</li>
                    <li><i class="bi bi-check-circle"></i> Content that involves commercial activities and/or sales without our prior written consent such as contests, sweepstakes, barter, advertising, or pyramid schemes.</li>
                    </ul><br>

                    <h5>5. Prohibited Activity</h5>
                    <ul>
                    <li>You expressly agree that you are prohibited from engaging in, and will not engage in, the following prohibited activities in connection with your use of the iDo Weddings Services -</li>
                    <li><i class="bi bi-check-circle"></i> Copying, modifying, translating, publishing, broadcasting, transmitting, licensing, sublicensing, assigning, distributing, performing, publicly displaying, or selling any Third Party Content or iDo Weddings Content appearing on or through the iDo Weddings Services.</li>
                    <li><i class="bi bi-check-circle"></i> Criminal or tortious activity, including child pornography, fraud, trafficking in obscene material, drug dealing, gambling, harassment, stalking, spamming, spimming, sending of viruses or other harmful files, copyright infringement, patent infringement, or theft of trade secrets.</li>
                    <li><i class="bi bi-check-circle"></i> Covering or obscuring the banner advertisements on your personal profile page, or any iDo Weddings page via HTML/CSS or any other means.</li>
                    <li><i class="bi bi-check-circle"></i> Any automated use of the system, such as using scripts to add friends or send comments or messages.</li>
                    <li><i class="bi bi-check-circle"></i> Interfering with, disrupting, or creating an undue burden on the iDo Weddings Services or the networks or services connected to the iDo Weddings Services.</li>
                    <li><i class="bi bi-check-circle"></i> Attempting to impersonate another User, person, or representative of iDo Weddings.</li>
                    <li><i class="bi bi-check-circle"></i> Using the account, username, or password of another User at any time or disclosing your password to any third party or permitting any third party to access your account.</li>
                    <li><i class="bi bi-check-circle"></i> Selling or otherwise transferring your profile, without our permission.</li>
                    <li><i class="bi bi-check-circle"></i> Using any information obtained from the iDo Weddings Services in order to harass, abuse, or harm another person.</li>
                    <li><i class="bi bi-check-circle"></i> Displaying an advertisement on your profile, or accepting payment or anything of value from a third person in exchange for your performing any commercial activity on or through the iDo Weddings Services on behalf of that person, such as placing commercial content on your profile, posting blogs or bulletins with a commercial purpose, or sending private messages with a commercial purpose.</li>
                    <li><i class="bi bi-check-circle"></i> Using the iDo Weddings Services in a manner inconsistent with any and all applicable laws and regulations.</li>
                    </ul><br>

                    <h5>6. Copyright Policy</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> You may not post, modify, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information belonging to iDo Weddings or others (including without limitation Third Party Content or iDo Weddings Content) without obtaining the prior written consent of the owner of such copyrighted material, trademarks, or other proprietary information.</li>
                    <li><i class="bi bi-check-circle"></i> Since iDo Weddings is a content-heavy platform, owing to the content generated by iDo Weddings as well as their multiple vendors and customers, iDo Weddings takes copyright & Intellectual property/proprietary rights extremely seriously.</li>
                    <li><i class="bi bi-check-circle"></i> If we become aware that one of our users is a repeat copyright infringer, it is our policy to take reasonable steps within our power to terminate that user. Without limiting the foregoing, if you believe that your work has been copied and posted on the iDo Weddings Services in a way that constitutes copyright infringement, please provide us with relevant proof and we ll be happy to take corrective action accordingly.</li>
                    </ul><br>

                    <h5>7. Customers</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Users accept and acknowledge that they are only visiting iDo Weddings platform to obtain information about a Vendor and that the book for the same is done individually, separate from iDo Weddings and hence, they shall not hold iDo Weddings liable in any manner for any issues that may arise in the future, related to such Vendor or such booking. That the Customer accepts and agrees that all transactions occur between the Users and iDo Weddings is not involved in the same in any manner.</li>
                    <li><i class="bi bi-check-circle"></i> In the event that a Customer shares their content & photographs with iDo Weddings for being featured on our platform, such content & photographs shall belong to the Customers and once shared with iDo Weddings, will be considered to be available for re-use and reposting by iDo Weddings.</li>
                    <li><i class="bi bi-check-circle"></i> That iDo Weddings shall make all efforts to try that the Customer’s experience is smooth and seamless, without any hassles but takes no liabilities or responsibilities to ensure the same.</li>
                    </ul><br>

                    <h5>8. Vendors</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Each Vendor accepts that they are merely listed on the iDo Weddings platform, through which they get reach to their target customer. Each Vendor creates their profile on the iDo Weddings platform and ensures to provide correct information regarding such profiles. Any misrepresentation of their identity or work shall be their liability alone and not the liability of iDo Weddings.</li>
                    <li><i class="bi bi-check-circle"></i> Vendors accept and acknowledge that they are entering into transactions and providing services to the Customer independently and are iDo Weddings is in no way involved, apart from being a listing platform. iDo Weddings, however expects Vendors to maintain quality of service and make no misrepresentations whatsoever.</li>
                    <li><i class="bi bi-check-circle"></i> Vendors shall not use any third party photographs or content and represent them as being their own. Any such misrepresentation shall be the liability of the Vendor alone.</li>
                    <li><i class="bi bi-check-circle"></i> As a wedding aggregator, iDo Weddings has commercial dealings with certain vendors on its platform. This commercial arrangement, includes but is not restricted to, providing additional visibility in return for a certain fee.</li>
                    <li><i class="bi bi-check-circle"></i> This fee doesn’t in any way guarantee any business confirmations/ bookings. iDo Weddings acts as a facilitator , helping vendors leverage its vast network and enabling them to reach out to more customers.</li>
                    </ul><br>

                    <h5>9. User Disputes</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Users are solely responsible for their interactions with other iDo Weddings Users (including Vendors). iDo Weddings reserves the right, but has no obligation, to monitor disputes between you and other Users and to immediately terminate the privileges of any User for any reason or for no reason.</li>
                    <li><i class="bi bi-check-circle"></i> iDo Weddings is only a listing and aggregating platform and no associations, interactions, bookings that happen on the iDo Weddings platform are the responsibility of iDo Weddings.</li>
                    <li><i class="bi bi-check-circle"></i> Vendor data showcased on profiles in the form of photos, price, reviews etc is a result of vendors’ inputs and those of their customers. While iDo Weddings does take efforts to verify the claims made in the form of price, work etc, it in no way ensures/ guarantees the displayed info to be accurate.</li>
                    </ul><br>

                    <h5>10. Privacy</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Users accept and acknowledge that they are only visiting iDo Weddings platform to obtain information about a Vendor and that the book for the same is done individually, separate from iDo Weddings and hence, they shall not hold iDo Weddings liable in any manner for any issues that may arise in the future, related to such Vendor or such booking. That the Customer accepts and agrees that all transactions occur between the Users and iDo Weddings is not involved in the same in any manner.</li>
                    </ul><br>

                    <h5>11. Promotions and Giveaways</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> From time to time, iDo Weddings will offer sweepstakes, promotions or giveaways on behalf of third parties. Each promotion or giveaway will have its own rules that will disclose what information is gathered, how that information is used, and who that information shared with. iDo Weddings encourages you to review such information prior to engaging with each sweepstakes, promotion or giveaway and takes no liability of the same.</li>
                    </ul><br>

                    <h5>12. Disclaimer of Warranties</h5>
                    <ul>
                    <li>THE iDo Weddings SERVICE IS PROVIDED TO YOU ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT REPRESENTATIONS OR WARRANTIES OF ANY KIND AND iDo Weddings EXPRESSLY DISCLAIMS ANY AND ALL IMPLIED OR STATUTORY WARRANTIES TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, INCLUDING WITHOUT LIMITATION IMPLIED WARRANTIES OF TITLE, NON-INFRINGEMENT, MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM THE WEBSITE OR iDo Weddings SERVICES SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED IN THE TERMS OF USE.<br><br>Without limiting the generality of the foregoing, iDo Weddings is not responsible for any incorrect or inaccurate Content posted on the iDo Weddings Website or in connection with the iDo Weddings Services. User Content created and posted on the iDo Weddings Website may contain links to other websites. iDo Weddings is not responsible for the accuracy or opinions contained in User Content or on third party websites linked from User Content. iDo Weddings is not responsible for the security of the third Party websites and any such websites accessed by the User is their sole liability. Such websites are in no way investigated, monitored or checked for accuracy or completeness by iDo Weddings. Inclusion of any linked website on the iDo Weddings Services does not imply approval or endorsement of the linked website by iDo Weddings. When you access these third-party sites, you do so at your own risk. iDo Weddings takes no responsibility for third party advertisements which are posted on this iDo Weddings Website or through the iDo Weddings Services, nor does it take any responsibility for the goods or services provided by its advertisers. iDo Weddings is not responsible for the conduct, whether online or offline, of any User of the iDo Weddings Services.<br>iDo Weddings assumes no responsibility for any error, omission, interruption, deletion, defect, delay in operation or transmission, communications line failure, theft or destruction or unauthorized access to, or alteration of, any User communication or any Content. iDo Weddings is not responsible for any problems or technical malfunction of any telephone network or lines, computer online systems, servers or providers, computer equipment, software, failure of any email or players due to technical problems or traffic congestion on the Internet or on any of the iDo Weddings Services or combination thereof, including any injury or damage to Users or to any person’s computer related to or resulting from participation or downloading materials in connection with the iDo Weddings Services.<br>Under no circumstances shall iDo Weddings be responsible for any loss or damage, including personal injury or death, resulting from use of the iDo Weddings Services, attendance at a iDo Weddings event, from any Content posted on or through the iDo Weddings Services, or from the conduct of any Users of the iDo Weddings Services, whether online or offline. iDo Weddings cannot guarantee and does not promise any specific results from use of the iDo Weddings Services.</li>
                    </ul><br>

                    <h5>13. Limitation of Liability</h5>
                    <ul>
                    <li>IN NO EVENT SHALL iDo Weddings OR ANY PARENT, SUBSIDIARY, AFFILIATE, DIRECTOR, OFFICER, EMPLOYEE, LICENSOR, DISTRIBUTOR, SUPPLIER, AGENT, RESELLER, OWNER, OR OPERATOR OF iDo Weddings BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT DAMAGES ARISING FROM YOUR USE OF THE SERVICES, EVEN IF iDo Weddings HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, iDo Weddings' LIABILITY TO YOU FOR ANY CAUSE WHATSOEVER AND REGARDLESS OF THE FORM OF THE ACTION, WILL AT ALL TIMES BE LIMITED TO THE AMOUNT PAID, IF ANY, PAID BY YOU TO iDo Weddings FOR THE iDo Weddings SERVICES DURING THE TERM OF YOUR USE. THE FOREGOING LIMITATION OF LIABILITY SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW IN THE APPLICABLE JURISDICTION. YOU SPECIFICALLY ACKNOWLEDGE THAT iDo Weddings SHALL NOT BE LIABLE FOR USER CONTENT OR FOR ANY DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY AND THAT THE RISK OF HARM OR DAMAGE FROM THE FOREGOING RESTS ENTIRELY WITH YOU. SOME JURISDICTIONS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES. ACCORDINGLY, SOME OF THE LIMITATIONS MAY NOT APPLY TO YOU</li>
                    </ul><br>

                    <h5>14. Special Admonitions for International Use</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Recognizing the global nature of the Internet, you agree to comply with all local rules regarding online conduct and acceptable Content. Specifically, you agree to comply with all applicable laws regarding the transmission of technical data exported from India the United States or the country in which you reside.</li>
                    </ul><br>

                    <h5>15. Disputes; Choice of Law; Venue</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> If there is any dispute about or involving the iDo Weddings Services, you agree that the dispute shall be governed by the laws of Mumbai, India and the Courts of Mumbai shall have jurisdiction. The prevailing party in any action brought in connection with this Agreement shall be entitled to an award of attorney's fees and costs incurred by the prevailing party in connection with such action.</li>
                    </ul><br>

                    <h5>16. Indemnity</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> You agree to indemnify and hold harmless iDo Weddings, and any parent, subsidiary, and affiliate, director, officer, employee, licensor, distributor, supplier, agent, reseller, owner and operator, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, including but not limited to reasonable attorneys’ fees, made by any third party due to or arising out of your use of the iDo Weddings Services in violation of this Agreement and/or arising from: (i) your use of and access to the iDo Weddings Website; (ii) your violation of any term of these Terms of Use; (iii) your violation of any third party right, including without limitation any copyright, property, or privacy right; or (iv) any claim that your User Content caused damage to a third party. This defense and indemnification obligation will survive these Terms of Use and your use of the iDo Weddings Website and/or the iDo Weddings Services.</li>
                    </ul><br>

                    <h5>17. Waiver and Severability of Terms</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> The failure of iDo Weddings to exercise or enforce any right or provision of this Agreement shall not constitute a waiver of such right or provision. If any provision of this Agreement is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties’ intentions as reflected in the provision, and the other provisions of this Agreement remain in full force and effect.</li>
                    </ul><br>

                    <h5>18. Statute of Limitations</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> You agree that regardless of any statute or law to the contrary, any claim or cause of action arising out of or related to use of the Service or this Agreement must be filed within one (1) year after such claim or cause of action arose or be forever barred.</li>
                    </ul><br>

                    <h5>19. Violations</h5>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> Please report any violations of these Terms of Use to us by emailing us at idoweddings55@gmail.com</li>
                    </ul><br>

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