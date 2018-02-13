<!DOCTYPE html>
<?php
$con=new mysqli('localhost','root','','demo');
$sql="Select * from demotable1";
$result=$con->query($sql);
$row=mysqli_fetch_row($result);
?>
<html>
<head>
<link rel="stylesheet" href="../css/font-awesome.min.css">
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
<style>
</style>
</head>
<body>
<div class="card text-left gtco-heading">
    <h3>Your Profile</h3>
  <table>
    <?php
    echo "<tr><td>name</td><td><input type='text' value='$row[1]' disabled/></td><td><input type='submit' value='change'></td></tr>";
    echo "<tr><td>mobile</td><td><input type='text' value='$row[2]' disabled/></td><td><input type='submit' value='change'></td></tr>";
    echo "<tr><td>email</td><td><input type='text' value='$row[2]'/></td><td><input type='submit' value='change'></td></tr>";
  ?>
</div>
</body>
</html>