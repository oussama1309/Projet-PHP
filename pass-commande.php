<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Site Metas -->
        <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/styles.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
            include 'php/dbconnexion.php';
            $cid=$_GET['cid'];
            $pid=$_GET['pid'];
            $q=0;
            while($chariot=$repch->fetch()){
                if($chariot['cid']==$cid){
                    $q++;
                }
            }
        ?>

        <!-- Start Main Top 1 -->
        <div class="main-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="our-link">
                            <ul>
                                <li><a href="profil.php?cid=<?php echo $cid; ?>"><i class="fa fa-user s_color"></i>Mon profil</a></li>
                                <li><a href="information.php"><i class="fas fa-location-arrow"></i>Notre emplacement</a></li>
                                <li><a href="contact.php?cid=<?php echo $cid; ?>"><i class="fas fa-headset"></i>Contactez-nous</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="login-box">
                            <a href="#" class="dcnx"><i class="fa fa-log-out"></i>Deconnexion</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Main Top 1 -->
        
        <!-- Start Main Top 2 -->
        <header class="main-header">
            <!-- Start Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item active"><a class="nav-link" href="acceuil-client.php">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="commandes.php?cid=<?php echo $cid; ?>">Mes commandes</a></li>
                            <li class="nav-item"><a class="nav-link" href="information.php">à propos nous</a></li>
                            <!--<li class="dropdown">
                                <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Magasin</a>
                                <ul class="dropdown-menu">
                                    <li><a href="chariot.php">Chariot</a></li>
                                    <li><a href="commandes.html"></a></li>
                                    <li><a href="profil.php">My Account</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="side-menu">
                                <a href="#">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span class="badge"><?php echo $q; ?></span>
                                    <p>Mon chariot</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>
                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                    <li class="cart-box">
                        <ul class="cart-list">
                            <?php
                                $ch= $cnx->query ('SELECT  * FROM chariot');
                                while($chariot=$ch->fetch()){
                                    if($chariot['cid']==$cid){
                                        $pr=$cnx->query('SELECT * FROM produit');
                                        while($produit=$pr->fetch()){
                                            if($produit['pid']==$chariot['pid']){
                                                echo '
                                                    <li>
                                                        <a href="#" class="photo"><img src="data:image/jpeg;base64,'.base64_encode($produit['file']).'" class="cart-thumb" alt="" /></a>
                                                        <h6><a href="#">'.$produit['nom'].'</a></h6>
                                                        <p>'.$chariot['qtt'].'x - <span class="price">'.$produit['prix'].'</span> DT</p>
                                                    </li>
                                                ';
                                            }
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </li>
                    <div class="action3"><a href="chariot.php?cid=<?php echo $cid; ?>">Voir tous</a></div>
                </div>
                <!-- End Side Menu -->
            </nav>
            <!-- End Navigation -->
        </header><!-- End Main Top 2 -->
        
        <div class="container">
            
        </div>

        <!-- Start Footer  -->
        <footer>
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Business Time</h3>
                                <ul class="list-time">
                                    <li>Monday - Friday: 08.00am to 05.00pm</li>
                                    <li>Saturday: 10.00am to 08.00pm</li>
                                    <li>Sunday: <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget">
                                <h4>About Freshshop</h4>
                                <p>A propos Nous</p> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-link-contact">
                                <h4>Contact Us</h4>
                                <ul>
                                    <li>
                                        <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                    </li>
                                    <li>
                                        <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer  -->

        <!-- Start copyright  -->
        <div class="footer-copyright">
            <p class="footer-company">All Rights Reserved. &copy; 2019 <a href="#">2BGEM</a> Design By :
                <a href="#">2BGEM</a></p>
        </div><!-- End copyright  -->

        <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

        <!-- ALL JS FILES -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/jquery.superslides.min.js"></script>
        <script src="js/bootstrap-select.js"></script>
        <script src="js/inewsticker.js"></script>
        <script src="js/bootsnav.js."></script>
        <script src="js/images-loded.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/baguetteBox.min.js"></script>
        <script src="js/form-validator.min.js"></script>
        <script src="js/contact-form-script.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>