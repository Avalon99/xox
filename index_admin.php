
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/countdown.css">
		<link rel="stylesheet" href="css/style_common.css" />
		<link rel="stylesheet" href="css/style4.css" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/camera.js"></script>
		<script src="js/jquery.mobile.customized.min.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<script src="js/cd_config.js"></script>
		<script src="js/modernizr.custom.69142.js"></script>

		<!--=======code untuk slide gmbr=====-->
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '200',
					thumbnails: false,
					height: '10%',
					caption: true,
					navigation: true,
					fx: 'simpleFade'
				});
	
			});
		</script>
		<!--=======code untuk slide gmbr=====-->
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
		<?php 
		if($_SESSION['username'] == 'admin') : ?>
         <li><a href="/site/admin_panel.php">Admin Panel</a></li>
       <?php endif; ?>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.html">
								<img src="images/logo2.png" alt="Ini Logo">
							</a>
						</h1>
						<div class="menu_block">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.html">Home</a></li>
									<li><a href="index-1.html">About Event</a></li>
									<li><a href="index-2.html">Race Calendar</a></li>
									<li><a href="/site/login.php">Login</a></li>
									<li><a href="/site/signup.php">Sign Up</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			<div class="slider_wrapper">
				<div id="camera_wrap" class="">
					<div data-src="images/slide1.jpg"></div>
		
					<div data-src="images/slide2.jpg"></div>
				</div>
			</div>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h2 class="center">Run Countdown <3</h2>
						<div class="count_wrap">
							<div id="counter"></div>
							<div class="clear"></div>
							<a href="/site/signup.php">Register Now!</a>
						</div>
					</div>
					<div class="clear"></div>

					</div>
					<div class="clear"></div>
					<div class="grid_7">
					</br>
					</br>
					</br>
					</br>
					
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_logo">
						<a href="index.html">Charity RUN 2018</a>
					</div>
					<div class="f_contacts">
						<a href="#" class="mail_link"><span class="fa fa-envelope"></span>SRC_Wenny@uniten.edu.my</a>
						<div class="f_phone"><span class="fa fa-phone"></span>+60148023192</div>
					</div>
					<div class="copy">
						<span>Charity RUN &copy; 2018 </span>
						
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>

	</body>
</html>