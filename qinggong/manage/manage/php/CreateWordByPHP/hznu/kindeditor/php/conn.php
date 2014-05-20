<?php
		$conn=mysql_connect($server,$admin,$adminpwd) or die("连接数据库失败！");
		$db=mysql_select_db($database) or die ("连接数据库失败！");
		$sql="SET NAMES UTF8";
		mysql_query($sql);
?>

