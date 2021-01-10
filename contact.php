<?php
  
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
      
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
                        </div>";
    }
      
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
	}
	
    $recipient = "kennedyizuegbu@yahoo.com";

      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
      
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Phiozah | Contact Us</title>
    <meta charset="UTF-8">
    <meta name="description"
        content="Phiozah Limited is a fast rising 100% Nigerian indigenous oil services company, incorporated to be a leading provider of procurement & supply chain services, project management, Engineering & Engineering support services, offshore vessel support and technical manpower supply in Nigerian and West African.">
    <meta name="keywords" content="phiozah, oil and gas, oil services, procurement, vessel support">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section  -->
    <header class="header-section clearfix">
        <!-- <div class="header-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="col-md-6 text-md-right">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
		</div> -->
        <div class="site-navbar">
            <!-- Logo -->
            <a href="index.php" class="site-logo">
                <img src="img/logo.png" alt="">
            </a>
            <div class="header-right">
                <div class="header-info-box">
                    <div class="hib-icon">
                        <img src="img/icons/phone.png" alt="" class="">
                    </div>
                    <div class="hib-text">
                        <h6>+234 705 3945 678</h6>
                        <p>info@phiozah.com</p>
                    </div>
                </div>
                <!-- <div class="header-info-box">
					<div class="hib-icon">
						<img src="img/icons/map-marker.png" alt="" class="">
					</div>
					<div class="hib-text">
						<h6>Anthony Village, Lekki</h6>
						<p>Lagos, Nigeria</p>
					</div>
				</div> -->
                <!-- <button class="search-switch"><i class="fa fa-search"></i></button> -->
            </div>
            <!-- Menu -->
            <nav class="site-nav-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="solutions.php">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="solutions.php#section1">Procurement & Supply Chain Management</a></li>
                            <li><a href="solutions.php#section1">Engineering Support Services and High Definition
                                    Surveying</a></li>
                            <li><a href="solutions.php#section1">Project Management</a></li>
                            <li><a href="solutions.php#section1">Technical Manpower Supply</a></li>
                            <li><a href="solutions.php#section1">Meet & Greet Service</a></li>
                        </ul>
                    </li>
                    </li>

                    <li class="active"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

        </div>
    </header>
    <!-- Header section end  -->

    <!-- Page top section  -->
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2>Contact Us</h2>
                    <p>Need to get intouch with us?, send us an email and we'd get back to you </p>
                    <!-- <a href="" class="site-btn">Say hello</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Page top section end  -->

    <!-- Map section  -->
    <!-- <div class="map-section">
		<div class="container">
			<div class="map-info">
				<img src="img/logo-contact.png" alt="">
				<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Quisque orci purus, sodales in est quis,
					blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>
			</div>
		</div>
		<div class="map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522"
				style="border:0" allowfullscreen></iframe>
		</div>
	</div> -->
    <!-- Map section end  -->

    <!-- Contact section   -->
    <section class="contact-section spad" id='section1'>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Get in Touch</h2>
                        <p>If you have any further enquiries, simply fill out the form and we will get back to you as
                            soon as we can.</p>
                        <div class="header-info-box">
                            <div class="hib-icon">
                                <img src="img/icons/phone.png" alt="" class="">
                            </div>
                            <div class="hib-text">
                                <h6>+234 705 3945 678</h6>
                                <p>info@phiozah.com</p>
                            </div>
                        </div>
                        <div class="header-info-box">
                            <div class="hib-icon">
                                <img src="img/icons/map-marker.png" alt="" class="">
                            </div>
                            <div class="hib-text">
                                <h6>Anthony Village, Lekki</h6>
                                <p>Lagos, Nigeria</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="contact.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name" name="visitor_name" pattern=[A-Z\sa-z]{3,20}
                                    required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Email" name="visitor_email" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Subject" name="email_title" pattern=[A-Za-z0-9\s]{8,60}>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="text-msg" placeholder="Message" name="visitor_message" required>
								</textarea>
                                <button class="site-btn" type="submit" style="background: skyblue;">send
                                    message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section end  -->


    <!-- Footer section -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget about-widget">
                        <img src="img/logo.png" alt="">
                        <p>Phiozah Limited is a fast rising 100% Nigerian indigenous oil services company, incorporated
                            to be a leading provider of procurement & supply chain services, project management,
                            Engineering & Engineering support services, offshore vessel support and technical manpower
                            supply in Nigerian and West African. </p>
                        <div class="footer-social">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h2 class="fw-title">Useful Resources</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="solutions.php">Our Services</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h2 class="fw-title">Our Services</h2>
                        <ul>
                            <li><a href="solutions.php#section1">Procurement & Supply Chain Management</a></li>
                            <li><a href="solutions.php#section1">
                                    Engineering Support Services and High Definition Surveying</a></li>
                            <li><a href="solutions.php#section1">
                                    Project Management</a></li>
                            <li><a href="solutions.php#section1">
                                    Technical Manpower Supply</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-7">
                    <div class="footer-widget">
                        <h2 class="fw-title">Contact Us</h2>
                        <!-- <div class="footer-info-box">
							<div class="fib-icon">
								<img src="img/icons/map-marker.png" alt="" class="">
							</div>
							<div class="fib-text">
								<p>Anthony Village, Lekki<br>Lagos, Nigeria</p>
							</div>
						</div> -->
                        <div class="footer-info-box">
                            <div class="fib-icon">
                                <img src="img/icons/phone.png" alt="" class="">
                            </div>
                            <div class="fib-text">
                                <p>+234 705 3945 678<br>info@phiozah.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-buttom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 order-2 order-lg-1 p-0">
                        <div class="copyright">

                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> Phiozah Ltd, All rights reserved

                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 p-0">
                        <ul class="footer-menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="Our Services.html">Our Services</a></li>

                            <li class="active"><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section end -->

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>