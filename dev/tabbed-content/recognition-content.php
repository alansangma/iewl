<h3>Recognition</h3>

<?php
require_once('../include/config.php');

include_once('../include/functions.php');

$connection = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $connection);

$query = "SELECT recognition, signature FROM recognition WHERE visible = 1 ORDER BY ordering";
$result = mysql_query($query) or die('Error with the query.');

mysql_close($connection);

while ($obj = mysql_fetch_object($result)) {
	$title = nl2br($obj->signature);
	$copy =  nl2br($obj->recognition);
	$copy = detectUrls($copy);
	
	echo '
	<div class="grid_8 prefix_2">
	     <h4 class="staff_h">'.$title.'</h4>
	</div>
	<div class="grid_8 prefix_2">
		<p>'.$copy.'</p>
	</div>
	<div class="clear tall_10"></div>
	';
}
?>

<div class="clear tall_40"></div>