<?php
//�����֤�������
//for($i = 0;$i < 4;$i++)
//{
	//$nmsg.=dechex(mt_rand(0,15));//dechexʮ����ת��Ϊʮ������
	
//}
header('Content-Type:image/png');
//����һ��ͼ������
$im = imagecreatetruecolor(75, 25);

//����������ɫ
$blue = imagecolorallocate($im, 0, 201, 255);
$white = imagecolorallocate($im, 255, 255, 255);
//���������ɫ
imagefill($im,0,0,$blue);
imagestring($im,5,0,0,'Hello!',$white);
//���
imagepng($im);
//����
imagedestroy($im);

?>
