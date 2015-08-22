<?php

	require('./dbconnect.php');
	$link = mysql_connect($dbhost, $dbuser, $dbpw) or die('Could not connect to database.');
	mysql_select_db($db) or die('Could not select database.');
	$query = "SELECT recognition, signature FROM recognition WHERE visible = 1 ORDER BY ordering";
	$result = mysql_query($query) or die('Error with the query.');
	mysql_close($link);
	
	include('include/init.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--

Copyright 2008 Maple Table

Site Design/Development by:
Maple Table
hello/at/mapletable/dot/net

-->

<head>
<?php
include('include/html_head.php');
?>
</head>
<body>
<?php
include('include/page_head.php');
?>
	<div class="content_wrapper">
        <div class="content_spacer_ieFix"></div>
        <div id="content">
<!--START CONTENT AREA-->
			<?php
			
				while ($row = mysql_fetch_row($result)) {
					echo "<h2 class=\"signature\">\n";
					echo nl2br($row[1])."\n";
					echo "</h2>";
					echo "<p>\n";
					//echo "$row[1]\n";
					echo nl2br($row[0])."\n";
					echo "</p>";
					echo "<div class=\"divider\"></div>\n";
				}
			?>
        </div>
        <div class="content_right"></div>
    </div>
    <div class="footer_holder">
<!--START FOOTER-->
    	<div class="footer_left">
        </div>
        <div class="footer">
            <ul>
<?php
include('include/footer_navigation.php');
?>
            </ul>
        </div>
        <p>&copy;<?php echo date('Y');?> Inland Empire Weight Loss</p>
    </div>
	<script type="text/javascript">
		var so = new SWFObject("flash/IEWL_slideshow.swf", "IEWL_Slideshow", "405", "245", "9", "#FFFFF");
		so.addParam("wmode", "transparent");
		so.addVariable("currentPage", "default1");
		so.write("slideshow");
	</script>
	<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    var pageTracker = _gat._getTracker("UA-2319276-11");
    pageTracker._initData();
    pageTracker._trackPageview();
    </script>
</body>
</html>