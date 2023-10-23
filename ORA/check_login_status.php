<?php
	if($_SESSION['adminLogin']!=="login")
	{
		echo"<script>window.location='index.php';</script>";
	}
?>
