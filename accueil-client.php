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
        <link rel="apple-touch-icon" href="images/ico.ico">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/styles.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/customs.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
            include 'php/dbconnexion.php';
            $cid=$_GET['cid'];
            $q=0;
            while($chariot=$repch->fetch()){
                if($chariot['cid']==$cid){
                    $q++;
                }
            }
            $clt=$cnx->query('SELECT * FROM client WHERE `cid`='.$cid.'');
            $client=$clt->fetch();
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
                        <a class="navbar-brand" href="accueil-client.php?cid=<?php echo $cid ?>"><img src="images/logo.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item active"><a class="nav-link" href="accueil-client.php?cid=<?php echo $cid ?>">Accueil</a></li>
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
        
        <!-- Start Products  -->
        <div class="products-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-all text-center">
                            <h1>NOS PLAT</h1>
                        </div>
                    </div>
                </div>
                <div class="row special-list">
                    <?php
                        $pr= $cnx->query ('SELECT  * FROM produit');
                        while($produit=$pr->fetch()){
                            $pid=$produit['pid'];
                            echo '
                                <div class="col-lg-3 col-md-6 special-grid">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <img src="data:image/jpeg;base64,'.base64_encode($produit['file']).'" class="img img-fluid" alt="Image"/>
                                            <div class="mask-icon">
                                                <form action="" method="POST">
                                                    <button class="frm form1 action1" name="ajout-ch" value='.$pid.'>
                                                        Ajouter au chariot
                                                    </button>
                                                    <input type="number" class="form1 action2" value="1" name="qtt" id="qtt" min="1" max="20">
                                                </form>
                                                <form action="pass-commande.php?cid='.$cid.'&pid='.$pid.'" method="POST">
                                                    <button class="frm form2" data-toggle="tooltip" data-placement="right">
                                                        Commander
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="why-text">
                                            <h4>'.$produit['nom'].'</h4>
                                            <h5>'.$produit['prix'].'DT</h5>
                                        </div>
                                    </div>
                                </div>            
                            ';
                        }
                        if(isset($_POST['ajout-ch'])){
                            $id=$_POST['ajout-ch'];
                            $qtt=$_POST['qtt'];
                            $v=0;
                            $ch= $cnx->query ('SELECT  * FROM chariot');
                            while($chariot=$ch->fetch())
                                if(($chariot['cid']==$cid)&&($chariot['pid']==$id)){
                                    $v=1;
                                    break;
                                }
                            if($v==1){
                                $qttt=$chariot['qtt'];
                                $qttt+=$qtt;
                                $cnx->query('UPDATE `chariot` SET `qtt`='.$qttt.' WHERE `pid`='.$id.' AND `cid`='.$cid.'');
                            }else{
                                $cnx->exec("INSERT INTO chariot (cid,pid,qtt) VALUES ('$cid','$id','$qtt')");
                            }
                                
                            // ('Location: accueil-client.php?cid='.$cid.'');
                        } 
                    ?>
                </div>
            </div>
        </div><!-- End Products  -->

        <!-- Start Instagram Feed  -->
        <div class="instagram-box">
            <div class="main-instagram owl-carousel owl-theme">
                <?php
                    $pr= $cnx->query ('SELECT  * FROM produit');
                    while($produit=$pr->fetch()){
                        echo '
                            <div class="item">
                                <div class="ins-inner-box">
                                    <img src="data:image/jpeg;base64,'.base64_encode($produit['file']).'" alt="" />
                                    <div class="hov-in"></div>
                                </div>   
                            </div>     
                        ';
                    }
                ?>
            </div>
        </div><!-- End Instagram Feed  -->

        <!-- Start Footer  -->
        <footer>
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Heures deTravail</h3>
                                <ul class="list-time">
                                    <li>Lundi - Vendredi: 08.00am à 05.00pm</li>
                                    <li>Samedi: 10.00am à 08.00pm</li>
                                    <li>Dimanche: <span>Fermé</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget">
                                <h4>A propos GreatChef</h4>
                                <p>A propos Nous</p> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-link-contact">
                                <h4>Contactez-nous</h4>
                                <ul>
                                    <li>
                                        <p><i class="fas fa-map-marker-alt"></i>Addresse: ISET Bizerte </p>
                                    </li>
                                    <li>
                                        <p><i class="fas fa-envelope"></i>Email: <a href="mailto:mkademoussama9@gmail.com">mkademoussama9@gmail.com</a></p>
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