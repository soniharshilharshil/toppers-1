<?php
include("head.php");
?>
<?php
if(isset($_POST['submit']))
{
	
	
	$email=($_POST['email']); 
	$sql="select * from donor_master where email='$email'";
	include("db.php");
	$run=mysql_query($sql);
	if(mysql_num_rows($run)>0)
	{
		
		
			$code1=mt_rand(1000,5000);
			
			
			$to_sender=$_POST['email'];
			$sub="Qaswacheritabletrust.com<br>";
			$mesg=$code1."   Is your Password varifiction code";
			
				require("PHPMailer/PHPMailerAutoload.php");
				$mail = new PHPMailer;
				$mail->SMTPDebug = 0	;                               // Enable verbose debug output
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'mail.nsweb1.in';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'demo@nsweb1.in';                 // SMTP user name
				$mail->Password = 'demo@nsweb1';                           // SMTP password
				$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `SSL` also accepted
				$mail->Port = 465;                                    // TCP port to connect to

				$mail->setFrom('demo@nsweb1.in', 'Qaswa');
				$mail->addAddress($email); // Add a recipient 
				$mail->isHTML(true); 
				$mail->Subject = $sub;
				$mail->Body    = $mesg;
				$mail->AltBody = '';

				if($mail->send())
				{
					$sql="update donor_master set cnfrm_code='$code1'where email='$email'";
					$run=mysql_query($sql);
					session_start();
					$_SESSION["concode"]=$email;
					//header("location:forgotpassword2.php");
					echo "<script>window.open('forgotpassword2.php','_self')</script>";
					
				}
				
	}
	else 
	{
		echo "<script>alert('please register your email first')</script>";
	}
		mysql_close($conn); // Closing Connection with Server
}

	
?>
<br>
<br>
<br>
<section id="boxes" class="home-section paddingtop">
<div class="container">

<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					
						
						<!--<div class="container">-->
						
								<form class="form-horizontal" method="post" action="forgotpassword.php">
								
								<h3 class="well well-md" style="background:#3FBBC0; color:#FFF;">
								<center>Forgot Password?</center>
								</h3>	
								<br>
								
								
								<div class="form-group">
								
								<label class="control-label col-sm-2" >Email:</label>
								<div class="col-sm-4">          
								<input type="email" class="form-control"  placeholder="Enter Your Email" name="email" required>
								</div>
								</div>

								
							
								
									<div class="form-group">        
									  <div class="col-sm-offset-2 col-sm-10">
										<input type="submit" class="btn btn-primary" name="submit" Value="Send"/><span ></span>
										<input type="button" class="btn btn-warning" value="cancel">
										
										
									  </div>
									</div>
						
						
								</form>
						
						
						
						
						
						
						
						</div>
				</div>

				</div>
			

		</div>
<?php include("foot.php");?>
	</section>

</div>

    