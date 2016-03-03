<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];

?>

<html>
	<head>
		<title>Custom Exercises</title>
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
					<h2>Custom exercises:</h2>
				</div>
				
				<div class="exerciseSection">
					<?php
						require("./connect.php");
						$query = mysql_query("SELECT * FROM `customExercises`");				
			
						while($row = mysql_fetch_array($query)) {
							
							$exerciseNo = $row['exercise number'];
							$description = $row['description'];
							$exerciseId = $row['exercise code'];
							
			 				echo "<a href=\"customExercise/questionTemplate.php\">
									<div class=\"exercise\">
										<div class=\"pull-left\">
											<h3>Exercise $exerciseNo:</h3>
											<p>$description</p>
										</div>
										<div class=\"pull-right\">
											<p id=\"exerciseId\">$exerciseId</p>
										</div>
									</div>
								</a>
					";
      					}	
					?>
					
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
    	<script src="exerciseSelected.js"></script>
	</body>
</html>