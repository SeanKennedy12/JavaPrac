<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
?>

<html>

	<head>
		<title>Home</title>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="homepage.css">
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
				<h1>Practice Java</h1>
				<p>Build your java skills by engaging in exercises</p>
				<a href="learnMore.php">Learn More</a>
			</div>
		</div>
		
		<div class="exercises">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a class="exercise" href="nestedLoopsExercises.php"><img src="images/nested-loops.png"></a>
					</div>
					
					<div class="col-md-4">
						<a class="exercise" href="recursionExercises.php"><img src="images/recursion.png"></a>
					</div>
					
					<div class="col-md-4">
						<a class="exercise" href="arraysExercises.php"><img src="images/arrays.png"></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="hidden">
			$username
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