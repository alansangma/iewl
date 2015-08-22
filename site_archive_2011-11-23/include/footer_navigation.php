
<?php

//////////////////////////////////
//	see init.php for $pages and $subArray arrays;

foreach ($pages as $pageName=>$url) {
 
	$anchorString = ((strpos($php_self, $url)) ? '' : 'href="'.$url.'"' );
	echo "
	<li><a title=\"{$pageName}\" {$anchorString}>{$pageName}</a></li>
	";
	
	if($pageName != 'contact') echo '
	<li>|</li>
	';
}


?>