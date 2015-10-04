<?php
require_once('./include/config.php');

$php_self = strtolower($_SERVER['PHP_SELF']);	 //	Where we at?
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);

$is_ie = (strpos($user_agent, 'msie') > 0 ? 1 : 0);
$is_ie7 = (strpos($user_agent, 'msie 7') > 0 ? 1 : 0);
$is_firefox = (strpos($user_agent, 'firefox') > 0 ? 1 : 0);

//echo '<!-- user_agent'. $user_agent . '-->';


$is_home = (strpos($php_self, 'index.php') > 0) ? 1 : 0;

$is_footer = false;

$pages = array(
				'home'				=> 'index.php',
				'weight loss'		=> 'weight-loss.php',
				'problems treated' 	=> 'problems-treated.php',
				'tools'				=> 'tools.php',
				'people'			=> 'people.php',
				//'news'			=> 'news.php',
				'contact'			=> 'contact.php'
			);
			
$tools = array (
				'bmi'				=> 'bmi',
				'ideal weight'		=> 'ideal-weight',
				'waist/hip ratio'	=> 'waist-hip-ratio',
				'body fat'			=> 'body-fat',
			);
			
$people = array (
				'staff'				=> 'staff',
				'recognition'		=> 'recognition',
				'partners'			=> 'partners',
				'success stories'	=> 'success-stories'
			);
$weightloss = array (
				'who we are'		=> 'who-we-are',
				'pediatric weight loss' => 'pediatric-weight-loss',
				'obesity medicine'	=> 'obesity-medicine',
				'forms'				=> 'forms',
				'corporate program' => 'corporate-program'
			);
			
// $news = array (
// 				'office news'		=> 'office-news',
// 				'weightloss news'	=> 'weightloss-news'
// 			);
	
$problems = array(
				'diabetes insulin resistance'	=> 'diabetes-insulin-resistance',
				'hypertension'		=> 'hypertension',
				'osteoarthritis'	=> 'osteoarthritis',
				'pcos'				=> 'pcos',
				'pre/post operative management'	=> 'pre-post-operative-management',
				'other conditions'	=> 'other-conditions'
				);



$sub_navs = array(
				'tools'				=> $tools,
				'people'			=> $people,
				'weight loss'		=> $weightloss,
				'problems treated'	=> $problems
				/*,
				'news'			=> $news*/
			);
			
$page_title = 'Welcome';
foreach($pages as $name=>$url) {
	if(!$is_home) {
		if(strpos($php_self, $url) > 0) $page_title = ucwords($name);
	}
}
			
?>