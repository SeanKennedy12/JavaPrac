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
			
				<div class="pull-right">
					<div class="hint">
						<a href="#"><img src="../images/hint_icon.png"></a>
					</div>
				</div>
				
				<div class="questionSection">
					<div class="header">
						<h1>Question 1</h1>
					</div>
					
							<div class="mainSection">
						<div class="pull-left">
							<div class="question">
								<p>What are the contents of mat after the following code segment has been executed?</p>
							</div>
							<div class="questionCode">
								<pre>int [][] mat = new int [4][3];
for (int row = 0; row < mat.length; row++) {
   for (int col = 0; col < mat[0].length; col++) {
      if (row < col) {
         mat[row][col] = 1;
      }
      else if (row == col){
         mat[row][col] = 2;
      }
      else {
         mat[row][col] = 3;
      }
     }
  }
								</pre>
							</div>
						</div>
					
						<div class="pull-right">
							<ul class="answers">
								<li class="answer1">{{2 3 3}, {1 2 3}, {1 1 2}, {1 1 1}}</li>
								<li class="answer2">{{2 1 1}, {3 2 1}, {3 3 2}, {3 3 3}}</li>
								<li class="answer3">{{2 1 1 1}, {3 2 1 1}, {3 3 2 1}}</li>
								<li class="answer4">{{2 3 3 3}, {1 2 3 3}, {1 1 2 3}}</li>
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
		
		<script src="arraysEx3Answers.js"></script>
	</body>
</html>