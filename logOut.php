<?php
	error_reporting (E_ALL ^ E_NOTICE);
	error_reporting(0);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
	
	if ($username && $userid) {
		session_destroy();
		echo '<script type="text/javascript">', 'location.href = \'./index.php\';', '</script>';
	}
	else {
		echo "You are not logged in.";
	}
?>