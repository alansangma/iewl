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
				<h2 class="iewl-page-header">Problems Treated</h2>
			</div>
		</div>

		<div class="row">
			<!-- //////////// -->
			<!-- 	TAB NAV	 -->
			<style>
				.nav-tabs.nav-justified>li>a {
					min-height: 4.2em;
					padding-bottom: 0em;
					line-height: 1.2em;
				}
			</style>
			<ul id="tabs" class="nav nav-tabs nav-justified hidden-xs" data-tabs="tabs">
				<li id="diabetes-insulin-resistance-nav">
					<a class="tab-nav-link" href="#diabetes-insulin-resistance-content" data-toggle="tab">Diabetes Mellitus II / Insulin Resistance</a>
				</li>
				<li id="hypertension-nav">
					<a class="tab-nav-link" href="#hypertension-content" data-toggle="tab">Hypertension</a>
				</li>
				<li id="osteoarthritis-nav">
					<a class="tab-nav-link" href="#osteoarthritis-content" data-toggle="tab">Osteoarthritis</a>
				</li>
				<li id="pcos-nav">
					<a class="tab-nav-link" href="#pcos-content" data-toggle="tab">PCOS</a>
				</li>
				<li id="pre-post-operative-management-nav">
					<a class="tab-nav-link" href="#pre-post-operative-management-content" data-toggle="tab">Pre/Post Operative Management</a>
				</li>
				<li id="other-conditions-nav">
					<a class="tab-nav-link" href="#other-conditions-content" data-toggle="tab">Other Conditions</a>
				</li>
				<!-- 	 -->
			</ul>
			<!-- 	TAB NAV	 -->
			<!-- //////////// -->

			<div class="clear tall_40 hidden-xs"></div>

			<div class="tab-content">
				<div class="tab-pane" id="diabetes-insulin-resistance-content">
					<div class="col-md-12 text-center visible-xs">
						<h3>Diabetes</h3>
						<hr>
					</div>
					<div class="row">
					<?php include('tabbed-content/diabetes-insulin-resistance-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="hypertension-content">
					<div class="col-md-12 text-center visible-xs">
						<h3>Hypertension</h3>
						<hr>
					</div>
					<div class="row">
						<?php include('tabbed-content/hypertension-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="osteoarthritis-content">
					<div class="col-md-12 text-center visible-xs">
						<h3>Osteoarthritis</h3>
						<hr>
					</div>
					<div class="row">
					<?php include('tabbed-content/osteoarthritis-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="pcos-content">
					<div class="col-md-12 text-center visible-xs">
						<h3>PCOS</h3>
						<hr>
					</div>
					<div class="row">
					<?php include('tabbed-content/pcos-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="pre-post-operative-management-content">
					<div class="col-md-12 text-center visible-xs">
						<h3>Pre</h3>
						<hr>
					</div>
					<div class="row">
						<?php include('tabbed-content/pre-post-operative-management-content.php'); ?>
					</div>
				</div>
				<div class="tab-pane" id="other-conditions-content">
					<div class="col-md-12 text-center visible-xs">
						<h3>Other</h3>
						<hr>
					</div>
					<div class="row">
						<?php include('tabbed-content/other-conditions-content.php'); ?>
					</div>
				</div>
			</div>
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
		initTabs('diabetes-insulin-resistance');
	});
</script>
</body>
</html>