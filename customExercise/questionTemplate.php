<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
	$email = $_SESSION['email'];
	
	echo $_COOKIE['exerciseId'];
	
	require("../connect.php");
	$query = mysql_query("SELECT * FROM `customQuestions` WHERE `exercise code` = 1");						
	$numrows = mysql_num_rows($query);
	if ($numrows == 1) {
		$row = mysql_fetch_assoc($query);
		$exerciseNo = $row['exercise number'];
		$questionNo = $row['question number'];
		$question = $row['question'];
		$code = $row['code'];
		$ans1 = $row['answer 1'];
		$ans2 = $row['answer 2'];
		$ans3 = $row['answer 3'];
		$ans4 = $row['answer 4'];
		$correctAns = $row['correct answer'];
	}
?>


<html>
	<head>
		<title>Exercise <?php echo $exerciseNo; ?></title>
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
						<h1>Question <?php echo $questionNo; ?></h1>
					</div>
					
					<div class="mainSection">
						<div class="pull-left">
							<div class="question">
								<p><?php echo $question; ?></p>
							</div>
							<div class="questionCode">
								<pre>
<?php echo $code; ?>
								</pre>
							</div>
						</div>
					
						<div class="pull-right">
							<ul class="answers">
								<li class="answer1"><?php echo $ans1; ?></li>
								<li class="answer2"><?php echo $ans2; ?></li>
								<li class="answer3"><?php echo $ans3; ?></li>
								<li class="answer4"><?php echo $ans4; ?></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="buttons">
					<div class="pull-left">
					
					</div>
					
					<div class="pull-right">
						<a href="question2.php"><button type="button" class="btn btn-primary">Next</button></a>
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
		
		<script src=""></script>
	</body>
</html>