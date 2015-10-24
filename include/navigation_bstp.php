
<?php
		
				
	if(!$is_footer) {
	
	//////////////////////////////////
	//	see init.php for $pages and $subArray arrays;
	
	
	$subCount = 1;
	foreach ($pages as $pageName=>$url) {
	 
		$activeClass = ((strpos($php_self, $url)) ? 'active' : '');
		//$dropdownCount = 0;
		
		//$anchorString = ((strpos($php_self, $url)) ? '' : $relative_path.$url );
		$anchorString = $relative_path.$url;
		
		if((array_key_exists($pageName, $sub_navs) && !$is_footer)) {
			echo '<li class="dropdown">';
				echo '<a href="'.$anchorString.'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.strtoupper($pageName).' <span class="caret"></span></a>';
				echo '<ul class="dropdown-menu">';
			$subArray = $sub_navs[$pageName];
			foreach($subArray as $subName=>$subLink) {
				echo '
						<li><a href="'.$relative_path.$url.'#'.$subLink.'">'.strtoupper($subName).'</a></li>';
			}
			echo '</ul>';
			//$dropdownCount++;
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
				<?php 
				if(!$is_home || strpos($php_self, 'review')):
				?>
				<div class="social_links">
					<ul>
						<li><a href="http://www.facebook.com/pages/Inland-Empire-Weight-Loss/151698548219925" title="Like Inland Empire Weight Loss on Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i><br/><span class="hide-text">Like us on Facebook!</span></a></li>
						
						<li><a href="http://twitter.com/#!/InEmpWeightLoss" title="Follow us on Twitter!" target="_blank"><i class="fa fa-twitter fa-2x"></i><span class="hide-text">Follow us on Twitter!</span></a></li>
						
						<li><a href="https://instagram.com/InEmpWeightLoss/" title="Follow us on Instagram!" target="_blank"><i class="fa fa-instagram fa-2x"></i><span class="hide-text">Follow us on Instagram!</span></a></li>
						
						<li><a href="https://www.pinterest.com/InEmpWeightLoss/" title="Follow us on Pinterest!" target="_blank"><i class="fa fa-pinterest fa-2x"></i><span class="hide-text">Follow us on Pinterest!</span></a></li>
						<!-- <li><a href="http://inlandempireweightloss.tumblr.com" title="Follow us on Tumblr!" target="_blank"><i class="fa fa-tumblr fa-2x"></i><span class="hide-text">Follow us on Tumblr!</span></a></li> -->
					</ul>
				<?php endif; ?>
				</div>
					</div>
		</footer>
	<?php
	}
	
	
?>
            