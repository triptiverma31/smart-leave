
<?php
	session_start();
	unset($_SESSION['emp_id']);
	unset($_SESSION['name']);
	if(session_destroy())
	echo $_SESSION['emp_id'] ;
	header("Location: index.php"); // Redirecting To Home Page
?>
