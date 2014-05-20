<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>退出页面</title>
</head>

<body>
<?php 
		    session_start();
			include("config.php");
include("conn.php");
if(isset($_SESSION["admin"]))
{
	  error_reporting(0);
 session_destroy();
  print("<script>");
	  print ("alert('退出成功！点击确定返回')");
	  print("</script>");
     print("<script>");
	 print("setTimeout('window.location=\"index.php\"',0);");
	 print("</script>");

}
?> 
</body>
</html>