<?php
/*******************************************************
*陈敏清
*管理员登录处理页面
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>处理页面</title>
</head>
<body>
	<?php
	include("config.php");
	include("conn.php");
	//获取管理员的帐号和密码进行判断内容是否为空
	$name=$_POST["name"];
	$pwd=$_POST["pwd"];
	if($name=="" || $pwd=="")
	{
		print("<script>");
		print ("alert('帐号密码不为空')");
		print("</script>");
		print("<script>");
		print("history.go(-1)");
		print("</script>");
	}
	else
	{
	$sql="select * from admin where admin_name='".$name."' and admin_pwd='".$pwd."'";
    $rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if($row==null)
	{
		print("<script>");
		print ("alert('帐号密有问题')");
		print("</script>");
		print("<script>");
		print("history.go(-1)");
		print("</script>");
	}
	else
	{
		session_start();
	    $_SESSION["admin"]=$name;
		setcookie("admin",$name.time()+3600*20*30);
		print("<script>");
		print ("alert('登录成功')");
		print("</script>");
		print("<script>");
		print("setTimeout('window.location=\"manage.php\"',0);");
		print("</script>");
	}
}
?>
</body>
</html>