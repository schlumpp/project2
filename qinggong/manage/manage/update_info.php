<?php
/*******************************************************
*陈敏清
*更新网站基本信息
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更新网站信息</title>
</head>

<body>
<?php
session_start();
include("config.php");
include("conn.php");
$center_info=$_POST["content1"];
$type = $_POST["type"];
if($type == 1)
{
	$sql="update basic_info set depar_info ='".$center_info."'";
}
else
{
	$sql="update basic_info set center_info ='".$center_info."'";
}
$rs=mysql_query($sql);
if($rs)
{
		print("<script>");
		print ("alert('更新成功')");
		print("</script>");
		print("<script>");
		print("history.go(-1)");
		print("</script>");
}
else
{
		print("<script>");
		print ("alert('更新失败')");
		print("history.go(-1)");
		print("</script>");
	
	}


?>
</body>
</html>