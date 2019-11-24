<?php
header('Content-type: image/png');

$im = imagecreate(210, 80);

$bg = imagecolorallocate($im, 0, 255, 0); //färgar till bakgrounden
$textcolor = imagecolorallocate($im, 255, 0, 0); // färgar till texten

date_default_timezone_set('Europe/Stockholm'); 
imagestring($im, 6, 60, 25, date('H:i:s'), $textcolor);

imagepng($im);
imagedestroy($im);
?>