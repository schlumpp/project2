<?php
$conn=mysql_connect($server,$admin,$adminpwd) or die("can't connect!");
$db=mysql_select_db($database) or die("can't open database!");
$sql="SET   NAMES   utf8";
mysql_query($sql);
?>