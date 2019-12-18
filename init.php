<?php 
if (isset($_SESSION['username']) || isset($_POST['username']) && !empty($_POST['username'])) { 
	if (!isset($_SESSION['username']))
		$_SESSION['username'] = $_POST['username'];
	require_once('status/info.php');
} else 
	require_once('status/form.php');
?>