
<?php
if(!$is_ie7) {
	if(!$is_footer) {
		echo '
		<div class="grid_8 omega">
			<div id="navigation_wrapper">
				<ul class="navigation">
	';
	} else {
		$width = !$is_ie ? '505px' : '560px';
		echo '
		<div class="clear"></div>
		<div id="footer_wrapper">
			<div id="navigation_wrapper" style="width:'.$width.'; margin:100px auto 20px;">
				<ul class="navigation" style="float:none;">
	';
	}
				
	
	
	//////////////////////////////////
	//	see init.php for $pages and $subArray arrays;
	
	
	$subCount = 1;
	foreach ($pages as $pageName=>$url) {
	 
		$anchorClass = ((strpos($php_self, $url) && !$is_footer) ? 'current' : 'not_current');
		$anchorClass = (array_key_exists($pageName, $sub_navs) && !$is_footer) ? $anchorClass.' sub_nav_anchor' : $anchorClass;
		
		$anchorString = ((strpos($php_self, $url)) ? '' : 'href="'.$url.'"' );
		$id_for_sub = str_replace(' ', '_', $pageName);
			
		echo "\n\t\t\t<li><a class=\"{$anchorClass}\" {$anchorString} rel=\"{$id_for_sub}\">".strtoupper($pageName)."</a>";
			
		if(array_key_exists($pageName, $sub_navs)) {	
			 
			echo '
					<ul id="'.$id_for_sub.'" class="drop_down">';
			
			$subArray = $sub_navs[$pageName];
			
			foreach($subArray as $subName=>$subLink) {
				echo '
						<li><a href="'.$url.'#'.$subLink.'">'.$subName.'</a></li>';
			}
			
			echo "
					</ul>
				";
			
			$subCount++;
		}
		
		echo "</li>";
	}
		echo '
				</ul>
			</div>
		</div>
		   ';
	
	
	if($is_footer) {?>
		<div class="clear tall_10"></div>
		
		<div class="social_links">
			<ul>
				<li><a href="http://www.facebook.com/pages/Inland-Empire-Weight-Loss/151698548219925" title="Like Inland Empire Weight Loss on Facebook" target="_blank" class="facebook">Like us on Facebook!</a></li>
				<li><a href="http://twitter.com/#!/InEmpWeightLoss" title="Follow us on Twitter!" class="twitter" target="_blank">Follow us on Twitter!</a></li>
				<li style="margin-right:0;"><a href="https://www.tumblr.com/follow/inlandempireweightloss" title="Follow us on Tumblr!" class="tumblr" target="_blank">Follow us on Tumblr!</a></li>
			</ul>
		</div>
	<?php
	}
	

} else {
	$style = !$is_footer ? 'style="position:absolute; right:0px; top:7px;"' : 'style="width:600px; margin:40px auto;"';
	$class = !$is_footer ? 'grid_8 omega' : 'grid_12';
	echo '
		<div class="'.$class.'">
			<table class="navigation_table" '.$style.'>
				<tbody>
					<tr class="navigation_tr">
		';
		
			foreach($pages as $pageName=>$url) {
				echo '
						<td class="navigation_td" style="padding:0 0 0 30px;">
							<a href="'.$url.'" title="'.strtoupper($pageName).'">'.strtoupper($pageName).'</a>
						</td>
				';	
			}
		
	echo '
					</tr>
				</tbody>
			</table>
		</div>
	';
		
}
?>
            