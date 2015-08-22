<?php
$user = isset($_GET['blog']) ? $_GET['blog'] : 'inlandempireweightloss';

$request = "SELECT title, body, post_url, timestamp FROM tumblr_".$user." ORDER BY timestamp DESC LIMIT 10;";
$result = mysql_query($request) or die('<h2>failed to SELECT from tumblr : </h2><p>'.mysql_error.'</p>');


while($obj = mysql_fetch_object($result)) {
	$title = rawurldecode($obj->title);
	$body = /*strip_tags(*/rawurldecode($obj->body);//);
//	$body = str_replace('<br/>', '<br /><br />', $body);
	$post_url = $obj->post_url;
	$date = date('F j, Y', $obj->timestamp);
	$time = date('g:ia', $obj->timestamp);
	
	echo '
	
		<div class="grid_3 alpha timestamp">
			<h4>'.$date.'<!--<br />'.$time.'--></h4>
		</div>
		<div class="grid_6 omega post rounded ds_2">
			<h3><a href="'.$post_url.'" title="View this article on Tumblr" target="_blank">'.$title.'</a></h3>
			<p>'.$body.'</p>
		</div>
	
		<div class="clear"></div>
	';
}

echo '
	</div>
	<!--         LEFT COLUMN             -->
	<!--/////////////////////////////////-->
';
?>