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
		<title>Exercise 1</title>
		<link rel="stylesheet" href="../bootstrap.css">
		<link rel="stylesheet" href="../exercises.css">
	</head>
	
	<body>
		<div class="nav">
			<div class=container>
				<a href="../index.html" class="pull-left"><img src="../images/logo.png"></a>
				
				<ul class="pull-right">
					<li id="logIn"><a class="btn btn-primary" href="../logIn.php">Log In</a></li>
					<li id="signUp"><a class="btn btn-primary" href="../signUp.php">Sign Up</a></li>
					<li id="profile" class="dropdown"><a href="#" class="dropdown-toggle"><img src="../images/profile_icon.png"></a>
						<ul class='dropdown-menu'>
							<li><a href="../profile.php">Profile</a></li>
							<li><a href="../logOut.php">Log Out</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="background">
			<div class="container">
			
				<div class="pull-right">
					<div class="hint">
						<a href="#"><img src="../images/hint_icon.png"></a>
					</div>
				</div>
				
				<div class="questionSection">
					<div class="header">
						<h1>Question 3</h1>
					</div>
					
							<div class="mainSection">
						<div class="pull-left">
							<div class="question">
								<p>What would be the output of the following code fragment?</p>
							</div>
							<div class="questionCode">
								<pre>for (int i = 0; i < 1; i++) {
    for (int j = 0; j < 3; j++) {
	    System.out.print(i);
    }
}
								</pre>
							</div>
						</div>
					
						<div class="pull-right">
							<ul class="answers">
								<li class="answer1">012</li>
								<li class="answer2">000111</li>
								<li class="answer3">000</li>
								<li class="answer4">123123</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="buttons">
					<div class="pull-left">
						<a href="question2.php"><button type="button" class="btn btn-primary">Prev</button></a>
					</div>
					
					<div class="pull-right">
						<a href="completeExercise.php"><button type="button" class="btn btn-primary">Finish</button></a>
					</div>
				</div
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
		<script src="../header.js"></script>
		
		<script src="nestedLoopsEx1Answers.js"></script>
	</body>
</html>