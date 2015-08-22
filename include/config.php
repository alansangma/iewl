<?php






//echo '**** '.$is_ie;

$maxFileSize = 1024000;
$nice_maxFileSize = $maxFileSize/1024000;


$maxWidth = 220;
$maxHeight = 150;
/*
$dbhost = "localhost";
$dbuser  = "root";
$dbpassword = "root";*/
	
	

//$dbhost = "inlandempireweightloss.com";


$dbhost = 'localhost';
$dbuser  = "cknopke_iewlusr";
//$dbpassword = "yukQtrGX7vyiEh9";
$dbpassword = "GsXIseZZmjX83Ji";

$dbdatabase = "cknopke_iewlcms";

if($_SERVER['SERVER_NAME'] == 'localhost') {
	$dbhost = "localhost";
	$dbuser  = "root";
	$dbpassword = "root";
}
?>