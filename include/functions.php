<?php

//function drawBar() {
/*$w = 4;
$h = 15;
$itc = imagecreatetruecolor($w, $h);
$color = imagecolorallocate($itc, 255, 255, 255);
$img = imagefilledrectangle($itc, 0, 0, $w, $h, $color);

header("Content-type: image/png");
imagepng($img);
	*/
//}



function detectUrls($str) {
	return preg_replace("#((http|https|ftp)://(\S*?\.\S*?))(\s|\;|\)|\]|\[|\{|\}|,|\"|'|:|\<|$|\.\s)#ie", "'<a href=\"$1\" target=\"_blank\">$3</a>$4'", $str);
}

?>