<?php
$grid = !($ary == $news) ? 'grid_12' : 'grid_9';
//echo $grid;


if(!$is_ie7) {
	echo '
	<div class="'.$grid.'">
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
	</div>';
} else {
	echo '
	<div class="'.$grid.'">
		<table style="background:#e6f4fa; margin-bottom:0px;">
			<tbody>
				<tr>
	';
	foreach($ary as $name=>$hash) {
			//$current = strpos($php_self, $hash) ? 'class="current_ie7"' : '';
					echo'
					<td style="padding:2px 20px 5px; border-right:1px solid #fff;">
						<a href="#'.$hash.'" class="secondary_navigation_tab" style="font-size:14px;" >'.$name.'</a>
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



$style = !$is_ie7 ? '' : ' style="background:#e6f4fa; padding:20px; margin-bottom:20px;"';

echo '

<div class="'.$grid.' tabbed_content"'.$style.'>
	<div id="ajax_content">
	
	</div>
</div>
';
?>