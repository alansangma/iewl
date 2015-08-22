#!/usr/local/bin/php -q
<?php

#	update tumblr table

$user = /*isset($_GET['user']) ? $_GET['user'] :*/ 'inlandempireweightloss';


require_once('../include/config.php');

$dbuser = 'cknopke_iewlcms';
$dbpassword = 'yukQtrGX7vyiEh9';


$connection = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $connection);


$api_key = 'Nio40wvduPStmEh2JtvmcKEOt8cLNdWhtha4n2lJTuybviLljb';
//$user = $blog == 'office_news' ? 'makehello' : 'inlandempireweightloss';

//'http://api.tumblr.com/v2/blog/'.$uname.'.tumblr.com/posts/?api_key='.$key

$request = 'http://api.tumblr.com/v2/blog/'.$user.'.tumblr.com/posts/text?api_key='.$api_key.'&format=text';



#Get Tumblr JSON
$ci = curl_init($request);
curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
$input = curl_exec($ci);

#Puts JSON into Array
$result = json_decode($input,true);

if ($result['meta']['msg'] == 'OK'){
	
	#Process JSON Array
	$items = $result['response']['posts'];
	$pCount = $result['response']['blog']['posts'];
	
	
	
	$query = "INSERT INTO temp_tumblr_".$user." (tumblr_id, title, body, timestamp, post_url) VALUES";
	
	$count = 0;
	
	foreach($items as $item) {
		$tumblr_id = intval($item['id']);
		$title = rawurlencode($item['title']);
		$body = rawurlencode($item['body']);
		$timestamp = $item['timestamp'];
		$post_url = $item['post_url'];
		
		if($count > 0 ) $query .= ",";
		
		$query .= "('$tumblr_id', '$title', '$body', '$timestamp', '$post_url')";
		
		$count++;
		/*
		echo '
		<h4>'.$title.'</h4>
		<p>'.date('g:ia',$timestamp).'</p>
		<p>'.is_int($tumblr_id).'</p>
		';*/
	}
	
	$query .= ";";
	
							//////////////////////////////////
	if(createTempTable($user)) {		//	CREATE TABLE CALL (see below)
		$result = mysql_query($query) or die('failed to INSERT into temp_tumblr_'.$user.' : '.mysql_error());
		if($result) {
			///////////////////////////////////
			//		DROP OLD DATA TABLE
			$query = "DROP TABLE IF EXISTS tumblr_".$user.";";
			$result = mysql_query($query) or die('failed to DROP tumblr_'.$user.': '. mysql_error());
			
			///////////////////////////////////
			//		RENAME TEMP TABLE
			$query = "RENAME TABLE temp_tumblr_".$user." TO tumblr_".$user.";";
			$result = mysql_query($query) or die('failed to RENAME temp_tumblr_'.$user.' TO tumblr_'.$user.': '. mysql_error());
		}
	}
	
} else {
	echo $result['meta']['msg'];
}





///////////////////////////////////////////
//		CREATE TEMP TABLE
function createTempTable($user) {
	$query = "DROP TABLE IF EXISTS temp_tumblr_".$user.";";
	$result = mysql_query($query) or die('failed to DROP temp_tumblr_'.$user.': '. mysql_error());
	
	$query = "CREATE TABLE temp_tumblr_".$user."(
			id SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			tumblr_id BIGINT,
			title TINYTEXT,
			body MEDIUMTEXT,
			timestamp TINYTEXT,
			post_url MEDIUMTEXT
			);";
	
	$result = mysql_query($query) or die('failed to create temp_tumblr_'.$user.': '. mysql_error());
	
	return $result;
}
//		CREATE TEMP TABLE
///////////////////////////////////////////


mysql_close($connection);

///////////////////////////////////////////
//		- PARSE RESULT
//		- INSERT INTO TEMP TABLE
echo '<p>Script was run using this user:<br />'. $user.'</p>';

/*
$to = 'alansangma@me.com';
$body = '
saveTumblr.php was run.
USER: '.$user.'

-IEWL
';

$mail_sent = mail($to, 'The IEWL Website ran the saveTumblr script.', $body);*/

?>