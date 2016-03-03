<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
	$email = $_SESSION['email'];
?>

<html>
	<head>
		<title>Profile</title>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="profile.css">
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
		
		<div class="jumbotron">
			<div class="container">
				<img src="images/profile_icon_large.png">
				<a href="#">Change photo</a>
			</div>
		</div>
		
		<div class="detailsSection">
			<div class="container">
				<div class="header">
					<h3>Details</h3>
				</div>
				
				<div class="details">
					<ul>
						<li>Username: <?php echo $username; ?> </li>
						<li>Email: <?php echo $email; ?></li>
						<li><a href="#">Change Password</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="progressSection">
			<div class="container">
				<div class="header">
					<h3>Progress</h3>
				</div>
				
				<div class="progressDetails">
					<div class="completedExercises">
						<h4>Completed Exercises</h4>
					</div>
					
					<div class="points">
						<h4>Points</h4>
					</div>
					
					<div class="exerciseProgress">
						<h4>Exercise Progress</h4>
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