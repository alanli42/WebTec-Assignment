<?php

$pokemon_freqs = array(100, 200, 300, 200);

$hzt_axis_x = 25;
$hzt_axis_y = 500;
$width_of_bar = 50;
$in_between_bar_space = 10;

$start_of_bar = $hzt_axis_x;

// tell the browser this is a jpeg image
header('Content-Type: image/jpeg');

// create image with dimensions
$im = imagecreatetruecolor(400, 512);

// define the color white
$red = imagecolorallocate($im, 0,0,255);
$white = imagecolorallocate($im, 0,255,255);

// fill background white starting at x=0, y=0
imagefill($im, 0, 0, $white);

// draw a rectange for first frequency
// with x= 
foreach($pokemon_freqs as $freq) {
	$end_of_bar = $start_of_bar + $width_of_bar;

	imagefilledrectangle($im, 
						 $start_of_bar, 
						 $hzt_axis_y, 
						 $end_of_bar, 
						 $hzt_axis_y - $freq, $red);

	$start_of_bar = ($end_of_bar + $in_between_bar_space);
}
// send image and release resources
imagejpeg($im);
imagedestroy($im);

?>