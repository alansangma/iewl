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
				<h2 class="iewl-page-header">Weight Loss</h2>
			</div>
		</div>

		<div class="row">
			<!-- //////////// -->
			<!-- 	TAB NAV	 -->
			<ul id="tabs" class="nav nav-tabs nav-justified hidden-xs" data-tabs="tabs">
				<li id="who-we-are-nav">
					<a class="tab-nav-link" href="#who-we-are-content" data-toggle="tab">Who We Are</a>
				</li>
				<li id="pediatric-weight-loss-nav">
					<a class="tab-nav-link" href="#pediatric-weight-loss-content" data-toggle="tab">Pediatric Weight Loss</a>
				</li>
				<li id="obesity-medicine-nav">
					<a class="tab-nav-link" href="#obesity-medicine-content" data-toggle="tab">Obesity Medicine</a>
				</li>
				<li id="forms-nav">
					<a class="tab-nav-link" href="#forms-content" data-toggle="tab">Forms</a>
				</li>
				<li id="corporate-program-nav">
					<a class="tab-nav-link" href="#corporate-program-content" data-toggle="tab">Corporate Program</a>
				</li>
				<li id="providers-nav">
					<a class="tab-nav-link" href="#providers-content" data-toggle="tab">For Providers</a>
				</li>
				<!-- <li id="problems-treated-nav">
					<a class="tab-nav-link" href="#problems-treated-content" data-toggle="tab">Problems Treated</a>
				</li> -->
			</ul>
			<!-- 	TAB NAV	 -->
			<!-- //////////// -->

			<div class="clear tall_40 hidden-xs"></div>

			<div class="tab-content">
				<div class="tab-pane" id="who-we-are-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">Who We Are </h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
					<?php include('tabbed-content/who-we-are-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="pediatric-weight-loss-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">Pediatric Weight Loss </h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
						<?php include('tabbed-content/pediatric-weight-loss-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="obesity-medicine-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">Obesity Medicine </h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
					<?php include('tabbed-content/obesity-medicine-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="forms-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">Forms </h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
						<?php include('tabbed-content/forms-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="corporate-program-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">Corporate Program </h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
						<?php include('tabbed-content/corporate-program-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="providers-content">
					<div class="row">
						<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
							<h2 class="show-xs-tabs">For Providers </h2>
						</div>
						<div class="clear tall_20 visible-xs"></div>
					</div>
					<div class="row">
						<?php include('tabbed-content/providers-content.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Google Code for WeightLossPage Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 988072025;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "BaUwCOfE3QMQ2ZCT1wM";
var google_conversion_value = 0;
if (0.35) {
  google_conversion_value = 0.35;
}
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/988072025/?value=0.35&amp;label=BaUwCOfE3QMQ2ZCT1wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- End Google Code for WeightLossPage Conversion -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
<!-- <script src="scripts/tools.js"></script> -->
<script src="scripts/nav-tabs.js"></script>
<script>
	jQuery(document).ready(function($) {
		initTabs('who-we-are');
	});
</script>
</body>
</html>