<?php


// tell the browser this is a jpeg image
header('Content-Type: image/jpeg');

// create our image with width 128 and height 128
$im = imagecreatetruecolor(400, 100);

// set the brush color to red
$text_color = imagecolorallocate($im, 255, 0, 0);

// draw a string of font-size 12 at x = 5 and y = 5
// using our red brush 
imagestring($im, 12, 5, 5,  "Here is your assignment list", $text_color);
imagestring($im, 12, 5, 25,  "1. Literature Review", $text_color);
imagestring($im, 12, 5, 45,  "2. Pilot Research", $text_color);




// convert and output as jpeg
imagejpeg($im);

// free the memory
imagedestroy($im);
?>