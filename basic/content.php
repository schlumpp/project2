<?php
$path = 'C:\wamp\www\basic\demo3.php';
//echo 'path: '.basename($path); //返回文件名
//echo "<br/>";
//echo 'path: '.dirname($path);//返回目录
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
echo fileatime($path); //文件最后访问时间
echo "<br/>";
echo date("Y-m-d H:i:s",fileatime($path));
//echo filectime($path); //文件最后修改时间，权限所有修改
//echo filemtime($path); //文件最后修改时间，内容修改时间

?>