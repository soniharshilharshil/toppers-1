<?php
session_start(); // Is Used To Destroy All Sessions
//Or
if(isset($_SESSION['login_user']))
{
unset($_SESSION['login_user']);
header("location:../index.php");
}