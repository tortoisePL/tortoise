<?php


class User
{
	public function __construct()
	{
		session_start(); // Start the session.
		$pagetitle = "مدیریت پرسنل";

		// If no session value is present, redirect the user:
		// Also validate the HTTP_USER_AGENT!
	if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) )) {
	//redirect to login page
	echo '<script> window.location="login"; </script>';
	exit();	
}
else{
		include 'header.inc.php';
		include 'topheader.inc.php';
		include 'main.inc.php';
		include 'dashboard-primary-tools.php';
		include 'user-content.php';
		include 'endmain.inc.php';
		include 'footer.inc.php';

	}

}
}
