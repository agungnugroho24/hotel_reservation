<?php
// show all errors and warning
  ini_set('display_errors', 0);
  error_reporting(E_ALL);
	//Start session
	session_start();
	
	
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
		header("location: index.php");
		exit();
	}
        $session_id=$_SESSION['id'];
?>