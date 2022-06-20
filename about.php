<?php
session_start();
include 'sessions.php';
$ses = new MySessions();

//search form implementation
if (isset($_POST['search'])) {
    $center_number = $_POST['center'];
    $cert_number = $_POST['certificate'];
}
?>
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Electronic Certificate Verification</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <meta name="keywords" content="Recruit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Custom Theme files -->
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
        <!-- font-awesome icons -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- //Custom Theme files -->
        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i"
              rel="stylesheet">
    </head>

    <body>
        <!-- Slider -->
        <div class="w3-banner-info-w3ltd position-relative">
            <!-- header -->
            <?php include 'includes/header.php'; ?>
            <!-- //header -->
            <div class="inner-banner-w3ls" style="background-image: url(images/flag.jpg);">
            </div>
            <!-- breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-flex justify-content-center bg-theme">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">About Us</li>
                </ol>
            </nav>
            <!-- //breadcrumbs -->
            <!-- about -->
            <section class="about-wthree py-3">
                <div class="container  py-sm-5">
                    <div class="title-sec-w3layouts_pvt">
                        <h4 class="text-center">Electronic Nationalized Certificate Verification System for Nigerians</h4>
                        <br/>
                        <p style="text-align: justify; line-height: 2em;">
                            The fast improvement in technology is indeed making 
                            both positive and negative impacts in different sectors 
                            our economy today. On the area of academics, 
                            technology has improved so much on graphics 
                            designing to the extent that fake/forged certificates 
                            can barely be identified. Currently, employers or 
                            organizations have to go through a costly and hectic process 
                            in order to verify the validity of an employee’s certificate. 
                            For this purpose, most companies decide to go with whatever 
                            academic certificate is provided by an individual, thereby 
                            encouraging the act of academic certificate forgery. The proposed 
                            system in this research work is aimed at reducing/removing 
                            the rate at which academic certificates are forged by reducing 
                            the excess cost, time and stress involved in the process of 
                            certificate verification, while improving its efficiency. 
                            Structured System Analysis and Design Methodology is chosen 
                            as the best methodology for this research. Technologies used 
                            for the development of the proposed system are; Hypertext 
                            Preprocessor (PHP) programming language, Cascaded Style 
                            Sheet (CSS), Hyper Text Markup Language (HTML) and 
                            Javascript for the structure and design; while MySQL 
                            was selected for the database.
                        </p>
                    </div>
                </div>
                    
            </section><hr style="border: 2px solid #0D2865;"/>
        </div>
        <!-- //Slider -->
        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
        <!-- /Footer -->
        <!-- login modal -->
        <?php include 'includes/login_modal.php'; ?>
        <!-- //login modal -->
        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- Slider-JavaScript -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider, #slider1").responsiveSlides({
                    auto: true,
                    nav: false,
                    speed: 1500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <!-- //Slider-JavaScript -->
        <!-- script for password match -->
        <script>
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }

            function validatePassword() {
                var pass2 = document.getElementById("password2").value;
                var pass1 = document.getElementById("password1").value;
                if (pass1 != pass2)
                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                else
                    document.getElementById("password2").setCustomValidity('');
                //empty string means no validation error
            }
        </script>
        <!-- script for password match -->
        <!-- //js -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();

                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->
        <!-- smooth-scrolling-of-move-up -->
        <script>
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <script src="js/SmoothScroll.min.js"></script>
        <!-- //smooth-scrolling-of-move-up -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>