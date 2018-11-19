<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MovieReviews.com</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wrapper -->
	<div id="wrapper">
		<div class="light-bg">
			<!-- shell -->
			<div class="shell">
				<!-- header -->
				<div class="header">
					<!-- socials -->
					<div class="socials">
						
					</div>
					<!-- end of socials -->
					<h1 id="logo"><a href="#">Moviereviews</a></h1>
					<!-- navigation -->
					<nav id="navigation">
						<ul>
							<li><a href="LogIn.php" target='_blank'>Log In</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Connect Us</a></li>
							<li><a href="#">Join Us</a></li>
                            <li><a href="#">Comments</a></li>
						</ul>
					</nav>
					<!-- end of navigation -->
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of header -->
				<!-- main -->
				<div class="main">
					<!-- content -->
					<section class="content">
								<?php include("data select.php");?>
						<!-- end of post -->
						<div class="pagination">
							<ul>
								<li class="laquo"><a href="#"><span></span></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li class="raquo"><a href="#"><span></span></a></li>
								<li><a href="#">10</a></li>
								<li class="dots">. . .</li>
								<li><a href="#">last</a></li>
							</ul>
						</div>
					</section>
					<!-- end of content -->
					<!-- sidebar -->
				
					<!-- end of sidebar -->
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of main -->
				<div class="footer">
					<nav class="footer-nav">
						<ul>
							<li><a href="LogIn.php">Log In</a></li>
							<li><a href="#">Conncet Us</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Q&F</a></li>
						</ul>
					</nav>
					<p class="copy">Copyright &copy; 2018 <span>|</span> Movie Review & Box-Office. Design by Group4</p>
				</div>
			</div>
			<!-- end of shell -->
		</div>	
	</div>
	<!-- end of wrapper -->
</body>
</html>