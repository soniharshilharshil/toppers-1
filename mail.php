<?php
$to = "vaibhav.sanskar@gmail.com";
$subject = "HTML email";

$message = "
TEST MAIL
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: vaibhav_a_shah@outlook.com' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?> 