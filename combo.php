<?php
session_start();
$conn=mysqli_connect("localhost","root","","toppers");

$sql="SELECT * from service_master";
$result=mysqli_query($conn,$sql);

If(mysqli_num_rows($result)>0) {

while($row=mysqli_fetch_assoc($result)) {
}

?>


<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Toppers the family salon and institute</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="gettemplates.co" />

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

    <!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
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
                        <li><a href="#"><i class="icon-phone"></i> +91 8264686566</a></li>
                        <li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
                        <li><a href="#"><i class="icon-mail2"></i></a></li>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col0-xs-12">
                    <div id="gtco-logo"><a href="index.php">Toppers Salon</a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="has-dropdown active">
                            <a href="services.php">Services</a>
                            <ul class="dropdown">
                                <li><a href="hair.php">Hair</a></li>
                                <li><a href="nail.php">Nail</a></li>
                                <li><a href="skin.php">Skin</a></li>
                                <li><a href="services.php">Facial</a></li>
                            </ul>
                        </li>
                        <li><a href="education.php">Academic</a></li>

                        <li><a href="contact.php">Contact</a></li>
                        <li><?php
                            if(isset($_SESSION["login"]))
                            {
                            $email = $_SESSION["login"];
                            include_once ("database/db_connection.php");
                            $sql = "SELECT * FROM customer_master WHERE cust_email='" . $email . "'";
                            $result = mysqli_query($con,$sql);
                            $row=mysqli_fetch_assoc($result);
                            $name=$row["cust_username"];
                            ?>

                        <li class="has-dropdown">
                            <a href="services.php">  <?php echo $name;?>
                                <span class="caret"></span></a>

                            <ul class="dropdown">
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="chpassword.php">Change Password</a></li>
                                <li><a href="vieworder.php">View Order</a></li>
                                <li><a href="logout.php">Log Out</a></li>

                            </ul></li>

                        <?php
                        }
                        else
                        {


                            ?>
                            <a href="#modal1"  data-toggle="modal"> Login / signup</a></li>

                            <?php

                        }

                        ?>


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



    <div class="services">
        <div class="row MP-zero">
            <div class="col-md-12 MP-zero">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>Our Services</h2>
                    </div>
                </div>

                <a name="facial"></a>
                <div class="box-services">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="box-services1" onClick="location.href = 'services.php'">
                                <img src="images/services/facial-s.jpg" alt="belita hover" class="img-responsive"/>
                                <p class="p1"><a href="services.php">Facial</a></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-services1" onClick="location.href = 'skin.php'">
                                <img src="images/services/skin.jpg" alt="body spa" class="img-responsive imgHoverable"/>
                                <p><a href="skin.php">Skin Care</a></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-services1" onClick="location.href = 'hair.php'">
                                <img src="images/services/hair-s.jpg" alt="Hair care" class="img-responsive imgHoverable"/>
                                <p><a href="hair.php">Hair Care</a></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-services1" onClick="location.href =     'waxing.php'">
                                <img src="images/services/body-s.jpg" alt="body care" class="img-responsive imgHoverable"/>
                                <p><a href="waxing.php">Waxing</a></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-services1" onClick="location.href = 'nail.php'">
                                <img src="images/services/nails-s.jpg" alt="nails" class="img-responsive imgHoverable"/>
                                <p><a href="nail.php">Nail Art</a></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-services1" onClick="location.href = 'combo.php'">
                                <img src="images/services/combos-s-hover.jpg" alt="salon services" class="img-responsive imgHoverable"/>
                                <p><a href="combo.php">Combos</a></p>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="container" style="max-width:100%; width:95%">
                    <div class="row">

                        <div class="col-md-6">
                            <br/>
                            <div class="mumbai-powai-prices">
                                <div class="table-responsive service-table">
                                    <table class="table" style="border:1px #ddd solid">
                                        <tbody>
                                        <tr>
                                            <td>Service Name</td>
                                            <td>Service Time</td>
                                            <td>Service Rate</td>

                                        </tr>
                                        <?php

                                        $sql="SELECT * from service_master where type_id=6";
                                        $result=mysqli_query($conn,$sql);


                                        If(mysqli_num_rows($result)>0) {

                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            $serviceid=$row['service_id'];

                                            echo "<tr class='chaman'><td>".$row["service_name"]."</td><td>".$row["service_time"]."&nbsp min</td><td>".$row["service_prise"]."</td> <td class=\"cart-button-container\"><a href=\"picktime.php?service_id=".$serviceid."\"><img src=\"images/services/book.png\" /></td></tr></tr>";
                                            echo "</div>";
                                        }
                                       ?>


                                        <!--<tr>
                                            <td class="td1">
                                                Pure Pamper
                                            </td>
                                            <td class="td2">45 min</td>
                                            <td class="td3">&#x20B9; 1093</td>
                                            <td class="cart-button-container"><img src="http://www.belitaindia.com/img/add-to-cart-button.png" alt="add to cart" class="add-to-cart-button" /></td>
                                        </tr>
                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">45 min</td>
                                            <td class="td3 chaman">&#x20B9; 909</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>

                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">45 min</td>
                                            <td class="td3 chaman">&#x20B9; 909</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>
                                        <tr>


                    If(mysqli_num_rows($result)>0)
                    {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $img=$row["product_img_url"];
                                echo "<img src=$img />";
                            }?>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">45 min</td>
                                            <td class="td3 chaman">&#x20B9; 909</td>
                                            <td class="cart-button-container"><img src="images/services/book.png"/></td>
                                        </tr>
                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
    00                                         <td class="td2 chaman">45 min</td>
                                            <td class="td3 chaman">&#x20B9; 1449</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>
                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">45 min</td>
                                            <td class="td3 chaman">&#x20B9; 1576</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>
                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">60 min</td>
                                            <td class="td3 chaman">&#x20B9; 1817</td>
                                            <td class="cart-button-container"><img src="images/services/book.png"/></td>
                                        </tr>
                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">45 min</td>
                                            <td class="td3 chaman">&#x20B9; 1817</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>

                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">80 min</td>
                                            <td class="td3 chaman">&#x20B9; 2116</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>

                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">60 min</td>
                                            <td class="td3 chaman">&#x20B9; 2657</td>
                                            <td class="cart-button-container"><img src="images/services/book.png"/></td>
                                        </tr>

                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">60 min</td>
                                            <td class="td3 chaman">&#x20B9; 2714</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>

                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">60 min</td>
                                            <td class="td3 chaman">&#x20B9; 3025</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>

                                        <tr>
                                            <td class="td1 chaman">
                                            </td>
                                            <td class="td2 chaman">30 min</td>
                                            <td class="td3 chaman">&#x20B9; 1150</td>
                                            <td class="cart-button-container"><img src="images/services/book.png" /></td>
                                        </tr>
                                        <tr>
                                            <td class="td1 chaman">
                                                Sparkle Mask
                                            </td>
                                            <td class="td2 chaman">30 min</td>
                                            <td class="td3 chaman">&#x20B9; 1380</td>
                                            <td class="cart-button-container"><img src="images/services/book.png"/></td>
                                        </tr>
    -->



                                        </tbody>
                                    </table>
                                </div>

                               </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php

            }

            }
            ?>



            <footer id="gtco-footer" role="contentinfo">
                <div class="gtco-container">
                    <div class="row row-pb-md">

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
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Terms of services</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="admin.php">Administrator</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="gtco-widget">
                                <h3>Get In Touch</h3>
                                <ul class="gtco-quick-contact">
                                    <li><a href="#"><i class="icon-phone"></i> +91 8264686566</a></li>
                                    <li><a href="#"><i class="icon-mail2"></i>HSONI.123442@GMAIL.COM</a></li>
                                    <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="row copyright">
                        <div class="col-md-12">
                            <p class="pull-left">
                                <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                                <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
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



