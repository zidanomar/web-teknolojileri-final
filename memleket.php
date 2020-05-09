<?php

session_start();

if ( !isset($_SESSION["login"]) ) {
  header("location: login.php");
  exit;
}



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Indonesia</title>


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
        <link rel="stylesheet" href="./css/memleket-style.css">
        <link rel="stylesheet" href="./css/style.css">

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
                            <a class="nav-item nav-link active" href="memleket.php">my homeland</a>
                            <a class="nav-item nav-link" href="iletisim.php">contact</a>
                            <a class="btn btn-primary logout" href="logout.php">logout</a>
                        </div>
                        </div>
                    </div>
                    </nav>
            </div>
        </header>   
        
        <!--  ======================= Seader SON ============================== -->
        
        <!--  ======================= Ana sayfa Baslangic ================================ -->

        <main class="site-main">
            
            <!--  ======================= Jumbotron Baslangic =======================  -->

            <section class="site-banner">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                    <h1 class="title-text text-uppercase">I N D O N E S I A</h1>
                    <a href="https://www.indonesia.travel/gb/en/home" class="btn btn-primary">Visit Indonesia</a>
                    </div>
                </div>
            </section>
            
            <!--  ======================= Jumbotron SON =======================  -->

            <div class="container .project-area">

            <!--  ======================= Info Panel Baslangic =======================  -->
                <section class="infopanel-area">
                    <div class="row justify-content-center">
                        <div class="col-10 info-panel">
                            <div class="row">
                            <div class="col-lg">
                                <img src="img/memleket/nasipadang.png " alt="foods" class="float-left">
                                <h4>Legit Foods</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="col-lg">
                                <img src="img/memleket/komodo.png " alt="endemic" class="float-left">
                                <h4>Endemic Animals</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="col-lg">
                                <img src="img/memleket/toraja.png " alt="security" class="float-left">
                                <h4>Cultures</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </section> 

            <!--  ======================= Info Panel Baslangic =======================  -->

            <!--  ======================= About Indonesia baslangic =======================  -->
            <section class="project-area">
                <div class="container">
                    <div class="row grid justify-content-around about-indonesia">
                        <div class="col-lg-6 element-item info-indonesia">
                            <a class="test-popup-link" href="./img/memleket/rajaampat.png">
                                <img src="./img/memleket/rajaampat.png" alt="rajaampat" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-4 text-lg-center info-indonesia">
                            <h3>Raja Ampat</h3>
                            <p>Far from the view-blocking skyscrapers, dense and hectic concrete jungles, congested traffics, flickering electric billboards, endless annoying noises, and all the nuisances of modern cities, you will find a pristine paradise where Mother Nature and warm friendly people welcome you with all the exceptional wonders in Raja Ampat, the islands-regency in West Papua Province. With all the spectacular wonders above and beyond its waters, as well as on land and amidst the thick jungles, this is truly the place where words such as beautiful, enchanting, magnificent, and fascinating get its true physical meaning.</p>
                            <a href="https://www.indonesia.travel/gb/en/destinations/maluku-papua/raja-ampat" class="btn btn-primary text-uppercase">Visit Me!</a>
                        </div>
                        <div class="col-lg-4 info-indonesia">
                            <h3>Borobudur Temple</h3>
                            <p>Yogyakarta, together with its twin city Surakarta (Solo), is the cradle of civilization on Java. This city was the seat of power that produced the magnificent temples of Borobudur and Prambanan in the 8th and 9th century and the new powerful Mataram kingdom of the 16th and 17th century.
                                Yogyakarta was known with the slogan of “Jogja The Never ending Asia“ for its endless appeals. Today, it is also renowned as “ Jogja Istimewa “, a tagline that elaborates its special values.</p>
                            <a href="https://www.indonesia.travel/gb/en/destinations/java/yogyakarta" class="btn btn-primary text-uppercase">Vist Me!</a>
                        </div>
                        <div class="col-lg-6 info-indonesia">
                            <a class="test-popup-link" href="./img/memleket/borobudur.png">
                                <img src="./img/memleket/borobudur.png" alt="borobudur" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-6 info-indonesia">
                            <a class="test-popup-link" href="./img/memleket/indofood.png">
                                <img src="./img/memleket/indofood.png" alt="indofood" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-4 info-indonesia">
                            <h3>The Seasoning Come From Heaven</span></h3>
                            <p>From chicken satay to tahu telor, rendang to nasi goreng, Indonesian cuisine has so much to offer. We show you where to go around town!</p>
                            <a href="https://migrationology.com/indonesian-food/" class="btn btn-primary text-uppercase link-button">Eat Me!</a>
                        </div>
                    </div>
                </div>
            </section> 
                
                

            <!--  ======================= About Indonesia baslangic =======================  -->

        </main>

        <!--  ======================= Ana sayfa SON ================================ -->

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

    </body>
</html>