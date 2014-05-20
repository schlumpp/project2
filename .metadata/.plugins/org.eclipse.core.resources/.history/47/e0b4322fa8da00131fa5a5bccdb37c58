<?php
$host="localhost";
$db_user="root";
$db_pass="1122";
$db_name="database";
$timezone="Asia/Shanghai";
//用$link句柄连接数据库
$link=mysql_connect($host,$db_user,$db_pass);
//数据库执行
mysql_select_db($db_name,$link);
//设置数据库的字符集为utf8
mysql_query("SET names UTF8");
//将网页字符集设置成utf8
header("Content-Type: text/html; charset=utf-8");
//设置默认时区为北京
date_default_timezone_set($timezone);

?>