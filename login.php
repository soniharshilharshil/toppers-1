<?php
session_start();
require_once ('phpmail/phpmailer/autoload.php');
include('database/db_connection.php') ;
$status=1;
$date=date("y-m-d");


if(isset($_POST["register"]) ){

    $username=$_POST["username"];
    $email=$_POST["email"];
    $mob=$_POST["mobile"];
    $pass=$_POST["password"];
    $rpass=$_POST["confirm-password"];
    $gender=$_POST["gender"];
    $status=1;

    $slquery = "SELECT cust_email FROM customer_master WHERE cust_email='".$email."'";
    $result = mysqli_query($con,$slquery);

    if (mysqli_num_rows($result) > 0)
    {
        echo "<div id='check'>";
    } else {
        echo "0 results";
    }




    $sql = "insert into customer_master(cust_username,cust_email,cust_mob,cust_pass,gender,status,reg_date) values('" .$_POST["username"] . "','" .$_POST["email"] . "','" .$_POST["mobile"]. "','".$_POST["password"]."','".$_POST["gender"]."','".$status."','".$date."')";
    $result=$con->query($sql);
    $msg="Dear  ".$username."<br>Your registration succesfully,Thanks to be a part of Toppers Salon";
    if($result)
    {
        echo "successfull";

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 1;
        $mail->Debugoutput = 'html';
        $mail->Host = "smtp.gmail.com"; //GMAIL smtp in my case
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "hsoni.123442@gmail.com";
        $mail->Password = "9879929977";
        $mail->SMTPSecure = "tls";
        $mail->setFrom('[SET FROM HERE]', 'First Last');

        //send mail to the user's email....
        $mail->addAddress($email);
        $mail->Subject = 'Registration';
        $mail->AltBody = ''; //Optional
        $mail->body=$msg;

        //OTHER WAY TO SET BODY
        $body='Encrypted';
        $mail->MsgHTML($msg);

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        if (!$mail->send()){
//            echo $mail->ErrorInfo;

        }
        else{
//            echo 'mail sent';
        }

        /*   //Authorisation details.
           $username = "sunil.sanskar8@gmail.com";
           $hash = "8a55cadf7a12d80f2f8d60bb0721cf2f050fe51d37f53621b9f4eb481930e738";

           // Config variables. Consult http://api.textlocal.in/docs for more info.
           $test = "0";

           // Data for text message. This is the text message data.
           $sender = "TXTLCL"; // This is who the message appears to be from.
           $numbers = "$mob"; // A single number or a comma-seperated list of numbers
           $message = "$msg";
           // 612 chars or less
           // A single number or a comma-seperated list of numbers
           $message = urlencode($message);
           $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
           $ch = curl_init('http://api.textlocal.in/send/?');
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           $result = curl_exec($ch); // This is the result from the API
           curl_close($ch);*/
        echo"<script>window.open('signup_message.php','_self')</script>";
    }
    else
    {
        echo "unsuccesfull";
    }

}
if(isset($_POST["login"]))
{
    $email1=$_POST["loginid"];
    $pswd1=$_POST["loginpassword"];

    $sql = "SELECT * FROM customer_master WHERE cust_email='".$email1."' and cust_pass='".$pswd1."'";
    $result = mysqli_query($con, $sql);


    //$_SESSION['login'] = $email;
    if (mysqli_num_rows($result) > 0)
    {
        if($_POST["remember"])
        {
            setcookie("toppers_email", $email1, time() + (5566 * 30), "/");
            $_SESSION['password']=$pswd1;

        }
        $_SESSION['login']=$email;

        echo "<script>alert('Login Successfull...')</script>";
        echo"<script>window.open('index.php','_self')</script>";


    }
    else
    {
        echo "<script>alert('Invalid Id or Password!')</script>";
    }

}

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

    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#register").click(function () {
                var password = $("#upassword").val();
                var confirmPassword = $("#urpassword").val();
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            });
        });
    </script>

    <script>
        $(document).ready(function(){

            $("#uname").keyup(function(){
                var data=$("#uname").val();

                $.ajax({
                    type:'POST',
                    url:'validation.php',
                    data:'n='+data,
                    success:function(data)
                    {
                        $("#id2").html(data).hide().fadeIn(200);
                        if($flag==0)
                        {

                        }

                    }
                });
            });
        });

        $(document).ready(function(){

            $("#uemail").keyup(function(){
                var data=$("#uemail").val();

                $.ajax({
                    type:'POST',
                    url:'validation.php',
                    data:'e='+data,
                    success:function(data)
                    {
                        $("#id3").html(data).hide().fadeIn(200);


                    }
                });
            });
        });


        $(document).ready(function(){

            $("#umobile").keyup(function(){
                var data=$("#umobile").val();

                $.ajax({
                    type:'POST',
                    url:'validation.php',
                    data:'m='+data,
                    success:function(data)
                    {
                        $("#id4").html(data).hide().fadeIn(200);

                    }
                });
            });
        });

        $(document).ready(function(){

            $("#upassword").keyup(function(){
                var data=$("#upassword").val();

                $.ajax({
                    type:'POST',
                    url:'validation.php',
                    data:'p='+data,
                    success:function(data)
                    {
                        $("#id5").html(data).hide().fadeIn(200);

                    }
                });
            });
        });

        $(document).ready(function(){

            $("#urpassword").keyup(function(){
                var data=$("#urpassword").val();

                $.ajax({
                    type:'POST',
                    url:'validation.php',
                    data:'rp='+data,
                    success:function(data)
                    {
                        $("#id6").html(data).hide().fadeIn(200);

                    }
                });
            });
        });

        $('#urpassword').on('keyup', function () {
            if ($(this).val(  ) == $('#upassword').val()) {
                $('#message').html('matching').css('color', 'green');
            } else $('#message').html('not matching').css('color', 'red');
        });
    </script>

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
                                <li><a href="hair.php">Hair</a></li>
                                <li><a href="services.php">Facial</a></li>
                                <li><a href="skin.php">Skin</a></li>
                                <li><a href="hands.php">Hands & Feet</a></li>
                                <li><a href="nail.php">Nail</a></li>
                            </ul></li>
                           <li><a href="education.php">Education</a></li>

                        <li><a href="contact.php">Contact</a></li>
                      <li>  <!--<a href="#modal1"  data-toggle="modal"> Login / signup</a></li>-->
                          <?php
                          if(isset($_SESSION["login"]))
                          {
                          $email = $_SESSION["login"];
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

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
        <title>Login with registration - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body
            .panel-login {
                margin-top:40px;
                border-color: #ccc;
                -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            }
            .panel-login>.panel-heading {
                color: #00415d;
                background-color: #fff;
                border-color: #fff;
                text-align:center;
            }
            .panel-login>.panel-heading a{
                text-decoration: none;
                color: #666;
                font-weight: bold;
                font-size: 15px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }
            .panel-login>.panel-heading a.active{
                color: #029f5b;
                font-size: 18px;
            }
            .panel-login>.panel-heading hr{
                margin-top: 10px;
                margin-bottom: 0px;
                clear: both;
                border: 0;
                height: 1px;
                background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
                background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            }
            .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
                height: 45px;
                border: 1px solid #ddd;
                font-size: 16px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }
            .panel-login input:hover,
            .panel-login input:focus {
                outline:none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                border-color: #ccc;
            }
            .btn-login {
                background-color: #59B2E0;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #59B2E6;
            }
            .btn-login:hover,
            .btn-login:focus {
                color: #fff;
                background-color: #53A3CD;
                border-color: #53A3CD;
            }
            .forgot-password {
                text-decoration: underline;
                color: #888;
            }
            .forgot-password:hover,
            .forgot-password:focus {
                text-decoration: underline;
                color: #666;
            }

            .btn-register {
                background-color: #1CB94E;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #1CB94A;
            }
            .btn-register:hover,
            .btn-register:focus {
                color: #fff;
                background-color: #1CA347;
                border-color: #1CA347;
            }

        </style>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>



    <!-- <div class="modal-header">-->

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                            <div class="panel panel-login">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="#" class="active" id="login-form-link">Login</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="#" id="register-form-link">Register</a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <!--body-->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                                <div class="form-group">
                                                    <input type="text" name="loginid" id="loginid" tabindex="1" class="form-control" placeholder="Username" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="loginpassword" id="loginpassword" tabindex="2" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group text-center">
                                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                    <label for="remember"> Remember Me</label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" name="login" id="login" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="text-center">
                                                                <a href="forgot.php" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form name="registration" id="register-form" action="login.php" method="post" role="form" style="display: none;">
                                                <div class="form-group">
                                                    <input type="text" name="username" id="uname" tabindex="1" class="form-control" placeholder="Username" value="" required="required">
                                                    <div id="id2"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" id="uemail" tabindex="1" class="form-control" placeholder="Email Address" value="" required="required">
                                                    <div id="id3"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="mobile" id="umobile" tabindex="1" class="form-control" placeholder="Mobile Number" value="" required="required">
                                                    <div id="id4"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" id="upassword" tabindex="1" class="form-control" placeholder="Password" required="required">
                                                    <div id="id5"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="rpassword" id="urpassword" tabindex="1" class="form-control" placeholder="Confirm Password" required="required">
                                                    <span id="message"></span>
                                                    <div id="id6"></div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">Gender</label>

                                                    <label class="radio-inline">
                                                        <input type="radio" id="gender" name="gender" value="Female" required="required">Female
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" id=gender" name="gender" value="Male" required="required">Male
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" name="register" id="register" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });




    </script>
    </body>
    </html>

    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-p	b-md">

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
                    </div>
                </div>

                <div class="col-md-4 col-md-push-1">
                    <div class="gtco-widget">
                        <h3>Links</h3>
                        <ul class="gtco-footer-links">
                            <li><a href="services.php">Services</a></li>
                            <li><a href="portfolio.php">portfolio</a></li>
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



<script src="js/form-validation.js"></script>
<script src="js/jquery.validate.min.js"></script>
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






</body
</body>>
</html>