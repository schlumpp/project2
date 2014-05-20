<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin_pwdCheck</title>
</head>

<body>
<?php error_reporting(0);
 session_start();
 include("connect.php");
 $admin_pwd=$_REQUEST['admin_pwd'];
 //echo "$admin_pwd";
 $sql="select * from admin";
 $rs=mysql_query($sql);
 $row=mysql_fetch_array($rs);
 if(trim($row['admin_pwd'])!=$admin_pwd)//并利用trim()函数来去除空格，既空格无效.对提交的密码与数据库读取的密码进行比较
 { 
 	$_SESSION['pwd']=false;
	 print "<div style='color:red; '>密码不正确</div>";
 }
 else
 {
	 $_SESSION['pwd']=true;
	  //print 2;
	   print "<div style='color:blue; '>密码正确</div>";
 }
?>
</body>
</html>