<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Donation Website</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php" style="font-family: 'Quintessential', cursive;">Hand-out</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <?php 
                    if(isset($_SESSION['auth'])){
                        echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
                    }
                    ?>
                    <!-- <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white d-flex masthead" style="background-image: url('assets/img/clipboard-image-1.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong style="color: var(--bs-gray-900);text-align: center;">Want to donate your stuffs to needy Ones?!</strong></h1>
                    <hr>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5" style="color: #000000;">We are here to help you and others by helping you to donate those stuffs which you don't need anymore and giving these to those who actually needs!</p><a class="btn btn-primary btn-xl" role="button" href="#services">Find Out More</a>
            </div>
        </div>
    </header>
    <section id="about" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 text-center mx-auto">
                    <h2 class="text-white section-heading">What we do?</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">We are non profitable company, we want to help others. You can register yourself and start filling the form for donation, after getting your request, we will transfer that request the nearest Donation Center, and when they accept an agent will reach your home to transport those stuffs to that center.<br><br>In addition to that, we also provide gifts to our top user every week, so what are you waiting for? Go ahead and start donating!</p><a class="btn btn-light btn-xl" role="button" href="register.php">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-user fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Register</h3>
                        <p class="text-muted mb-0">Register yourself into this website</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-wpforms fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Fill the form</h3>
                        <p class="text-muted mb-0">Fill the donation form and submit.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-opencart fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                        <h3 class="mb-3">Transport the stuffs</h3>
                        <p class="text-muted mb-0">Wait for agent to arrive and transport your stuffs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-smile-o fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                        <h3 class="mb-3">Yay! You made someone happy!</h3>
                        <p class="text-muted mb-0">Excellent! Those stuffs have made others happy and you just earned great rewards!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if(!isset($_SESSION['auth'])){
        echo '<section class="text-white bg-dark">
        <div class="container text-center">
            <h2 class="mb-4">Register Now!</h2><a class="btn btn-light btn-xl sr-button" role="button" data-aos="zoom-in" data-aos-duration="400" data-aos-once="true" href="register.php">Register</a>
        </div>
    </section>';
    } else {
        echo '<section class="text-white bg-dark">
        <div class="container text-center">
            <h2 class="mb-4">Donate Now!</h2><a class="btn btn-light btn-xl sr-button" role="button" data-aos="zoom-in" data-aos-duration="400" data-aos-once="true" href="donate.php">Donate</a>
        </div>
        </section>';
    }
    ?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <h2 class="section-heading">Still left with some queries? Contact us!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Still wondering to start donating or any doubt related this? Call us or email us, we are always here to help you!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center ms-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p>+91 700-996-6917</p>
                </div>
                <div class="col-lg-4 text-center me-auto"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                    <p><a href="mailto:your-email@your-domain.com">donation@website.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#"><span>Hand-out</span></a></h3>
                <p class="company-name">Donation Website © 2022</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Chandigarh Group of Colleges</span> Landran, Punjab, India</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-start"> +91 7009966917</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">donation@website.com</a></p>
                </div>
            </div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p>We are non profitable company, we want to help others. You can register yourself and start filling the form for donation, after getting your request, we will transfer that request the nearest Donation Center, and when they accept an agent will reach your home to transport those stuffs to that center.<br><br></p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>