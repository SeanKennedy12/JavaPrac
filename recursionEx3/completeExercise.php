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
		<title>Exercise 3</title>
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
				<div class="questionSection">
					<div class="header">
						<h1>Complete</h1>
					</div>
					<div class="scoreSection">
						<div class="topText">
							<h2>You have scored:</h2>
						</div>
					
						<div class="score">
							<h3 id="usrScore">0</h3>
						</div>
					</div>
				</div>
				
				<div class="buttons">
					<div class="pull-left">
						<a href="../index.php"><button type="button" class="btn btn-primary">Home</button></a>
					</div>
					
					<div class="pull-right">
						<a href="../recursionExercises.php"><button type="button" class="btn btn-primary">recursion</button></a>
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
		
		<script src="../getUserScore.js"></script>
		
		<?php
			require("../connect.php");
			$score =  $_COOKIE['score'];
			
			$query = mysql_query("SELECT * FROM `Scores` WHERE `username` = 'sean' AND `exercise name` = 'recursion' AND `exercise number` = 3");						
			$numrows = mysql_num_rows($query);
			$attempt = numrows + 1;
			
			if ($score < 3) {
				mysql_query("INSERT INTO Scores VALUES('$userid', '$username', 'recursion', '3', '0', '$score', '$attempt')");
			}
			else {
				mysql_query("INSERT INTO Scores VALUES('$userid', '$username', 'recursion', '3', '1', '$score', '$attempt')");
			}
		?>
	</body>
</html>