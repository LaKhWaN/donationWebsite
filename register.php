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
                    <h2 class="text-white section-heading">Register Now! ✔</h2>
                    <hr class="light my-4">
                    <form action="./backend/register-backend.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group center">
                                    <label for=""><i class="fa fa-user"></i> Username</label>
                                    <input id="username" oninput="usernameCheck()" name="username" placeholder="Enter here " type="text">
                                    <div class="username-error error"></div>
                                    <label for=""><i class="fa fa-envelope"></i> Email</label>
                                    <input id="email" name="email" placeholder="Enter here " type="email">
                                    <label for=""><i class="fa fa-lock"></i> Password</label>
                                    <input id="password" oninput="passwordCheck()" name="password" placeholder="Enter here"type="password">
                                    <div class="password-error error"></div>
                                    <label for=""><i class="fa fa-lock"></i> Confirm Password</label>
                                    <input id="confirm_password" oninput="passwordCheck()" name="confirm_password" placeholder="Enter here" type="password">
                                    <div class="confirm-password-error error"></div>
                                    <input id="register-button" style="width:50%;margin:2%;" class="btn btn-light" type="submit" value="Register">
                                    <!-- <a style="margin:2%;" class="btn btn-light" href=""><i class="fa fa-file-check"></i>Register</a> -->
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
<script>
    document.getElementById("register-button").disabled = true;
    function allCheck(){
        if(document.getElementById("username").value != "" && document.getElementById("email").value != "" && document.getElementById("password").value != "" && document.getElementById("confirm_password").value != ""){
            document.getElementById("register-button").disabled = false;
        }
    }
    function usernameCheck(){
        const username = document.getElementById("username").value;
        console.log("Hello");
        if(username == "" || username.length < 6 || username.length > 20){
            document.getElementsByClassName("username-error")[0].innerHTML = "Username must be between 6 and 20 characters";
        } else {
            document.getElementsByClassName("username-error")[0].innerHTML = "";
        }
        allCheck();
    }
    function passwordCheck(){
        const password = document.getElementById("password").value;
        const confirm_password = document.getElementById("confirm_password").value;
        if(password == "" || password.length < 6 || password.length > 20){
            document.getElementsByClassName("password-error")[0].innerHTML = "Password must be between 6 and 20 characters";
        } else {
            document.getElementsByClassName("password-error")[0].innerHTML = "";
        }
        if(password != confirm_password){
            document.getElementsByClassName("confirm-password-error")[0].innerHTML = "Password does not match";
        } else {
            document.getElementsByClassName("confirm-password-error")[0].innerHTML = "";
        }
        allCheck();
    }
</script>
</html>