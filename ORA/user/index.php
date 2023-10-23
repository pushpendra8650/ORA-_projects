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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>user Home</title>
    <?php
		include'header-tag-data.php';
	?>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php 
	include('include/sidebar.php');

?>			
			<div class="span9">
					<div class="content">
						<div class="module">
                            	<a href="list.php?cat=plumber"><input class="btn btn-danger" type="submit" name="plumber" value="PLUMBER" style="height:250px; font-size:50px; width:250px; float:left; margin:15px;" /></a>
                            	<a href="list.php?cat=ac"><input class="btn btn-success" type="submit" name="ac" value="AC Repair" style="height:250px; font-size:50px; width:250px; float:left; margin:15px;" /></a>
                            	<a href="list.php?cat=pest"><input class="btn btn-warning" type="submit" name="pest" value="Pesting" style="height:250px; font-size:50px; width:250px; float:left; margin:15px;" /></a>
                            	<a href="list.php?cat=paint"><input class="btn btn-warning" type="submit" name="paint" value="Painting" style="height:250px; font-size:50px; width:250px; float:left; margin:15px;" /></a>
                            	<a href="list.php?cat=car"><input class="btn btn-danger" type="submit" name="car" value="Car Wash" style="height:250px; font-size:50px; width:250px; float:left; margin:15px;" /></a>
                            	<a href="list.php?cat=electrician"><input class="btn btn-success" type="submit" name="electrician" value="Electrician" style="height:250px; font-size:50px; width:250px; float:left; margin:15px;" /></a>
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