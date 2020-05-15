<?php

session_start();

if ( isset($_SESSION["login"]) == true ) {
  $isLogin = true;
  $userGreeting = $_SESSION["userGreeting"];
}



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact</title>


        <!--  Bootstrap css dosyasi  -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">

        <!--  font awesome icon dosyasi  -->
        <link rel="stylesheet" href="./css/all.min.css">

        <!--  Magnific Popup css dosyasi  -->
        <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


        <!--  Owl-carousel css dosyasi  -->
        <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
        <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


        <!--  custom css dosyasi  -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/contact.css">
        

        <!--  Responsive css dosyasi  -->
        <link rel="stylesheet" href="./css/responsive.css">

    </head>

    <body>
        <!--  ======================= Header Baslangic ============================== -->
        
        <header class="header_area">
            <div class="main-menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="./img/logo-rev.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="memleket.php">my homeland</a>
                            <a class="nav-item nav-link active" href="iletisim.php">contact</a>
                            <?php if ( isset($isLogin) ) : ?>
                                <a class="btn btn-primary logout" href="logout.php">logout</a>
                            <?php else : ?>
                                <a class="btn btn-primary logout" href="login.php">login</a>
                            <?php endif; ?>
                        </div>
                        </div>
                    </div>
                    </nav>
            </div>
        </header>   
        
        <!--  ======================= Header SON ============================== -->

        <!--  ======================= Iletisim Baslangic ============================== -->
       
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-xs-8 container-contact">
                <div class="d-flex justify-content-center align-items-center">                
                    <form id="contact-form" onsubmit="return validate();">
                        <div class="form-group">
                            <h2>Contact us</h2>
                            <div id="error_message"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" id="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" id="subject">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" id="phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" id="email">
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" class="form-control" id="message"></textarea>
                        </div>
                        <div class="btn col-md-12 text-right">
                            <button type="submit" class="btn btn-primary text-uppercase"> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
       </div>
        <!--  ======================= Iletisim SON ============================== -->
        


        <footer class="footer-area">
            <div class="container">
                <div class="">
                    <div class="site-logo text-center py-4">
                        <a href="#"><img src="./img/logo-rev.png" alt="logo"></a>
                    </div>
                    <div class="social text-center">
                        <h5 class="text-uppercase">Follow me</h5>
                        <a href="#"><i class="fab fa-reddit"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="copyrights text-center">
                        <p class="para">
                            Copyright ©2020 All rights reserved
                            <a href="#"><span style="color: var(--primary-color);">Fake Koji</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

            <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>
    <script src="./js/contact.js"></script>

    </body>
</html>