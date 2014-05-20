<?php
/*******************************************************
*陈敏清
*处理工作岗位招聘
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>岗位处理</title>
</head>
<body>
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	session_start();
	$sid = $_SESSION["work_id"];
	$checkbox = $_POST['checkbox'];
	$work_time=date('Y-m-d H:i:s',time());
	//获取checkbox的内容到数组当中
	for($i=0;$i<=count($checkbox);$i++) 

		{ 
		
		if(!is_null($checkbox[$i])) 
		
		{$chechvalue=$checkbox[$i];break;} 
		
		} 
		
		echo $chechvalue; 
	for($i=1;$i<=count($checkbox);$i++)
	{
		$sql="update recruitment set state=1, work_time='".$work_time."' where stu_id=".$chechvalue." and Rec_workid='".$sid."'";
		$sql0="update recruitment set state=2 where stu_id!=".$chechvalue." Rec_workid='".$sid."'";
	}
	$rs=mysql_query($sql);
	$rs=mysql_query($sql0);
		print("<script>");
		print ("alert('招聘成功')");
		print("</script>");
		print("<script>");
		print("history.go(-1)");
		print("</script>");
	
	?>
</body>
</html>