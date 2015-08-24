<?php
include_once('./include/init.php');
include_once('./include/generic_head_bstp.php');
?>
<body>
	<?php
	include_once('./include/generic_page_top_bstp.php');
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="iewl-page-header">News</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<!-- //////////// -->
				<!-- 	TAB NAV	 -->
				<ul id="tabs" class="nav nav-tabs nav-justified" data-tabs="tabs">
					<li id="office-news-nav">
						<a class="tab-nav-link" href="#office-news-content" data-toggle="tab">Office News</a>
					</li>
					<li id="weightloss-news-nav">
						<a class="tab-nav-link" href="#weightloss-news-content" data-toggle="tab">Weightloss News</a>
					</li>
				</ul>
				<!-- 	TAB NAV	 -->
				<!-- //////////// -->
				<?php
				require_once('include/config.php');
				//$connection = mysql_connect($dbhost, $dbuser, $dbpassword);
				//$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdatabase);
				//$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);
				//mysql_select_db($dbdatabase, $connection);
				
				?>
				<div class="tab-content">
					<div class="tab-pane" id="office-news-content">
						<div class="col-sm-12">
						<?php 
						//	ADD OFFICE NEWS CONTENT
						$user = 'officenewsatiewl';
						include('include/news-tab-content.php');
						?>
						</div>
					</div>
					<div class="tab-pane active" id="weightloss-news-content">
						<div class="col-sm-12">
						<?php
						//	ADD WEIGHTLOSS NEWS CONTENT
						$user = 'inlandempireweightloss';
						include('include/news-tab-content.php');
						?>
						</div>
					</div>

					<?php 
					//$mysqli->close();
					//mysql_close($connection);
					?>
				</div>
			</div>
			<div class="col-sm-3 col-md-offset-1">
				<div class="tumblr-link">
					<a class="tumblr-link-img" href="http://officenewsatiewl.tumblr.com" title="follow us on Tumblr" target="_blank"><img src="graphics/social/tumblr.png" alt="Office News"/></a>
					<a href="http://officenewsatiewl.tumblr.com" title="follow us on Tumblr" target="_blank">Office News</a>
				</div>
			<!-- </div>
			<div class="col-sm-2"> -->
				<div class="tumblr-link">
					<a class="tumblr-link-img" href="http://inlandempireweightloss.tumblr.com" title="follow us on Tumblr" target="_blank"><img src="graphics/social/tumblr.png" alt="Weight Loss News"/></a>
					<a href="http://inlandempireweightloss.tumblr.com" title="follow us on Tumblr" target="_blank">Weight Loss News</a>
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
	<!-- Google Code for News Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 988072025;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "YJaCCO_D3QMQ2ZCT1wM";
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
		<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/988072025/?value=0.25&amp;label=YJaCCO_D3QMQ2ZCT1wM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	<!-- End Google News Conversion Code -->


	
	<script>
	jQuery(document).ready(function($) {
		
		
		jQuery('.tab-nav-link').on('click', function(e){
			e.preventDefault();
			var new_hash = jQuery(this).attr('href');
			new_hash = new_hash.substr(0, new_hash.indexOf('-content'));
			window.location.hash = new_hash;

		});
		
		jQuery(window).on('hashchange', function(e){
			handleHash();
		});

		handleHash();
	});
	function handleHash() {
		var hash = window.location.hash.substr(1);
		hash = hash.length==0 ? 'office-news' : hash;
		
		jQuery('.active').removeClass('active');
		jQuery('#'+hash+'-nav').addClass('active');
		jQuery('#'+hash+'-content').addClass('active');
	}
</script>
</body>
</html>