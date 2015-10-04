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
				<h2 class="iewl-page-header">People</h2>
			</div>
		</div>
		<div class="row">
			<!-- <div class="col-md-12"> -->
				<!-- //////////// -->
				<!-- 	TAB NAV	 -->
				<ul id="tabs" class="nav nav-tabs nav-justified hidden-xs" data-tabs="tabs">
					<li id="staff-nav">
						<a class="tab-nav-link" href="#staff-content" data-toggle="tab">Staff</a>
					</li>
					<li id="recognition-nav">
						<a class="tab-nav-link" href="#recognition-content" data-toggle="tab">Recognition</a>
					</li>
					<li id="partners-nav">
						<a class="tab-nav-link" href="#partners-content" data-toggle="tab">Partners</a>
					</li>
					<li id="success-stories-nav">
						<a class="tab-nav-link" href="#success-stories-content" data-toggle="tab">Success Stories</a>
					</li>
				</ul>
				<!-- 	TAB NAV	 -->
				<!-- //////////// -->
				<div class="clear tall_40 hidden-xs"></div>
				<?php require_once('include/config.php'); ?>
				<div class="tab-content">
					<div class="tab-pane" id="staff-content">
						<div class="row">
							<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
								<h2 class="show-xs-tabs">Staff <i class="fa fa-caret-down"></i></h2>
							</div>
							<div class="clear tall_20 visible-xs"></div>
						</div>
						<div class="row">
							<?php include('tabbed-content/staff-content.php'); ?>
						</div>
					</div>
					<div class="tab-pane" id="recognition-content">
						<div class="row">
							<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
								<h2 class="show-xs-tabs">Recognition <i class="fa fa-caret-down"></i></h2>
							</div>
							<div class="clear tall_20 visible-xs"></div>
						</div>
						<div class="row">
							<?php include('tabbed-content/recognition-content.php'); ?>
						</div>
					</div>
					<div class="tab-pane" id="partners-content">
						<div class="row">
							<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
								<h2 class="show-xs-tabs">Partners <i class="fa fa-caret-down"></i></h2>
							</div>
							<div class="clear tall_20 visible-xs"></div>
						</div>
						<div class="row">
							<?php include('tabbed-content/partners-content.php'); ?>
						</div>
					</div>
					<div class="tab-pane" id="success-stories-content">
						<div class="row">
							<div class="col-xs-12 visible-xs show-xs-tabs-wrap">
								<h2 class="show-xs-tabs">Success Stories <i class="fa fa-caret-down"></i></h2>
							</div>
							<div class="clear tall_20 visible-xs"></div>
						</div>
						<div class="row">
							<?php include('tabbed-content/success-stories-content.php'); ?>
						</div>
					</div>
				</div>
			<!-- </div> -->
		</div>
	</div>
	<!--////////////////////////////////////////-->
	<!--               FOOTER                   -->
	<?php
	$is_footer = true;
	include('./include/navigation_bstp.php');
	?>
	<!--               FOOTER                   -->
	<!--////////////////////////////////////////-->
	<!-- Google Code for People Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 988072025;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "_lDJCNfG3QMQ2ZCT1wM";
	var google_conversion_value = 0;
	if (0.30) {
	google_conversion_value = 0.30;
	}
	/* ]]> */
	</script>
	<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/988072025/?value=0.30&amp;label=_lDJCNfG3QMQ2ZCT1wM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	<!-- End Google Code for People Conversion -->
	<script src="scripts/nav-tabs.js"></script>
	<script>
		jQuery(document).ready(function($) {
			initTabs('staff');
		});
	</script>
</body>
</html>
<?php
//mysql_close($connection);
?>