<?php
	if($_SESSION['oLogin']!=="login")
	{
		echo"<script>window.location='../index.php';</script>";
	}
?>
