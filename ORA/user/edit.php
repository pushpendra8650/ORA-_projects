<?php
session_start();
include('../includes/config.php');
if(strlen($_SESSION['ologin'])==0)
	{	
header('location:../index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
 $con=mysqli_query($bd,"update users set name='".$_POST['name']."', emobile1='".$_POST['emobile1']."', emobile2='".$_POST['emobile2']."' where mobile='".$_SESSION['ologin']."'");
$_SESSION['msg']="Profile Update Successfully !!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>users | Update Profile</title>
    <?php
		include'header-tag-data.php';
	?>
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
								<h3>users Update Profile</h3>
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
<label class="control-label" for="basicinput">Your No.</label>
<div class="controls">
<input type="text" value="<?php echo $fetch['mobile']; ?>" class="span8 tip" readonly>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Your Name</label>
<div class="controls">
<input type="text"  name="name" value="<?php echo $fetch['name']; ?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Emergency No. 1</label>
<div class="controls">
<input type="text"  name="emobile1" value="<?php echo $fetch['emobile1']; ?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Emergency No. 2</label>
<div class="controls">
<input type="text"  name="emobile2" value="<?php echo $fetch['emobile2']; ?>" class="span8 tip" required>
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