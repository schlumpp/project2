<?php
header('Content-Type:image/png');
$im = imagecreatefrompng('C:\wamp\www\basic\pic.png');
imagepng($im);
imagedestroy($im);
?>