<?php

require_once('../include/config.php');

$connection = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $connection);


$user = /*isset($_GET['blog']) ? $_GET['blog'] : */'inlandempireweightloss';

$request = "SELECT title, body, post_url, timestamp FROM tumblr_".$user." ORDER BY timestamp DESC LIMIT 10;";
$result = mysql_query($request) or die('<h2>failed to SELECT from tumblr_'.$user.' : </h2><p>'.mysql_error().'</p>');


while($obj = mysql_fetch_object($result)) {
	$title = rawurldecode($obj->title);
	$body = rawurldecode($obj->body);
	$body = str_replace('<br/>', '', $body);
	$body = str_replace("^", '<br/>', $body);
	
	$post_url = $obj->post_url;
	$date = date('F j, Y', $obj->timestamp);
	$time = date('g:ia', $obj->timestamp);
	
	echo '
		<div class="clear tall_20"></div>
		<div class="grid_2 alpha timestamp">
			<h4>'.$date.'</h4>
		</div>
		<div class="grid_6 omega">
			<h3 class="news_h"><a href="'.$post_url.'" title="View this article on Tumblr" target="_blank">'.$title.'</a></h3>
			<p>'.$body.'</p>
		</div>
	
		<div class="clear"></div>
	';
}

/*echo '
	</div>
	<!--         LEFT COLUMN             -->
	<!--/////////////////////////////////-->
';*/

mysql_close($connection);
?>