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
     	<h2>News</h2>
     </div>
	<div class="clear tall_10"></div>
';

$ary = $news;
//$is_news = true;
include_once('./include/tabbed_content_core.php');

/*echo '
	<div class="grid_12">
		<ul id="secondary_navigation">
';



foreach($ary as $name=>$hash) {
	//$anchor_class = !strpos($php_self, $hash) ? '' : ' class="current"';
	$id = str_replace('%20', '_', $hash).'_tab';
	$name = str_replace('%20', ' ', $name);
	echo '
			<li><a href="#'.$hash.'" class="secondary_navigation_tab" id="'.$id.'">'.$name.'</a></li>
	';
}

echo '
		</ul>
	</div>

<div class="grid_9 tabbed_content" >
	<div id="ajax_content">
	
	</div>
	<div class="clear tall_20"></div>
</div>
';


*/
 

?>

	<div class="grid_2 push_1 omega right_column">
     	<?php if(!$is_ie7){?>
               <a class="tumblr_link" href="http://inlandempireweightloss.tumblr.com" title="follow us on Tumblr" target="_blank">Weight Loss News</a>
               <div class="clear"></div>
               <a class="tumblr_link" href="http://officenewsatiewl.tumblr.com" title="follow us on Tumblr" target="_blank">Office News</a>
		<?php } else{?>
          	<table>
               	<tbody>
                    	<tr>
                         	<td><a style="display:block;margin-bottom:20px;" class="tumblr_link" href="https://www.tumblr.com/follow/inlandempireweightloss" title="follow us on Tumblr" target="_blank">Follow<br/><span style="font-weight:bold;">Weight Loss News</span></a></td>
                         </tr>
                    	<tr>
                         	<td><a class="tumblr_link" href="https://www.tumblr.com/follow/officenewsatiewl" title="follow us on Tumblr" target="_blank">Follow<br/><span style="font-weight:bold;">Office News</span></a></td>
                         </tr>
                    </tbody>
               </table>
               
               
		<?php }?>
     </div>
     <div class="grid_9">
          
          <p><a href="http://inlandempireweightloss.tumblr.com" id="tumblr_news_link" title="more on our Tumblr blog" target="_blank">More posts on Tumblr &rarr;</a></p>
     </div>

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
