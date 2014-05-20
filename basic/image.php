<?php
//随机验证码的生成
//for($i = 0;$i < 4;$i++)
//{
	//$nmsg.=dechex(mt_rand(0,15));//dechex十进制转换为十六进制
	
//}
header('Content-Type:image/png');
//创建一个图像区域
$im = imagecreatetruecolor(75, 25);

//设置区域颜色
$blue = imagecolorallocate($im, 0, 201, 255);
$white = imagecolorallocate($im, 255, 255, 255);
//填充区域颜色
imagefill($im,0,0,$blue);
imagestring($im,5,0,0,'Hello!',$white);
//输出
imagepng($im);
//销毁
imagedestroy($im);

?>
