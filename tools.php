<?php
include_once('./include/init.php');
include_once('./include/generic_head_bstp.php');
?>

<body>
	<?php
	include_once('./include/generic_page_top_bstp.php');
	?>
	<div class="container" id="main-container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="iewl-page-header">Tools</h2>
			</div>
		</div>

		<div class="row">
			<!-- //////////// -->
			<!-- 	TAB NAV	 -->
			<ul id="tabs" class="nav nav-tabs nav-justified hidden-xs" data-tabs="tabs">
				<li id="bmi-nav">
					<a class="tab-nav-link" href="#bmi-content" data-toggle="tab">BMI</a>
				</li>
				<li id="ideal-weight-nav">
					<a class="tab-nav-link" href="#ideal-weight-content" data-toggle="tab">Ideal Weight</a>
				</li>
				<li id="waist-hip-ratio-nav">
					<a class="tab-nav-link" href="#waist-hip-ratio-content" data-toggle="tab">Waist/Hip Ratio</a>
				</li>
				<li id="body-fat-nav">
					<a class="tab-nav-link" href="#body-fat-content" data-toggle="tab">Body Fat</a>
				</li>
			</ul>
			<!-- 	TAB NAV	 -->
			<!-- //////////// -->

			<div class="clear tall_40 hidden-xs"></div>

			<div class="tab-content">
				<div class="tab-pane" id="bmi-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">BMI <i class="fa fa-caret-down"></i></h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
					<?php include('tabbed-content/bmi-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="ideal-weight-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">Ideal Weight <i class="fa fa-caret-down"></i></h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
						<?php include('tabbed-content/ideal-weight-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="waist-hip-ratio-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">Waist/Hip Ratio <i class="fa fa-caret-down"></i></h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
					<?php include('tabbed-content/waist-hip-ratio-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="body-fat-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">Body Fat <i class="fa fa-caret-down"></i></h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
						<?php include('tabbed-content/body-fat-content.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Google Code for Tools Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 988072025;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "QqU8CN_F3QMQ2ZCT1wM";
var google_conversion_value = 0;
if (0.25) {
  google_conversion_value = 0.25;
}
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/988072025/?value=0.25&amp;label=QqU8CN_F3QMQ2ZCT1wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- End Google Code for Tools Conversion -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
<script src="scripts/tools.js"></script>
<script src="scripts/nav-tabs.js"></script>
<script>
	jQuery(document).ready(function($) {
		initTabs('bmi');
	});
</script>
</body>
</html>