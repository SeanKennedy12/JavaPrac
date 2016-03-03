<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
	
	require("./connect.php");
	$exercise1Result = mysql_query("SELECT `exercise status` FROM Scores WHERE `exercise name`='recursion' && `exercise number`=1 && `username`='$username'");

	while ( $row = mysql_fetch_assoc($exercise1Result) ) {
   		 if ($row['exercise status'] == 1) {
   		 	$exercise1Status = 1;
   		 }
   		 else {
   		 	$exercise1Status = 0;
   		 }
	}
	
	$exercise2Result = mysql_query("SELECT `exercise status` FROM Scores WHERE `exercise name`='recursion' && `exercise number`=2 && `username`='$username'");
	while ( $row = mysql_fetch_assoc($exercise2Result) ) {
   		 if ($row['exercise status'] == 1) {
   		 	$exercise2Status = 1;
   		 }
   		 else {
   		 	$exercise2Status = 0;
   		 }
	}
	
	$exercise3Result = mysql_query("SELECT `exercise status` FROM Scores WHERE `exercise name`='recursion' && `exercise number`=3 && `username`='$username'");
	while ( $row = mysql_fetch_assoc($exercise3Result) ) {
   		 if ($row['exercise status'] == 1) {
   		 	$exercise3Status = 1;
   		 }
   		 else {
   		 	$exercise3Status = 0;
   		 }
	}
?>

<html>
	<head>
		<title>Recursion</title>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="exercisePicker.css">
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
		
		<div class="exercises">
			<div class="container">
				<div class="header">
					<h2>Recursion exercises:</h2>
				</div>
				
				<div class="exerciseSection">
					<a href="recursionEx1/question1.php">
						<div class="exercise">
							<div class="pull-left">
								<h3>Exercise 1:</h3>
								<p>Easy exercise on recursion</p>
							</div>
							<div class="pull-right">
								<img id="exercise1" src="images/question_mark.png">
							</div>
						</div>
					</a>
					
					<a href="recursionEx2/question1.php">
						<div class="exercise">
							<div class="pull-left">
								<h3>Exercise 2:</h3>
								<p>Medium exercise on recursion</p>
							</div>
							<div class="pull-right">
								<img id="exercise2" src="images/question_mark.png">
							</div>
						</div>
					</a>
					
					<a href="recursionEx3/question1.php">
						<div class="exercise">
							<div class="pull-left">
								<h3>Exercise 3:</h3>
								<p>Hard exercise on recursion</p>
							</div>
							<div class="pull-right">
								<img id="exercise3" src="images/question_mark.png">
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			var username = null;
			var userid = null;
			var ex1Status = null;
			var ex2Status = null;
			var ex3Status = null;
			if ("<?= $username ?>" && "<?= $userid ?>") {
				username = "<?= $username ?>";
				userid = "<?= $userid ?>";
				ex1Status = "<?= $exercise1Status ?>";
				ex2Status = "<?= $exercise2Status ?>";
				ex3Status = "<?= $exercise3Status ?>";
			}
		</script>
    	<script src="exercisePicker.js"></script>
	</body>
</html>