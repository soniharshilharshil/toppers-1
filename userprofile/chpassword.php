<?php 
session_start();
include("head.php");

$c=0;
$p=0;
if(isset($_SESSION["login"]))
{
	if(isset($_POST["submit"]))
	{
		$cpass=$_POST["cpass"];
		$pass1=$_POST["pass1"];
		$pass2=$_POST["pass2"];
		
		
		$email=$_SESSION["login"];
		$sql="select * from donor_master where email='$email' AND pass='$cpass'";
		include("db.php");
		$run=mysql_query($sql);
		if(mysql_num_rows($run)>0)
		{
			if($pass1==$pass2)
			{
				$sql="update donor_master set pass='$pass2' where email='$email'";
				$run=mysql_query($sql);
				echo"<script>alert('Your password has changed successfuly')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			}
			else
			{
				$p=1;
			}
			
		}
		else
		{
			$c=1;
		}
		
		
	}
	
?>



<section id="boxes" class="home-section paddingtop-100">

<div class="container">

<div class="row">

				<div class="col-lg-12">
				<br>
				<br>
				<br>
				<br>
				<div class="panel panel-default">
					
					
						
						<!--<div class="container">-->
						
								<form class="form-horizontal" method="post" action="chpassword.php">
								
								<h3 class="well well-md" style="background:#3FBBC0; color:#FFF;">
								<center>Change Password</center>
								</h3><br>
								
								
								<div class="form-group">
								
								<label class="control-label col-sm-4" >Current Password</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control"  placeholder="Enter Your Current Password" name="cpass" required>
								<?php if($c==1){echo"<font style='color:red'>Wrong password</font>";}?>
								</div>
								</div>
								
								<div class="form-group">
								
								<label class="control-label col-sm-4" >New Password</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control"  placeholder="Enter new Password" name="pass1" required>
								</div>
								</div>
								
								
								<div class="form-group">
								
								<label class="control-label col-sm-4" >Confirm Password</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control"  placeholder="Confirm Password" name="pass2" required>
								<?php if($p==1){echo"<font style='color:red'>Password Not match</font>";}?>
								</div>
								</div>

								
							
								
									<div class="form-group">        
									  <div class="col-sm-offset-4 col-sm-10">
										<input type="submit" class="btn btn-primary" name="submit" Value="Change"/><span ></span>
										<a href='index.php' class="btn btn-danger" value="cancel">Cancel</a>
										
										
									  </div>
									</div>
						
						
								</form>
						
						
						</div>
				</div>

				</div>
			

		<br>
		<br>
		<br>
		</div>
		<?php include('foot.php');?>
		</div>
		


	</section>

	</body>

<?php
 }
 else
 {
	 echo "<script>window.open('login.php','_self')</script>";
 }
	 
 ?>