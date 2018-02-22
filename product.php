<?php
include("header1.php");

if(isset($_POST))
{

    $sql = "SELECT * FROM product_master where status=1 ORDER BY product_id ASC";

    $result=mysql_query($sql);
    if($result) {
       $row=mysql_fetch_array($result);
            $img=$row["product_img_url"];
    }


}
?>

<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Toppers..!</title>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">




    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="gtco-loader"></div>
<div id="page">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 text-right gtco-contact">
                    <ul class="">
                        <li><a href="#"><i class="ti-mobile"></i> +91 8264686566 </a></li>
                        <li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
                        <li><a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=AddSession"><i class="icon-mail2"></i></a></li>
                        <li><a href="https://www.facebook.com/"><i class="ti-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="index.php">Toppers Family's World <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="has-dropdown">
                            <a href="services.php">Services</a>
                            <ul class="dropdown">
                                <li><a href="book.php">Hair</a></li>
                                <li><a href="book.php">Nail</a></li>
                                <li><a href="book.php">Spa</a></li>
                                <li><a href="book.php">Color</a></li>
                            </ul>
                        </li>
                        <li><a href="education.php">Academic</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <header id="gtco-header" class="gtco-cover gtco-cover-xssmall" role="banner" style="background-image:url(images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
        </div>
    </header>


    <div id="gtco-history" class="gtco-section border-bottom animate-box">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Products</h2>
                </div>
            </div>
            <div class="div-trending-block">
                <div class="txt-trending txt-subcat" style="text-transform:uppercase;">Our Categories</div>
            </div>


            </div>
                    <div class="col-md-3" >
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img  src="<?php echo$img;?>" />
                        </div>
                            <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Conditioners</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/sampoo3.png" width="100%"/>
                        </div>
                        <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Hair And Scalp Treatments</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/sampoo4.png" width="100%"/>
                        </div>
                        <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Hair Oil</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/sampoo5.png" width="100%"/>
                        </div>
                        <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Serum</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/condisner.png" width="100%"/>
                        </div>
                        <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Sprays And Gels</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/condisner1.png" width="100%"/>
                        </div>
                        <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Others</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/condisner3.png" width="100%"/>
                        </div>
                        <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Cleanser</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/1.jpg" width="100%"/>
                        </div>
                        <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Cream</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/2.jpg" width="100%"/>
                        </div>
                        <div class="product-overlay">
                            <!--<div class="div-prod-title-subcat">Eye Care</div>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/3.png" width="100%"/>
                        </div>
                        <div class="product-overlay">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="beardo.php">
                    <div class="div-product-item-subcat">
                        <div class="div-product-img-subcat" align="center">
                            <img src="images/product/5.png" width="100%"/>
                        </div>
                        <div class="product-overlay">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-p	b-md">
                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>About Us</h3>
                        <p> We believe that you deserve to be beautiful without waiting
                            in line at the parlour! We are kutch's first enterprise to
                            bring the complete salon and wellness experience to your
                            doorstep whenever you need it.
                            Toppers goes all out to make you look like a million bucks
                            wherever you are and whenever you want. Our staff of expert
                            beauticians are trained to care and comfort you during your
                            makeovers. Our passionate team turns this luxury into a
                            convenience for women who want to be pampered.
                            Just tell us when and where, and we'll be there! </p>
                    </div>
                </div>

                <div class="col-md-4 col-md-push-1">
                    <div class="gtco-widget">
                        <h3>Links</h3>
                        <ul class="gtco-footer-links">
                            <li><a href="services.php">Services</a></li>

                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="#">Terms of services</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="admin.php">Administrator</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +91 8264686566</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> hsoni.123442@gmail.com</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2017 Toppers . All Rights Reserved.</small>
                        <small class="block">Designed by HARSHIL VAIBHAV SUNIL</small>
                    </p>
                    <p class="pull-right">
                    <ul class="gtco-social-icons pull-right">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="js/main.js"></script>


</body>
</html>