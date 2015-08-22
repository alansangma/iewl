
<?php

$php_self = strtolower($_SERVER['PHP_SELF']);	 //	Where we at?

//////////////////////////////////
//	see init.php for $pages and $subArray arrays;

//$subCount = 0;

foreach ($pages as $pageName=>$url) {
 
	$anchorStyle = ((strpos($php_self, $url)) ? 'class="active"' : '');
	$anchorString = ((strpos($php_self, $url)) ? '' : 'href="'.$url.'"' );
//	$anchorString = ((strpos($php_self, $url)) ? 'class="current" href="'.$url.'"' : 'href="'.$url.'"' );
	//$listStyleString = (($pageName == 'services') ? ' class="drop_down" id="'.$subCount.'"' : '');
 	$pageNameTitle = $pageName;
	echo "
	<li><a title=\"{$pageNameTitle}\" {$anchorStyle} {$anchorString}>{$pageNameTitle}</a></li>
	";
	
	if($pageName != 'contact') echo '
	<li>|</li>
	';
}


?>