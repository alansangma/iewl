<?php
include_once('./include/init.php');

include_once('./include/generic_head.php');

?>

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

<body>
<div class="container_12">
<?php
include_once('./include/generic_page_top.php');

echo'
	<div class="grid_12">
     	<h2>People</h2>
     </div>
	<div class="clear tall_10"></div>
';

$ary = $people;

include_once('./include/tabbed_content_core.php');
?>



     <!--////////////////////////////////////////-->
     <!--               FOOTER                   -->
<?php 
$is_footer = true;
include('./include/navigation.php');

?>
     <!--               FOOTER                   -->
     <!--////////////////////////////////////////-->

</div>
</body>
</html>
<?php 
//mysql_close($connection);
?>