<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: /cms/login.php");
	}
?>
