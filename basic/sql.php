<?php
require 'config.php';
$query = "insert into grade(id,name,email,point,regdate)values('56','圣培','neokid@ww.com',90,NOW())";
@mysql_query($query) or die('新增错误'.mysql_error());

mysql_close();
?>