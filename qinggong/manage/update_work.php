<?php
/*******************************************************
*陈敏清
*添加公告处理页面
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加公告</title>
</head>
<body>
<?php
	include("config.php");
	include("conn.php"); 
	error_reporting(0);
	session_start();
	//获取更新后的工作岗位的信息，内容和发布者，并将内容添加到数据库中
	$publisher=$_SESSION["admin"];
	$name=$_POST["workname"];
	$content =$_POST["content1"];
	$time =date("Y-m-d");
	$endtime=$_POST["gdowntime"];
	$class=$_POST["classify"];
	$sid=$_SESSION["work_id"];
	echo"$time";
	if($content==null || $name == null || $class==null || $endtime==null)
	{
		print("<script>");
		print("setTimeout('window.location=\"addwork.php\"',2000);");
		print("</script>");
	}
	else{
		if($time <= $endtime)
		{
			print("<script>");
			print ("alert('您选择的截至日期时间有错')");
			print("</script>");
			print("<script>");
			print("setTimeout('window.location=\"addwork.php\"',0);");
			print("</script>");
			}
			else
			{
		//判断活动的类型，用数字将活动的类型那个进行添加到表中，以致后面识别的到
		if($class=="院内岗")
			$cs=1;
		else if($class=="校内岗")
			$cs=2;
		else
			$cs=3;
		$sql="update work set work_name='".$name."', work_classify='".$cs."', work_content='".$content."', work_publish='".$time."', work_endtime='".$endtime."', work_admin='".$publisher."' where work_id='".$sid."'";
	mysql_query($sql);
		print("<script>");
		print ("alert('修改成功')");
		print("</script>");
		print("<script>");
		print("setTimeout('window.location=\"show_work.php\"',0);");
		print("</script>");
	}}
?>
</body>
</html>