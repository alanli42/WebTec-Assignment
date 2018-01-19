<?php
// Create a 200 x 200 image
$canvas = imagecreatetruecolor(200, 200);

// Allocate colors
$red = imagecolorallocate($canvas, 255, 0, 0);
$white = imagecolorallocate($canvas, 255, 255, 255);
$green = imagecolorallocate($canvas, 0, 255, 0);

// Draw three rectangles each with its own color
imagerectangle($canvas, 193, 6, 6, 193, $red);
imagerectangle($canvas, 195, 4, 4, 195, $white);
imagerectangle($canvas, 197, 2, 2, 197, $green);

// Output and free from memory
header('Content-Type: image/jpeg');

imagejpeg($canvas);
imagedestroy($canvas);
?>