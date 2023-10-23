<?php
session_start();
error_reporting(0);
include("includes/config.php");
if($_SESSION['adminLogin']=="login")
{
	echo"<script>window.location='change-password.php';</script>";
}
if(isset($_POST['submit']))
{
	$type=$_POST['type'];
	$username=$_POST['username'];
	//$password=md5($_POST['password']);
	$password= $_POST['password'];
	if($type=="admin")
	{
		$ret=mysqli_query($bd,"SELECT * FROM admin WHERE username='$username' and password='$password'");
		$num=mysqli_fetch_array($ret);
		if($num>0)
		{
		$extra="change-password.php";//
		$_SESSION['alogin']=$_POST['username'];
		$_SESSION['id']=$num['id'];
		$_SESSION['adminLogin']="login";
		$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
		}
		else
		{
		$_SESSION['errmsg']="Invalid username or password";
		$extra="index.php";
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
		}
	}
	else if($type=="user")
	{
		$q="SELECT * FROM users WHERE mobile='$username' and password='$password'";
		echo $q;
		$ret=mysqli_query($bd,$q);
		$num=mysqli_fetch_array($ret);
		if($num>0)
		{
		$extra="user/index.php";//
		$_SESSION['ologin']=$_POST['username'];
		$_SESSION['offid']=$num['id'];
		$_SESSION['oLogin']="login";
		$host=$_SERVER['HTTP_HOST'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
		}
		else
		{
		$_SESSION['errmsg']="Invalid username or password";
		$extra="index.php";
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		header("location:http://$host$uri/$extra");
		exit();
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>ORA | login</title>
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
			  		ORA | Login
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
							<h3>Sign In</h3>
						</div>
						<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
                                	<select class="span12" name="type" >
                                    	<option>Select account type</option>
                                    	<option value="admin">Admin</option>
                                    	<option value="user">User</option>
                                    </select>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" name="username" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
						<input class="span12" type="password" id="inputPassword" name="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="submit">Login</button>	
								</div>
							</div>
						</div>
                    <center><h5><a href="register.php">Click here</a> if haven't account </h5></center>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

    <?php
		include'includes/footer.php';
	?>
<!--	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2018 ORA </b> All rights reserved.
		</div>
	</div>
-->	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>