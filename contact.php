<?php

    if (isset($_POST['submit'])) {
        
        $from = $_POST['email'];
        $to = 'media@cnc-international.com';
        $name = $_POST['name'];
        $phoneNum = $_POST['phone'];
        $message = $_POST['message'];

        $subject = 'Website enquiry';
        $mailheader = "From: $from \r\n";

        $formcontent= "From: $name \n Contact No.: $phoneNum \n Email Address: $from \n\n Message: $message";

        if (!$_POST['email']) {
            $emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>';
        }
        
        if (!$emailError) {
            if (mail ($to, $subject, $formcontent, $mailheader)) {
                $result = '<div class="text-success"><i class="fa fa-check" aria-hidden="true"></i> &nbsp;thank you we\'ll keep you updated</div>';
            } else {
                $result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;sorry there has been an error, please try again</div>';
            }
        }
        
    }
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/favicon.png">
    
    <title>Connect & Care | Home</title>
    <meta name="keywords" content="Travel planning, travel bundles, travel escapes, affordable travel">
    <meta name="description" content="Your clarity. One trip away. We create soul restoring journeys that inspire you to be you.">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- Owl Carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="styles.css">
   
</head>
<body>

    <header class="site-header">
        <div class="wrapper">
            <div class="site-header__main-nav flex">
                <div class="site-header__logo">
                    <a href="index.html"><img src="images/main-logo.svg" alt="Connect & Care" /></a>
                </div>
                <div class="site-header__menu-content" id="menu-content">
                    <i class="fas fa-times fa-3x closeMenu"></i>
                    <nav class="primary-nav">
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="programs.html">Programs</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="news.html" >News</a></li>
                            <li> <a href="contact.php" id="contact-link" class="contact-btn active">Contact Us</a></li>
                        </ul>
                    </nav>
                   
                </div>
                <i class="fas fa-bars fa-2x showMenu"></i>
                
            </div>
        </div>
        
       
    </header>

   
    <!-- about main -->
    <section class="contact-main my-5">
        <div class="wrapper">
            <div class="contact-main__header">
                <h1 class="lg-title uppercase text-primary text-center">Contact Us</h1>
                <h2 class="text-center">Need help, or have a question?</h2>
                
            </div>
            <div class="contact-main__wrapper grid">
               
                <div class="contact-main__address">
                    <h3>Mobile Number: </h3>
                   
                    <p>(+63) 9164047893 (Globe)<br>
                        (+63) 9298663204 (Smart)</p>
                        
                    <h3>Landline: </h3>
                        <p>(+632) 7934 4005</p>
                    <h3>Email Address:</h3> 
                        <p>media@cnc-international.com</p>
                </div>
                <div class="contact-main__form" id="email">
                    <!-- <h2>Request a Demo</h2> -->
                    <form name="contact" method="POST" role="form" action="#email">    
                        <div class="form-control">
                            <label class="label-style">Name:</label>
                            <input type="text" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-control">
                            <label class="label-style">Mobile Number: </label>
                            <input type="tel" name="phone" placeholder="(+63) 9164047893" required>
                        </div>
                        <div class="form-control">
                            <label class="label-style">Email Address:</label>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <!-- <div class="form-control">
                            <label class="label-style">Subject:</label>
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div> -->
                        
                        <div class="form-control">
                            <textarea placeholder="How can we help?" name="message"></textarea>
                        </div>
                        <!-- <input type="submit" value="Send" class="btn btn-primary"> -->
                        <button type="submit" class="btn btn-primary" name="submit" value="send">Submit</button>
                    </form>
                    <?php echo $emailError;?>
                    <?php echo $result;?>
                </div>
             
                
            </div>
        </div>
    </section>
    

    
    <!-- End footer-->

     <!-- footer-->
     <div class="footer bg-primary red-border">
        <div class="wrapper ">
            <div class="grid grid-6 mt-2">
                <div class="footer_item">
                    <img src="images/c&c_main-logo.svg" class="company-logo" alt="Connect and Care Germany">
                </div>
                <div class="footer_item one">
                    <h3>C&C Service</h3>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="programs.html">Programs</a></li>
                        <li><a href="news.html">News</a></li>
                    </ul>
                </div>
                <div class="footer_item two">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                      
                    </ul>
                </div>
                <div class="footer_item company">
                    <h3>Affiliated</h3>
                    <ul>
                        <li><a href="#">Agile Maritime Resources Inc.</a></li>
                        <li><a href="#">Lubeca Protection & Indemnity Phils., Inc.</a></li>
                        <li><a href="#">Connect & Care Deutschland GmbH</a></li>
                    </ul>
                </div>
                <div class="footer_item social">
                    <h3>Follow Us</h3>
                    <a href="https://www.facebook.com/cncinternatl" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                    <!-- <a href="#"><i class="fab fa-instagram fa-2x"></i></a> -->
                   
                </div>
                <div class="footer_item address">
                    <p>Suite 205 Marbella 1 Bldg.
                        2223 Roxas Blvd., Pasay City 1300
                        Philippines</p>
                </div>
            </div>
            <div class="footer__sub-footer text-center">
                <p class="">Copyright © 2020 Connect & Care, International Human Resource Management Services</p>
            </div>
        </div>
        
    </div>
    <!-- End footer-->
    <!-- scripts-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>

    <script src="js/app.js"></script>
    <script src="js/banner.js"></script>
    
</body>
</html>