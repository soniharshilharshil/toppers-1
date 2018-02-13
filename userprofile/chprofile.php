<?php
session_start();
include("head.php");
if(!isset($_SESSION['login']))
{
	echo"<script>window.open('login.php','_self')</script>";
}
else
{
	

?>
<?php

{
	$email=$_SESSION['login'];
	$sql="select * from donor_master where email='$email'";
	include("db.php");
	$run=mysql_query($sql);
	while($row=mysql_fetch_array($run))
	{
		$name=$row['dname'];
		$add=$row['dadd'];
		$city=$row['city'];
		$mobile=$row['dmobile'];
		$grpno=$row['grpno'];
	}
	
	if(isset($_POST['submit']))
	{
		
			$nname=($_POST['dname']);	
			$nadd=($_POST['add']);
			$ncity=($_POST['city']);
			$nmobile=($_POST['dmobile']); 
			$ngno=($_POST['gno']); 	
			
			
			$sql="update donor_master set dname='$nname',dadd='$nadd',dmobile='$nmobile',city='$ncity',grpno='$ngno' where email='$email'";
			$run=mysql_query($sql);
			if(isset($run))
			{
				echo"<script>alert('Update Successfully')</script>";
				echo"<script>window.open('index.php','_self')</script>";
			}
			
	}
	
	
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
						
								<form class="form-horizontal" method="post" action="chprofile.php">
								
								<h3 class="well well-md" style="background:#3FBBC0; color:#FFF;">
								<center>Change Profile</center>
								</h3>	
								<br>
								<div class="form-group">
								
								<label class="control-label col-sm-2">Change Name</label>
								<div class="col-sm-4">
								<input type="text" class="form-control" value="<?php echo$name;?>" name="dname" required>
								</div>
								</div>
								
								<div class="form-group">
								<label class="control-label col-sm-2" >Change Address</label>
								<div class="col-sm-4">
								<textarea class="form-control" rows="3" name="add"><?php echo$add; ?></textarea>
								</div>
								</div>
								
								<div class="form-group">
								<label class="control-label col-sm-2" >Change City</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control"  value="<?php echo$city;?>"name="city" required>
								</div>
								</div>
	
								<div class="form-group">
								<label class="control-label col-sm-2" >Change Mobile No</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control" value="<?php echo$mobile ?>" name="dmobile"maxlength="10" required>
								</div>
								</div>
								
								
								
							
								<div class="form-group">
								<label class="control-label col-sm-2" >Change Group No</label>
								<div class="col-sm-4">          
								<input type="text" class="form-control"  value="<?php echo$grpno; ?>" name="gno">
								</div>
								</div>
								
									<div class="form-group">        
									  <div class="col-sm-offset-2 col-sm-10">
										<input type="submit" class="btn btn-primary" name="submit" Value="Change">
										<input type="reset" class="btn btn-warning">
										
										<a href='index.php'><button class="btn btn-danger" onclick="document.location.href='chpassword.php'">Cancel</button></a>
										
										
									  </div>
									</div>
						
						
								</form>
						
						
						
						
						
						
						
						</div>
				</div>

				</div>
			

		</div>
		<?php
include("foot.php");
}
?>
		</section>

		</div>
</div>




    