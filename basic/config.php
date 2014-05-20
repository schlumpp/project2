<?php
header('Content-Type:text/html;charset=utf-8');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','1122');
define('DB_NAME','schoo');
$conn = @mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die('数据库连接失败,错误信息：'.mysql_error());
mysql_select_db(DB_NAME,$conn)or die('表错误：错误信息：'.mysql_error());
mysql_query('SET NAMES UTF8') or die('字符集设置错误'.mysql_error());
?>