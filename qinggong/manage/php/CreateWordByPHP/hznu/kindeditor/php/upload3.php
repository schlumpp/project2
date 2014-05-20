<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
 session_start();

  
  include("config.php");
  include("conn.php");
  date_default_timezone_set('Asia/Shanghai');
  $nowtime=date("Y-m-d H:i:s"); 
  
 $sql="insert into pic values(null,'".$_SESSION["picname"]."','".$nowtime."','".$_SESSION["picpath"]."')";
  $result=mysql_query($sql);
  //print $sql;

  if($result)
  {
    print("<script>");
    print("alert('上传成功！！');");
    print("window.location='uploadpic.php';");	
    print("</script>");	
  }
  else
  {
	print("<script>");
    print("alert('发布失败！！');");
    print("window.location='uploadpic.php';");
    print("</script>");	
	  
	  
	  }
      
  ?>
</body>
</html>
