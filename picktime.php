<html>
<title>The Toppers..!</title>
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
    <!--[if lt IE 9]-->
    <script src="js/respond.min.js"></script>


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
    </nav>
    <header id="gtco-header" class="gtco-cover gtco-cover-xssmall" role="banner" style="background-image:url(images/img_bg_1.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="display-t">

                </div>
            </div>
    </header>

    <div id="gtco-products">
        <div class="gtco-container">
            <div class="row animate-box">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
            <h2>Timing</h2>
        </div>
    </div>
    <div class="row row-pb-md">
        <div class="col-md-12 col-md-offset-2 text-center gtco-heading animate-box">
            <form action="payment.php" method="post">
                <div class="row form-group">
                    <div class="col-md-3">
                        <select class="form-control">
                            <option>Sanjay</option>
                            <option>bhavesh</option>
                            <option>Javed</option></select>
                    </div>
                    <div class="col-md-3">
                            <label class="sr-only" for="name">Date</label>
                            <input type="Date" id="name" class="form-control blockt=bd" placeholder="Date">
                    </div>
                </div>
                <?php
                    $st1=0;$st2=0;$st3=0;$st4=0;
                    $con=new mysqli('localhost','root','','demo');
                    $sql="Select * from timeslot";
                    $result=$con->query($sql);
                    $i=0;
                    while($row=mysqli_fetch_row($result))
                    {
                        $data[$i]=$row[3];
                        $i++;
                    }
                    echo "<div class=row form-group>";
                    echo "<div class=col-md-4>";
                        echo "<table>";
                            echo "<tr><td>10:00-11:00</td><td>";
                            if($data[$i]==1)
                            echo "<td>&nbsp;<input type=submit value=Book Name=Book id=1 class=btn btn - primary disabled/></td></tr>";
                            echo "<tr><td>11:00-12:00</td><td>";
                            echo "<td>&nbsp;<input type=submit value=Book Name=Book id=2 class=btn btn - primary disabled/></td></tr>";
                            echo "<tr><td>12:00-13:00</td><td>";
                            echo "<td>&nbsp;<input type=submit value=Book Name=Book id=3 class=btn btn - primary disabled/></td></tr>";
                            echo "<tr><td>13:00-14:00</td><td>";
                            echo "<td>&nbsp;<input type=submit value=Book Name=Book id=4 class=btn btn - primary disabled/></td></tr>";
                            echo "<tr><td>14:00-15:00</td><td>";
                            echo "<td>&nbsp;<input type=submit value=Book Name=Book id=5 class=btn btn - primary disabled/></td></tr>";
                            echo "<tr><td>15:00-16:00</td><td>";
                            echo "<td>&nbsp;<input type=submit value=Book Name=Book id=6 class=btn btn - primary disabled/></td></tr>";
                        echo "</table>";
                    echo "</div>";
                echo "<div class=col-md-4>";

                echo "<table>";
                        echo "<tr><td>10:00-11:00</td><td>";
                        echo "<td>&nbsp;<input type=submit value=Book Name=Book id=1 class=btn btn - primary disabled/></td></tr>";
                        echo "<tr><td>11:00-12:00</td><td>";
                        echo "<td>&nbsp;<input type=submit value=Book Name=Book id=2 class=btn btn - primary disabled/></td></tr>";
                        echo "<tr><td>12:00-13:00</td><td>";
                        echo "<td>&nbsp;<input type=submit value=Book Name=Book id=3 class=btn btn - primary disabled/></td></tr>";
                        echo "<tr><td>13:00-14:00</td><td>";
                        echo "<td>&nbsp;<input type=submit value=Book Name=Book id=4 class=btn btn - primary disabled/></td></tr>";
                        echo "<tr><td>14:00-15:00</td><td>";
                        echo "<td>&nbsp;<input type=submit value=Book Name=Book id=5 class=btn btn - primary disabled/></td></tr>";
                        echo "<tr><td>15:00-16:00</td><td>";
                        echo "<td>&nbsp;<input type=submit value=Book Name=Book id=6 class=btn btn - primary disabled/></td></tr>";
                echo "</table>";
                echo "</div>";
                      ?>

                <div class="form-group  col-md-8 text-center">
                            <input type="submit" value="Book" Name="Book" class="btn btn-primary btn-lg">
                        </div>
                    </div>
                </div>
        </form>
        </div>
<?php
    include "footer.php";
?>

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

