<?php
session_start();
$email=$_SESSION["concode"];	
if(!isset($_SESSION["concode"]))
{
	header("location:forgotpassword.php");
}
else
{
	
include("head.php");
?>
<?php
if(isset($_POST['submit']))
{
	$p=0;
	$c=0;
	$code=$_POST['code'];
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];

	$sql="select * from donor_master where email='$email'";
	include("db.php");
	$run=mysql_query($sql);
	while($row=mysql_fetch_array($run))
	{		
		$newcode=$row['cnfrm_code'];
	}
	if($code==$newcode)
	{
		if($pass1==$pass2)
		{
			$sql="update donor_master set pass='$pass2' where email='$email'";
			$run=mysql_query($sql);
			echo"<script>alert('Your password has been changend')</script>";
			
			$_SESSION['login']=$email;
			echo"<script>window.open('index.php','_self')</script>";
			
		}
		else
		{
			//echo"<script>alert('password miss match')</script>";
			$p=1;
		}
		
	}
	else
	{
		//echo"<script>alert('wrong code')</script>";
		$c=1;
	}
		
	
	
	
	
}
?>


<section id="boxes" class="home-section paddingtop">
<div class="container">

<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					
						
						<!--<div class="container">-->
						
								<form class="form-horizontal" method="post" action="forgotpassword2.php">
								
								<h3 class="well well-md" style="background:#3FBBC0; color:#FFF;">
								<center>Forgot Password?</center>
								</h3>	
								<br>
								
								
								<div class="form-group">
								<label class="control-label col-sm-2" >Confirmation code:</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control"  placeholder="Enter Your Confirmaton Code" name="code" required>
								<?php if($c==1){echo"<font color='red'Wrong confirmation code!</font>";}?>
								</div>
								</div>
								
								<div class="form-group">
								<label class="control-label col-sm-2" >New Password:</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control"  placeholder="Enter new Password" name="pass1" required>
								</div>
								</div>
								
								<div class="form-group">
								<label class="control-label col-sm-2" >Confirm Password:</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control"  placeholder="Confirm Password" name="pass2" required>
								<?php if($p==1){echo"<font color='red'>password Missmatch!</font>";}?>
								</div>
								</div>

								
									<div class="form-group">        
									  <div class="col-sm-offset-2 col-sm-10">
										<input type="submit" class="btn btn-primary" name="submit" Value="Submit"/>
										<input type="button" class="btn btn-warning" value="cancel"/>
										
										
									  </div>
									</div>
						
						
								</form>
						
						</div>
				</div>

			</div>
			

		</div>
<?php include("foot.php");
}?>
</section>
</div>
