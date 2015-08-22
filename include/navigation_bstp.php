
<?php
		
				
	if(!$is_footer) {
	
	//////////////////////////////////
	//	see init.php for $pages and $subArray arrays;
	
	
	$subCount = 1;
	foreach ($pages as $pageName=>$url) {
	 
		$activeClass = ((strpos($php_self, $url) && !$is_footer) ? 'active' : '');
		//$dropdownCount = 0;
		
		$anchorString = ((strpos($php_self, $url)) ? '' : $url );
		
		if((array_key_exists($pageName, $sub_navs) && !$is_footer)) {
			echo '<li class="dropdown">';
				echo '<a href="'.$anchorString.'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.strtoupper($pageName).' <span class="caret"></span></a>';
				echo '<ul class="dropdown-menu">';
			$subArray = $sub_navs[$pageName];
			foreach($subArray as $subName=>$subLink) {
				echo '
						<li><a href="'.$url.'#'.$subLink.'">'.strtoupper($subName).'</a></li>';
			}
			echo '</ul>';
			$dropdownCount++;
		} else {
			echo '<li class="'.$activeClass.'"><a href="'.$anchorString.'">'.strtoupper($pageName).'</a>';
		}

		echo '</li>';
			
	}

	} else {?>
		<div class="tall_40"></div>
		<footer class="footer">
			<div class="container">
				<p class="text-muted">&copy;<?php echo date('Y'); ?> Inland Empire Weightloss, all rights reserved.</p>
				<div class="social_links">
					<ul>
						<li><a href="http://www.facebook.com/pages/Inland-Empire-Weight-Loss/151698548219925" title="Like Inland Empire Weight Loss on Facebook" target="_blank" class="facebook">Like us on Facebook!</a></li>
						<li><a href="http://twitter.com/#!/InEmpWeightLoss" title="Follow us on Twitter!" class="twitter" target="_blank">Follow us on Twitter!</a></li>
						<li style="margin-right:0;"><a href="http://inlandempireweightloss.tumblr.com" title="Follow us on Tumblr!" class="tumblr" target="_blank">Follow us on Tumblr!</a></li>
					</ul>
				</div>
					</div>
		</footer>
	<?php
	}
	
	
?>
            