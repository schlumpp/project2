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
//echo fgets($fp);//����ʶ��html
//echo fgetss($fp);//���Թ���html
//fread()���ļ�ָ�뿪ʼ��ȡn��
//echo fread($fp,10);
//fpassthru($fp); //ʣ�����
//readfile('file.txt');//����ֵΪ����,���ȫ���ļ�����
//echo file_get_contents('file.txt');
//while(!(feof($fp)))//feof()����ָ���Ƿ�ĩβ
//{
	//echo fgetc($fp);
//}

//if(file_exists('file.txt'))
//{
	//echo '�ļ�����';
//}
//else 
//{
//echo '�ļ�������';
//}

//unlink('demo.php');//ɾ���ļ�
//rewind--�����ļ�ָ���λ��
//ftell--�����ļ�ָ���/д��λ��
//fseek--���ļ�ָ���ж�λ

while($file = readdir($dir))
{
	echo $file.'<br/>';
	
}
?>