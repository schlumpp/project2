<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭师大教务处</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["username"]))
	unset($_SESSION["username"]);
if(isset($_SESSION["stu_id"]))
	unset($_SESSION["stu_id"]);

echo "<script type='text/javascript'>alert('退出成功！');location='login.php';</script>";

?>
</body>
</html>