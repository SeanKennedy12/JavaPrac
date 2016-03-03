<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
?>

<html>

	<head>
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="signUp.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    	<meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
	</head>

	<body>
	
		<div class="nav">
			<div class=container>
				<a href="index.html" class="pull-left"><img src="images/logo.png"></a>
				
				<ul class="pull-right">
					<li><a class="btn btn-primary" href="logIn.php">Log In</a></li>
					<li><a class="btn btn-primary" href="signUp.php">Sign Up</a></li>
				</ul>
			</div>
		</div>
		
		<?php
			if ($username && $userid) {
				echo "You are already logged in as <b>$username</b>. <a href='./index.html'>Click here</a> to go to homepage.";
			}
			else {
				$form = "
				<div class=\"logIn\">
					<div class=\"container\">
						<form action='./logIn.php' method='post'>
							<div class=\"form-group\">
								<label for=\"username\">Username: </label>
								<input type='text' name='user' placeholder=\"Enter username\" class=\"form-control\">
							</div>
							<div class=\"form-group\">
								<label for=\"password\">Password: </label>
								<input type='password' name='password' placeholder=\"Enter password\" class=\"form-control\">
							</div>
							<input type='submit' name='loginbtn' value='Login'/>
						</form>
					</div>
				</div>";
				
				if ($_POST['loginbtn']) {
					$user = $_POST['user'];
					$password = $_POST['password'];
					
					if ($user) {
						if($password) {
							
							require("connect.php");
							
							$password = md5(md5("kjhdksahd".$password."Fks56sad"));
							//check login info is correct
							$query = mysql_query("SELECT * FROM `users` WHERE `username` = '$user'");						
							$numrows = mysql_num_rows($query);
							
							
							if ($numrows == 1) {
								$row = mysql_fetch_assoc($query);
								$dbid = $row['id'];
								$dbuser = $row['username'];
								$dbpass = $row['password'];
								$dblevel = $row['level'];
								$dbemail = $row['email'];

								if ($password == $dbpass) {
									
										//set session info
										$_SESSION['userid'] = $dbid;
										$_SESSION['username'] = $dbuser;
										$_SESSION['level'] = $dblevel;
										$_SESSION['email'] = $dbemail;
									
										echo '<script type="text/javascript">', 'location.href = \'./index.php\';', '</script>';
								}
								else {
									echo "You did not enter the correct password. $form";
								}
							}
							else {
								echo "Username not found. $form";
							}
							
							mysql_close();
						
						}
						else {
						 echo "You must enter your password. $form";
						}
					
					}
					else {
						echo "You must enter your username. $form";
					}
				}
				else {
					echo $form;
				}
			}
		?>
	</body>
	
</html>