
<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$category=$_POST['category'];
 $con=mysqli_query($bd,"INSERT INTO `mechanics` (`id`, `name`, `mobile`, `category`, `address`) VALUES (NULL, '$name', '$mobile', '$category', '$address')");
$_SESSION['msg']="Mechanic Add Successfully !!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin| Add Mechanics</title>
    <?php
		include'header-tag-data.php';
	?>
	<script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Admin Mechanics</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
									<br />

			<form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">
									
<div class="control-group">
<label class="control-label" for="basicinput">Select Category</label>
<div class="controls">
<select name="category" class="span8 tip" required>
	<option>Select Category</option>
	<option value="plumber">Plumber</option>
	<option value="ac">AC Repair</option>
	<option value="pest">Pest Control</option>
	<option value="paint">Paint</option>
	<option value="car">Car Wash</option>
	<option value="electrician">Electrician</option>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Mechanic Name</label>
<div class="controls">
<input type="text" placeholder="Enter Mechanic Name"  name="name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Mechanic Mobile</label>
<div class="controls">
<input type="text" placeholder="Enter Mechanic Mobile"  name="mobile" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Mechanic Address</label>
<div class="controls">
<input type="text" placeholder="Enter Mechanic Address"  name="address" class="span8 tip" required>
</div>
</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Submit</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
<?php } ?>