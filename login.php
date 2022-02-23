<?php
session_start();
if(isset($_SESSION['auth'])){
    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Hand-out</title>
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
                    <!-- <li class="nav-item"><a class="nav-link" href="#about">About</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="about" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 text-center mx-auto">
                    <h2 class="text-white section-heading">Welcome back!</h2>
                    <hr class="light my-4">
                    <form action="./backend/login-backend.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group center">
                                    <label for=""><i class="fa fa-user"></i> Username</label>
                                    <input name="username" placeholder="Enter here " type="text">
                                    <label for=""><i class="fa fa-lock"></i> Password</label>
                                    <input name="password" placeholder="Enter here"type="password">
                                    <input style="width:50%;margin:2%;" class="btn btn-light" type="submit" value="Login">
                                    </div>
                            </div> 
                            <div class="col-6"><img src="./assets/img/img.png" alt=""></div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <?php include "footer.php" ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>