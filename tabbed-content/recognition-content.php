<?php
//require_once('../include/config.php');

include_once('include/functions.php');

//echo '<!--'.$dbdatabase.'-->';

// $connection = mysql_connect($dbhost, $dbuser, $dbpassword);
// mysql_select_db($dbdatabase, $connection);

$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);
$query = "SELECT * FROM recognition WHERE visible = 1 ORDER BY ordering";
//$result = mysql_query($query) or die('Error with the query.<br/>'.mysql_error());
$result = $mysqli->query($query);

// mysql_close($connection);

// while ($obj = mysql_fetch_object($result)) {
while ($obj = $result->fetch_object()) {

	$title = nl2br($obj->signature);
	$copy =  nl2br($obj->recognition);
	//$copy = detectUrls($copy);
	
	echo '
	<div class="col-md-10 col-md-offset-1">
	     <h4 class="staff_h">'.$title.'</h4>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<p>'.$copy.'</p>
	</div>
	<div class="clear tall_10"></div>
	';
}
$result->close();
$mysqli->close();
?>

<div class="clear tall_40"></div>