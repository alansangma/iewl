<?php
session_start();
if(isset($_SESSION['username'])){
	$_SESSION = array();
	header("Location: ./login.php");
} else {
	header("Location: ./login.php");
}
?>