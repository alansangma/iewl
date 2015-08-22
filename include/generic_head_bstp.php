<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<meta name="Kewords" content="Inland Empire, Weight Loss, Family Medicine, Riverside, CA, Carl Knopke, Lesley Laird"/>
<meta name="description" content="We use a comprehensive medical weight loss program to help you achieve and maintain a healthy weight and lifestyle.  Our medically supervised program combines a nutritionally complete diet with exercise and behavioral counseling.  We want you to lose weight safely and establish healthy eating and exercise habits for life. Additionally, our Riverside office is a full service Family Medicine clinic where we provide a broad range of services to pediatric, adult, and geriatric populations." />
<meta name="author" content="makeHELO, Inc." />
<meta name="copyright" content="<?php echo date('Y'); ?>" />
<!--////////////////////////////////////////////////////////////-->
<!--                         STYLE                              -->
<link rel="stylesheet" type="text/css" href="./css/reset.css" />
<link rel="stylesheet" type="text/css" href="./css/text.css" />
<!-- <link rel="stylesheet" type="text/css" href="./css/960.css" /> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="./css/screen.css" />
<style>
	h2, h3, h3 a, h4 {
		text-shadow: none;
	}
	.navbar-toggle {
		color: #308fbf;
		font-size: 20px;
		margin-bottom: 0;
		margin-top: 0;
	}
	.navbar {
		background:url(graphics/header-background.png) no-repeat -20% 20% #fff;
		min-height: 60px;
	}
	.navbar-brand {
		padding: 10px 10px 10px 20px;
	}
	#iewl-navbar-brand {
		max-width: 80%;
	}
	#iewl-navbar-brand img {
		max-width: 100%;
	}
	#iewl-navbar-collapse ul li {
		margin-top: 10px;
		margin-bottom: 0px;
	}
	.navbar-right {
		margin-right: 20px;
	}
	.nav>li>a {
		padding: 15px 10px;
	}
	ul.dropdown-menu li {
		margin-left: 0;
	}
	img {
		max-width: 100%;
	}

	#iewlCarousel {
		width:100%;
		height: auto;
	}
	.carousel-container {
		padding-left: 0;
		padding-right: 0;
	}
	.slide .iewl-carousel-caption h3 a {
		margin: 0;
		padding: 0;
		color:#000;
		font-size: 20px;
	}
	.slide .iewl-carousel-caption h3 a:hover {
		text-decoration: none;
	}
	.slide .iewl-carousel-caption a {
		padding: 5px 0 5px 0;
	}
	.carousel-inner img {
		width: 100%;
	}
	.iewl-carousel-caption {
		left:0;
		right:0;
		bottom:0;
		padding:10px 0 20px 0;
		background: rgba(255,255,255, 0.5);
		text-shadow: none;
	}
	ol.carousel-indicators {
		margin-bottom: 0;
		bottom: 0;
	}
	ol.carousel-indicators li {
		border:solid 1px #308fbf;
	}
	ol.carousel-indicators li.active {
		background: #308fbf;	
	}

	.iewl-certs img {
		max-width: 60%;
		margin:10px 0;
	}
	.iewl-social ul {
		margin: 10px 0;
	}
	.iewl-social ul li {
		display:inline-block;
	}

	@media (max-width: 1310px) {
		.navbar {
			margin-bottom: 5px;
		}
	}

	@media (max-width: 768px) {
		.navbar {
			background: none;
			margin-bottom: 0;
			/*min-height: 60px;*/
		}
		#iewl-navbar-brand {
			max-width: 80%;
		}
		.slide .iewl-carousel-caption {
			padding-bottom: 0;
		}
		.slide .iewl-carousel-caption h3 a {
			font-size: 18px;
		}
	}

/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

/*body > .container {
  padding: 60px 15px 0;
}*/
.container .text-muted {
  margin: 20px 0;
}

.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}

.footer > .container p {
	float: left;
}

.footer > .container > .social_links {
	float: right;
	margin:14px 0 0
}
.footer > .container > .social_links ul li {
	display:inline-block;
	margin:0 10px;
}

	.carousel-fade .carousel-inner .item {
	-webkit-transition-property: opacity;
	      transition-property: opacity;
	}
	.carousel-fade .carousel-inner .item,
	.carousel-fade .carousel-inner .active.left,
	.carousel-fade .carousel-inner .active.right {
	opacity: 0;
	}
	.carousel-fade .carousel-inner .active,
	.carousel-fade .carousel-inner .next.left,
	.carousel-fade .carousel-inner .prev.right {
	opacity: 1;
	}
	.carousel-fade .carousel-inner .next,
	.carousel-fade .carousel-inner .prev,
	.carousel-fade .carousel-inner .active.left,
	.carousel-fade .carousel-inner .active.right {
	left: 0;
	-webkit-transform: translate3d(0, 0, 0);
	      transform: translate3d(0, 0, 0);
	}
	.carousel-fade .carousel-control {
	z-index: 2;
	}
</style>
<!--                         STYLE                              -->
<!--////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////////////////////////-->
<!--                         SCRIPTS                            -->
<!-- <script type="text/javascript" language="javascript" src="./scripts/jquery-1.6.2.min.js"></script> -->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<!-- <script type="text/javascript" language="javascript" src="./scripts/jquery.pngFix.js"></script> -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" language="javascript" src="./scripts/sub_navs.js"></script>
<?php if($is_home) echo '<script type="text/javascript" language="javascript" src="./scripts/jquery.cycle.all.min.js"></script>
<script type="text/javascript" language="javascript" src="./scripts/home_slides.js"></script>';
if(strpos($php_self, 'tools.php') || strpos($php_self, 'people.php') || strpos($php_self, 'news.php')) echo '<script type="text/javascript" language="javascript" src="./scripts/ajax_content.js"></script>
';
if(strpos($php_self, 'weight-loss.php')) echo '<script type="text/javascript" language="javascript" src="./scripts/row_height.js"></script>';
?>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	//$(document).pngFix();
	bindSubNavs();
	<?php
	/*if($is_home) echo '
	initHomeSlides();
';*/

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
	}

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
