<?php
$username = addslashes($_POST['username']);
$password = md5($_POST['password']);

if (!$username or !$password) {
		header("Location: ./login.php");
} else {

		$dbuser = 'cknopke_iewllog';
		$dbpw = 'jYPM975u6pfyC9T';
		$dbhost = 'localhost';
		$db = 'cknopke_iewlcms';

		$link = mysql_connect("$dbhost", "$dbuser", "$dbpw") or die("Error connecting to database.");
		mysql_select_db("$db", $link) or die("Error selecting database.");
		$result = mysql_query("SELECT * FROM kennylogins WHERE uname='$username' AND pword='$password'", $link);
		$rowcheck = mysql_num_rows($result);
		if($rowcheck > 0) {
			while($row = mysql_fetch_array($result)){
				session_start();
				$_SESSION['username'] = $username;
				header("Location: ./index.php");
			}
		} else {
			header("Location: ./login.php");
		}
	}
?>
