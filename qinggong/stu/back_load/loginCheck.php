<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>loginCheck</title>
</head>

<body>
<?php error_reporting(0);
 session_start();
 include("config.php");
 include("conn.php");
 $admin_name=$_REQUEST['admin_name'];
 $admin_pwd =$_REQUEST['admin_pwd'];
 $sql     ="select * from admin where admin_name='".$admin_name."'";
 $rs      =mysql_query($sql);
 $row     =mysql_fetch_array($rs); 
	  
	  
 if($_SESSION['user']==false)
 {
	print "<div style='color:#8ff8ea;'>用户名不正确</div>";
 }
 else
 {
 	 if($_SESSION['pwd']==false )
	 {
		 print"<div style='color:#8ff8ea; '>密码错误</div>";
	 }
	 else
	 {
		 
		  print"<script>"; 
  		  print("alert('登陆成功！');");
 	 	  print"</script>";
		  print"<script>"; 
  		  print("setTimeout('window.location=\"../../manage/index.html\"',1000);");
 	 	  print"</script>";
		 }
	
	 
   }

 ?>
</body>
</html>