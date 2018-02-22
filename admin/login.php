<?php
session_start();

if(isset($_SESSION['login_user']))
{
    header("Location:index.php");
}
include("db.php");
if($_POST) {

    $email = $_POST['emailid'];
    $pass = $_POST['password'];

    // username and password sent from form


    $sql = "SELECT admin_id FROM admin WHERE emailid= '" . $email . "' and pass = '" . $pass . "'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $count = mysql_num_rows($result);

    if ($count == 1) {

        $_SESSION['login_user'] = $email;
        $_SESSION['password'] = $pass;
        header("location: index.php");
    } else {
        $v = 1;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>


<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">

        <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
            <div class="panel-body">

                <form role="form" method="post">
                    <fieldset>

                        <?php
                        if (isset($v))
                        {
                            echo "<div class='alert alert-danger'>
										<strong>Login Failed..!</strong> Your email or password was incorrect..! </div>";
                        }else{ echo"";}
                        ?>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="emailid" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" >
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                            <label>
                                <a href="forgotpassword.php">Forgot Password?</a>
                            </label>
                        </div>
                        <button class="btn btn-primary" type="Submit">Login</button>
                        <a href="../index.php" class="btn btn-danger">Cancel</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->



<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
