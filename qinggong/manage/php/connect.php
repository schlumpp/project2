<?php
/*******************************************************
这个php用来连接数据库
author 陈烘
time  2013.4.12
-->
********************************************************
*/
?>


<?php
$host="localhost";
$db_user="root";
$db_pass="";
$db_name="nurse";
$timezone="Asia/Shanghai";

$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间
?>
