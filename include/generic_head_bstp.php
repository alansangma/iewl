<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<!-- <meta name="viewport" content="width=device-width" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="Kewords" content="Inland Empire, Weight Loss, Family Medicine, Riverside, CA, Carl Knopke, Lesley Laird"/>
<meta name="description" content="We use a comprehensive medical weight loss program to help you achieve and maintain a healthy weight and lifestyle.  Our medically supervised program combines a nutritionally complete diet with exercise and behavioral counseling.  We want you to lose weight safely and establish healthy eating and exercise habits for life. Additionally, our Riverside office is a full service Family Medicine clinic where we provide a broad range of services to pediatric, adult, and geriatric populations." />
<meta name="author" content="makeHELO, Inc." />
<meta name="copyright" content="<?php echo date('Y'); ?>" />
<!--////////////////////////////////////////////////////////////-->
<!--                         STYLE                              -->
<link rel="stylesheet" type="text/css" href="<?php echo $relative_path;?>css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $relative_path;?>css/text.css" />
<!-- <link rel="stylesheet" type="text/css" href="<?php echo $relative_path;?>css/960.css" /> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

<link rel="stylesheet" type="text/css" href="<?php echo $relative_path;?>css/screen.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $relative_path;?>css/style-bstp.css" />

<!--                         STYLE                              -->
<!--////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////////////////////////-->
<!--                         SCRIPTS                            -->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo $relative_path;?>scripts/sub_navs.js"></script>
<?php /*if($is_home) echo '<script type="text/javascript" language="javascript" src="<?php echo $relative_path;?>scripts/jquery.cycle.all.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $relative_path;?>scripts/home_slides.js"></script>';
if(strpos($php_self, 'tools.php') || strpos($php_self, 'people.php') || strpos($php_self, 'news.php')) echo '<script type="text/javascript" language="javascript" src="<?php echo $relative_path;?>scripts/ajax_content.js"></script>
';
if(strpos($php_self, 'weight-loss.php')) echo '<script type="text/javascript" language="javascript" src="<?php echo $relative_path;?>scripts/row_height.js"></script>';*/
?>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	//$(document).pngFix();
	bindSubNavs();
	<?php
	/*if($is_home) echo '
	initHomeSlides();
';*/
/*
	if(strpos($php_self, 'tools.php') || strpos($php_self, 'people.php') || strpos($php_self, 'news.php')) {
		$ary = array();
		if(strpos($php_self, 'tools.php')) {
			$ary = $tools;
		} else if (strpos($php_self, 'people.php')) {
			$ary = $people;
		} else if (strpos($php_self, 'news.php')) {
			$ary = $news;
		}

		$ary_str = '';
		$i = 1;

		foreach($ary as $name=>$path){
			$ary_str.= '\''.$path.'\'';
			if($i < count($ary)) $ary_str.= ',';
			$i++;
		}
		echo "initAjaxContent([".$ary_str."], '".$is_ie7."');
";
	}*/

	/*if(strpos($php_self, 'weight-loss.php')) echo '
	evenRowHeight();
	';*/

	?>

	var footer_nav = $('#footer_wrapper > .navigation_wrapper');
	var w = $('#footer_wrapper > .navigation_wrapper > ul.navigation').outerWidth(true);
	var add_w = <?php if($is_firefox) echo '10'; else echo '0' ?>;
	//alert(h);
	$(footer_nav).hide();
	$(footer_nav).width(w+add_w);
	$(footer_nav).fadeIn('fast');
});
</script>
<!--                         SCRIPTS                            -->
<!--////////////////////////////////////////////////////////////-->
<title>Inland Empire Weight Loss : <?php echo $page_title;?></title>
</head>
