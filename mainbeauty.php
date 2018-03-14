<?php

$conn=mysqli_connect("localhost","root","","toppers");

$sql="SELECT * from course_details";
$result=mysqli_query($conn,$sql);

If(mysqli_num_rows($result)>0) {

while($row=mysqli_fetch_assoc($result)) {
}

/**
 * Created by PhpStorm.
 * User: JAY RAJPUTANA
 * Date: 14/2/18
 * Time: 10:01 AM
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Toppers..!</title>
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

    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <!-- Theme style  -->
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->



</head>

<body>

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
                            <a href="education.php">Education</a>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login / signup</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>    <header id="gtco-header" class="gtco-cover gtco-cover-xssmall" role="banner" style="background-image:url(images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="display-t">

                </div>
            </div>

        </div>
    </header>


    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
            <h2>Beauty Courses</h2>
        </div>
    </div>

    <div class="mainwrap rand-935" style="background:#F5F5F5 url() 50% 0;background-size:cover;border-top:0px solid #E4E4E4;border-bottom:0px solid #fff; text-align:center;min-height:200px;padding-top:30px; padding-bottom:0%">
        <div class="main clearfix" align="center">


    <?php
    $sql="SELECT * from course_details where type_id=2 ";
    $result=mysqli_query($conn,$sql);

    If(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result)) {
            $name = $row["course_name"];
            $img=$row["course_img"];
            $courseid=$row["course_id"];
            echo "

        <div class=\"view-all-cointainer\">
        <div class=\"div-course-item-h\" style=\"\">

            <div class=\"div-course-img-h\">
                <img src=$img alt=\"Courses\" width=\"100%\" height=\"100%\" style=\"border-top-left-radius:0.3em;border-top-right-radius:0.3em;\" />
            </div>

            <div class=\"div-course-detail-h\">
                <div class=\"div-course-name-h\">$name</div>
                <div class=\"div-course-desc-h\"></div>
            </div>

            <div class=\"read-more-cat\">
                 <a href=\"foundation_male.php?course_id=".$courseid."\">
                    <div class=\"readMoreItem\">
                        Read More
                    </div>
                </a>
            </div>
            </div>
           </div>

        ";
        }
        ?>
    </div>
        <?PHP
        }}
        ?>



</body>
</html>