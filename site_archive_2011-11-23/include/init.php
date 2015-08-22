<?php
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
$ie = strpos($user_agent, 'msie');
$ie6 = (strpos($user_agent, 'msie 7') > 0 ? true : false);


$pages = array(
				'home'			=> 'index.php',
				'weight loss'		=> 'weight_loss.php',
				'family medicine'	=> 'family_medicine.php',
				'staff'			=> 'staff.php',
				'recognition'		=> 'recognition.php',
				'contact'			=> 'contact.php'
			);

$page_title_str="";

foreach ($pages as $pageName=>$url) {
	
	if(strpos($_SERVER['PHP_SELF'], $url)) $page_title_str = ucwords($pageName);
	if($page_title_str == 'Home') $page_title_str = 'Welcome';
}

//if($page_title_str == "Home") $page_title_str = "Welcome";

//if(!isset($is_homepage)) {
	
	$title = 'Inland Empire Weight Loss  : '.$page_title_str;
/*} else {
	$title = $random_title;
}*/
?>