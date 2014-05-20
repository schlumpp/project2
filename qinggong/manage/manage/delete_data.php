<?php
/*******************************************************
*陈敏清
*删除资料
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除留言</title>
</head>

<body>
<?php
		error_reporting(0);
		session_start();
		include("config.php");
		include("conn.php");
		//删除留言信息
		$sid=$_GET["sid"];
		$sql="select * from data where da_id='".$sid."'";
		$rs=mysql_query($sql);
		$row=mysql_fetch_array($rs);
		$path=$row["da_name"];
		unlink($path);
		$sql="delete from data where da_id='".$sid."'";
		mysql_query($sql);
		print("<script>");
		print ("alert('删除成功')");
		print("</script>");
		print("<script>");
		print("history.go(-1)");
		print("</script>");
?>
</body>
</html>