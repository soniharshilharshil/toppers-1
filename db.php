<?php
	$con=new mysqli('localhost','root','','demo');
	$sql="Select * from timeslot";
	$result=$con->query($sql);
?>