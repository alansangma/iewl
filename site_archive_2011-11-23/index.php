<?php
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
            <h1 style="margin:0 0 40px 0;">...to the new you.</h1>
            <p style="font-size:17px;">
            We offer a physician supervised medical weight loss program to help you achieve your goals.  Our weight loss program uses a combination of high quality meal replacement products, appetite suppressants, exercise guidance and dietary management.</p>
            <p style="font-size:17px;">Our Riverside weight loss clinic has flexible scheduling with morning, noon, and early evening hours available for your convenience.</p>
            <p style="font-size:17px;">Contact us on our dedicated weight loss line at (951) 231-1363<br />
            or email us at <span id="writeme">drknopke.at.inlandempireweightloss.dot.com</span></p>
            <br />
            <br />
            <br />
            <p style="font-size:14px;">Member:  <a href="http://www.asbp.org/siterun_data/about_asbp/" title="ASBP page link" target="_blank">American Society of Bariatric Physicians</a></p>
            <p style="font-size:14px;">Member:  <a href="http://www.aafp.org/online/en/home.html" title="AAFP page link" target="_blank">American Academy of Family Physicians</a></p>
            <p style="font-size:14px;">Board Certified in Family Medicine:  <a href="https://www.theabfm.org/" title="ABFM page link" target="_blank">American Board of Family Medicine</a></p>
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