<?php
/*******************************************************
*陈敏清
*删除岗位工作
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
	//获取公告时间，标题，内容和发布者，并将内容添加到数据库中
	$publisher=$_SESSION["admin"];
	$name=$_POST["workname"];
	$content =$_POST["content1"];
	$time =date("Y-m-d");
	$endtime=$_POST["gdowntime"];
	$class=$_POST["classify"];
	echo"$name$content$time$endtime$class";
	if($content==null || $name == null || $class==null)
	{
		print("<script>");
		print("setTimeout('window.location=\"addwork.php\"',2000);");
		print("</script>");
	}
	else{
		if($class==1&$endtime==null)
		 {
			print("<script>");
			print ("alert('院内岗请填写招聘截至时间')");
			print("setTimeout('window.location=\"addwork.php\"',2000);");
			print("</script>");
	    }
		if($time >= $endtime)
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
		echo $cs;
	$sql="INSERT INTO work (work_name,work_classify,work_content,work_publish,work_endtime,work_admin)VALUES('".$name."','".$cs."','".$content."','".$time."','".$endtime."','".$publisher."')";
	mysql_query($sql);
		print("<script>");
		print ("alert('添加成功')");
		print("</script>");
		print("<script>");
		print("setTimeout('window.location=\"show_work.php\"',0);");
		print("</script>");
	}}
?>
</body>
</html>