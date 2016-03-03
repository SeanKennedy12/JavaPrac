<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
?>

<html>
	<head>
		<title>Learn More</title>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="learnMore.css">
	</head>
	
	<body>
		<div class="nav">
			<div class=container>
				<a href="index.html" class="pull-left"><img src="images/logo.png"></a>
				
				<ul class="pull-right">
					<li id="logIn"><a class="btn btn-primary" href="logIn.php">Log In</a></li>
					<li id="signUp"><a class="btn btn-primary" href="signUp.php">Sign Up</a></li>
					<li id="profile" class="dropdown"><a href="#" class="dropdown-toggle"><img src="images/profile_icon.png"></a>
						<ul class='dropdown-menu'>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="logOut.php">Log Out</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="main-about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p id="mainParagraph">"app name" is a web application that allows students to practice basic Java concepts.
						 Users can complete exercises that will help them build their understanding of the Java programming language.
						 In addition to this, lecturers can use this application to keep track of their classes progress on exercises in order
						 to identify which areas students are weakest in.</p>
					</div>
					
					<div class="col-md-6">
						<img id="mainImg" src="images/about_main_img.jpg">
					</div>
				</div>
			</div>
		</div>
		
		<div class="learn-more">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="learn-more-img" src="images/learn_more_img_1.jpg">
						<p class="learn-more-p">Complete Exercises on various java topics.</p>
					</div>
					<div class="col-md-4">
						<img class="learn-more-img" src="images/learn_more_img_2.png">
						<p class="learn-more-p">Keep track of your progress on exercises.</p>
					</div>
					<div class="col-md-4">
						<img class="learn-more-img" src="images/learn_more_img_3.jpg">
						<p class="learn-more-p">Lecturers: Discover what areas may need reinforced in class.</p>
					</div>
				</div>
			</div>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			var username = null;
			var userid = null;
			if ("<?= $username ?>" && "<?= $userid ?>") {
				username = "<?= $username ?>";
				userid = "<?= $userid ?>";
			}
		</script>
    	<script src="home.js"></script>
	</body>
</html>