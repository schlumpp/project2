<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin_nameCheck</title>
</head>

<body>
<?php
	error_reporting(0);
	session_start();
	include("connect.php");
	$admin_name=$_REQUEST['admin_name'];//获取参数（用户名）
	//echo "$admin_name";
	$sql="select * from user where username='".$admin_name."' ";
    $rs=mysql_query($sql);
    $row=mysql_fetch_array($rs);
	
	 if($row==null)//用户不存在
	 {  
	 	$_SESSION['user']=false;
 		 echo "<script>alert (用户名不存在！);</script>";
 	 }
	 else 
	 {
		$_SESSION['user']=true; 
		$_SESSION['admin_name']= $admin_name;
 	 }
?>
</body>
</html>