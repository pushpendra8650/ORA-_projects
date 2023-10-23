<?php
	$fetch=mysqli_fetch_array(mysqli_query($bd,"select * from admin where username='".$_SESSION['alogin']."'"));
?>
<div class="navbar navbar-fixed-top">
		<div class="navbar-inner" style="background-color:#066; color:#FFF;">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php" style="background-color:#066; color:#FFF;">
			  		ORA | Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<li><a href="#" style="background-color:#066; color:#FFF;">
							Hello <?php echo $fetch['username']; ?>
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#066; color:#FFF;">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
