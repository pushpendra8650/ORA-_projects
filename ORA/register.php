<?php
session_start();
error_reporting(0);
include("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ORA | Registration</title>
    <?php
		include'header-tag-data.php';
	?>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  		ORA | Registration
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="post">
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputName" name="name" placeholder="Full Name">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputName" name="mobile" placeholder="Your Mobile No.">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
						<input class="span12" type="password" id="inputPassword" name="psw" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="submit">Register</button>
								</div>
							</div>
						</div>
                    <center><h5><a href="index.php">Click here</a> if already have an account</h5></center>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2024 ORA </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		//$password=md5($_POST['psw']);
		$password=$_POST['psw'];
//		$reg_date=$currentTime;
		$addQuery=mysqli_query($bd,"INSERT INTO `users` (`id`, `name`, `mobile`, `password`) VALUES (NULL, '$name', '$mobile', '$password')");
		if($addQuery==true)
		{
			echo'<script>alert("Successfully Registered");</script>';
		}
		else
		{
			echo'<script>alert("did not Successfully Registered");</script>';
		}
	}
?>