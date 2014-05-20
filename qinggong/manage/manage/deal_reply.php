<?php
/*******************************************************
*陈敏清
*处理留言回复
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言回复</title>
</head>

<body>
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	session_start();
	$reply=$_POST["content1"];
	$time=date('Y-m-d H:i:s');
	
	//echo $time;
	$manage=$_SESSION["admin_id"];
	//echo $manage;
	$sql="update note set note_reply='".$reply."', note_replydate='".$time."',admin_id='".$manage."' where note_id =".$_SESSION["nid"]."";
	$rs=mysql_query($sql);
	if($rs){
		  print"<script>"; 
		  print"alert('回复成功');"; 		  
  		  print("setTimeout('window.location=\"note.php\"',1000);");
 	 	  print"</script>";
			
		}
		else
		print $sql;
?>
</body>
</html>