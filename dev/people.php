<?php
include_once('./include/init.php');

include_once('./include/generic_head.php');

?>



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