<?php
/*
 $fp = fopen('file.txt','w');
$outstring = 'PP is an idiot!';
fwrite($fp,$outstring,strlen($outstring));
file_put_contents('file.txt', "PP is an idiot.");
 */
$fp = fopen('file.txt', 'r');
$dir = opendir('C:\wamp\www\basic');
//echo fgetc($fp);
echo "<br/>";
//echo fgets($fp);//可以识别html
//echo fgetss($fp);//可以过滤html
//fread()从文件指针开始读取n个
//echo fread($fp,10);
//fpassthru($fp); //剩余个数
//readfile('file.txt');//返回值为整数,输出全部文件内容
//echo file_get_contents('file.txt');
//while(!(feof($fp)))//feof()测试指针是否到末尾
//{
	//echo fgetc($fp);
//}

//if(file_exists('file.txt'))
//{
	//echo '文件存在';
//}
//else 
//{
//echo '文件不存在';
//}

//unlink('demo.php');//删除文件
//rewind--倒回文件指针的位置
//ftell--返回文件指针读/写的位置
//fseek--在文件指针中定位

while($file = readdir($dir))
{
	echo $file.'<br/>';
	
}
?>