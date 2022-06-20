<?php
session_start();
include 'sessions.php';
$ses = new MySessions();

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
                    <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Contact Us</li>
                </ol>
            </nav>
            <!-- //breadcrumbs -->
            <section class="contact-w3pvt py-lg-5">
                <div class="container py-md-5">
                    <div class="address-w3layouts">
                        <div class="title-sec-w3layouts_pvt ">
                            <h4 class="text-center">Our contact info</h4>
                        </div>
                        <div class="row py-md-5 pt-4">
                            <div class="col-lg-4">
                                <div class="row fv3-contact">
                                    <div class="col-4  text-center">
                                        <span class="fa fa-envelope-open ml-2"></span>
                                    </div>
                                    <div class="col-8">
                                        <a href="#" class="d-block text-secondary">info@nigeria.com</a>
                                        <a href="#" class="d-block text-secondary">info@certificate.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 my-lg-0 my-4">
                                <div class="row  fv3-contact">
                                    <div class="col-4 my-2 text-center">
                                        <span class="fa fa-phone ml-2"></span>
                                    </div>
                                    <div class="col-8">
                                        <p>+234 123456789</p>
                                        <p>+234 123456789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row fv3-contact">
                                    <div class="col-4  text-center">
                                        <span class="fa fa-home ml-2"></span>
                                    </div>
                                    <div class="col-8">
                                        <p>#55 garki,
                                            <br>Abuja 34789.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <!-- register form grid -->
                            <div class="register-top1 py-lg-3">
                                <div class="title-sec-w3layouts_pvt text-center">
                                    <h4 class="w3layouts_pvt-head">How Can We Help You?</h4>
                                </div>
                                <form method="post" class="register-wthree pt-md-5 pb-md-0 py-4">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>
                                                    First name
                                                </label>
                                                <input class="form-control" type="text" placeholder="Johnson" name="email"
                                                       required="">
                                            </div>
                                            <div class="col-md-6 mt-md-0 mt-4">
                                                <label>
                                                    Last name
                                                </label>
                                                <input class="form-control" type="text" placeholder="Kc" name="name" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>
                                                    Mobile
                                                </label>
                                                <input class="form-control" type="text" placeholder="xxxx xxxxx" name="email"
                                                       required="">
                                            </div>
                                            <div class="col-md-6 mt-md-0 mt-4">
                                                <label>
                                                    Email
                                                </label>
                                                <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                                       required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>
                                                    Your message
                                                </label>
                                                <textarea placeholder="Type your message here" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-agile btn-block w-100 font-weight-bold text-uppercase bg-theme">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--  //register form grid ends here -->
                            <div class="border-pos-wthree border-exp"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //contact -->           
            <hr style="border: 2px solid #0D2865;"/>
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