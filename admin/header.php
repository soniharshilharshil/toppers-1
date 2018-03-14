<?php
/**
 * Created by PhpStorm.
 * User: JAY RAJPUTANA
 * Date: 16/2/18
 * Time: 9:05 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Toppers..!</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Toppers</span>Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <!--
                        <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                        -->
                        <li><a href="chpassword.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Change Password</a></li>
                        <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">


    <form role="search">
        <div class="form-group">

            <a href="../index.php" class="btn btn-info">
                <i class="fa fa-eye fa-lg"></i> View Site
            </a>
        </div>
    </form>


    <?php
    $url = $_SERVER['PHP_SELF'];
    $url = Explode('/', $url);
    $url = $url[count($url) - 1];
    //echo $url;
    ?>

    <ul class="nav menu">
        <li class="<?php

        if($url=='index.php')
        {
            echo"active";
        }else{echo"";}?>"><a href="index.php">
                <svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Dashboard</a></li>
        <li class="">
            <a href="customer.php"><i class="fa fa-user fa-lg"></i>Customer</a></li>
        <li class="	"><a href="productshow.php"> <i class="fa fa-users fa-lg"></i>	Product</a></li>
        <li class=""><a href="appointment.php"><i class="fa fa-money fa-lg"></i>	Appointment</a></li>
        <li class=""><a href="serviceshow.php"><i class="fa fa-plus-square fa-lg"></i>	Services</a></li>

        <li class=""><a href="enroll.php"><i class="fa fa-user-plus fa-lg"></i>	Enrollment</a></li>
        <li class=""><a href="offer.php"><i class="fa fa-money fa-lg"></i> Offers</a></li>

        <li class=""><a href="courseshow.php"><i class="fa fa-user-plus fa-lg"></i>Course</a></li>
        <li class=""><a href="bank.php"><i class="fa fa-bank fa-lg"></i>	Bank</a></li>

        <li class=""><a href="report.php"><i class="fa  fa-calculator fa-lg"></i>Report</a></li>

    </ul>

</div><!--/.sidebar-->

