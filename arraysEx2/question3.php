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
		<title>Exercise 2</title>
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
								<p>What are the indices i and j of the array element a[ i ][ j ] that is
equal to 10 after the following code fragment is executed? </p>
							</div>
							<div class="questionCode">
								<pre>ArrayList&lt;Integer&gt; aList = new ArrayList&lt;Integer&gt;();
aList.add(new Integer(1));
aList.add(new Integer(2));
aList.add(1, new Integer(5));
aList.set(1, new Integer(4));
aList.add(new Integer(6));
aList.add(new Integer(3));
System.out.println(aList);
								</pre>
							</div>
						</div>
					
						<div class="pull-right">
							<ul class="answers">
								<li class="answer1">[1, 2, 5, 4, 6, 3]</li>
								<li class="answer2">[1, 2, 3, 4, 5, 6]</li>
								<li class="answer3">[1, 2, 4, 6, 3]</li>
								<li class="answer4">[1, 4, 2, 6, 3]</li>
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
		
		<script src="arraysEx2Answers.js"></script>
	</body>
</html>