<?php
$path = 'C:\wamp\www\basic\demo3.php';
//echo 'path: '.basename($path); //�����ļ���
//echo "<br/>";
//echo 'path: '.dirname($path);//����Ŀ¼
//echo "<br/>";
//$array_content = pathinfo($path);
//print_r($array_content);
//echo "<br/>";
//$path2 = '.../basic/demo2.php';
//echo realpath($path2);
//echo round(filesize($path)/1024,2).'KB';
//echo "<br/>";
//echo round(disk_free_space('C:')/(1024*1024),2).'GB';
date_default_timezone_set('Asia/Shanghai');
echo fileatime($path); //�ļ�������ʱ��
echo "<br/>";
echo date("Y-m-d H:i:s",fileatime($path));
//echo filectime($path); //�ļ�����޸�ʱ�䣬Ȩ�������޸�
//echo filemtime($path); //�ļ�����޸�ʱ�䣬�����޸�ʱ��

?>