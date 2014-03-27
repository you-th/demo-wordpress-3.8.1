<?php
// Create a blank image and add some text
$im = imagecreatetruecolor(222, 99);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 77, 77,  'Hannun onki uuutta imaä', $text_color);

// Set the content type header - in this case image/jpeg
header('Content-Type: image/jpeg');
header("Access-Control-Allow-Origin: https://youthsie.com");
header("Access-Control-Max-Age: 3");


// Output the image
imagejpeg($im);

// Free up memory
imagedestroy($im);
?>
