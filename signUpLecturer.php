<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
?>

<html>

	<head>
		<title>Sign Up</title>
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
			if ($_POST['registerbtn']) {
				$errormsg = "hi";
				$getUser = $_POST['user'];
				$getEmail = $_POST['email'];
				$getPass = $_POST['pass'];
				$getRepass = $_POST['repass'];
				
				if ($getUser) {
					if ($getEmail) {
						if ($getPass) {
							if ($getRepass) {
								if($getPass === $getRepass) {
									if (!filter_var($getEmail, FILTER_VALIDATE_EMAIL) === false) {
										
										require("./connect.php");
										
										$query = mysql_query("SELECT * FROM users WHERE username='$getUser'");
										$numrows = mysql_num_rows($query);
										
										if($numrows == 0) {
											$query = mysql_query("SELECT * FROM users WHERE email='$getEmail'");
											$numrows = mysql_num_rows($query);
											
											if($numrows == 0) {
											
												$password = md5(md5("kjhdksahd".$getPass."Fks56sad"));
												$date = date("F d, Y");
												$id = uniqid();
												
												//SET BACK TO 0 WHEN ACTIVATION IS WORKING!!!!
												mysql_query("INSERT INTO users VALUES(
													'$id', '$getUser', '$password', '$getEmail', '1', '$date'
												)");
												
												$query = mysql_query("SELECT * FROM users WHERE username='$getUser'");
												$numRows = mysql_num_rows($query);
												if ($numRows == 1) {
													echo '<script type="text/javascript">', 'alert("Registration has been succesful! Please log in to continue.");', '</script>';
													echo '<script type="text/javascript">', 'location.href = \'./index.php\';', '</script>';
												}
												else {
													$errormsg = "An error has occured. Registration has not been successful.";
												}
											
											}
											else {
												$errormsg = "An account already exists with this email address";
											}
										
										}
										else {
											$errormsg = "Username already taken.";
										}
										
										mysql_close();
										
									}
									else {
										$errormsg = "You must enter a valid email address";
									}
								}
								else {
									$errormsg = "Passwords do not match";
								}
							}
							else {
							
							} 
						}
						else {
							$errormsg = "You must enter a password.";
						}
					}
					else {
						$errormsg = "You must enter an email address.";
					}
				
				}
				else {
					$errormsg = "You must enter a username.";
				}
			}
			
			$form = "<div class=\"signUp\">
				<div class=\"container\">
					<form role=\"form\" action='./signUp.php' method='post'>
						<table>
							<tr>
								<td>$errormsg</td>
								<td></td>
							</tr>
						</table>
						<div class=\"header\">
							<h3>Sign Up as a lecturer</h3>
						</div>
						<div class=\"form-group\">
							<label for=\"username\">Username: </label>
							<input type='text' name='user' placeholder=\"Enter username\" value='$getUser' class=\"form-control\">
						</div>
						<div class=\"form-group\">
							<label for=\"email\">Email: </label>
							<input type='email' name='email' placeholder=\"Enter email\" value='$getEmail' class=\"form-control\">
						</div>
						<div class=\"form-group\">
							<label for=\"password\">Password: </label>
							<input type='password' name='pass' placeholder=\"Enter password\" value='' class=\"form-control\">
						</div>
						<div class=\"form-group\">
							<label for\"repass\">Re-enter Password: </label>
							<input type='password' name='repass' placeholder=\"Retype password\" value='' class=\"form-control\">
						</div>
						<input type='submit' name='registerbtn' value='register'>
					</form>
				</div>
			</div>";
			
			echo $form;
			
		?>
	</body>
	
</html>