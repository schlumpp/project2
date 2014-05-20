<?php
/*******************************************************
*陈敏清
*删除岗位招聘
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除公告</title>
</head>

<body>
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	/*if(!isset($_SESSION["admin"]))
 {
	 print("<script>");
	 print("setTimeout('window.location=\"admin.php\"',0);");
	 print("</script>");
 }
  else
 {*/
    $sid=$_GET["sid"];
	$sql="delete from work where work_id='".$sid."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	print("<script>");
	print ("alert('删除成功')");
	print("</script>");
	print("<script>");
	print("setTimeout('window.location=\"show_work.php\"',0);");
	print("</script>");
	
?>
</body>
</html>