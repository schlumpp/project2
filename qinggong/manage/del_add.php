<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("config.php");
include("conn.php");
$sno = $_POST["sno"];
$sname = $_POST["sname"];
$sclass =  $_POST["sclass"];
$pwd = substr($sno,4,6);
$sql="insert into student(stu_num,stu_password,stu_college,stu_name,stu_class) values('".$sno."','".$pwd."','护理学院','".$sname."','".$sclass."')";
	   $rs = mysql_query($sql);

		if($rs)
		{
		print("<script>");
		print ("alert('添加成功');");
		print("history.go(-1)");
		print("</script>");
			
			
			}
			else
		{
		
		print("<script>");
		print ("alert('添加失败');");
		print("history.go(-1)");
		print("</script>");	
		
		
		}
		
		
		
		







?>






</body>
</html>