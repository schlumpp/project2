<?php
/*******************************************************
*陈敏清
*修改公告处理页面
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
	$title=$_POST["title"];
	$news =$_POST["content1"];
	$time =date("Y-m-d h:i:s");
	$class=$_POST["class"];
	$sid=$_SESSION["news_id"];
	echo $sid;
	if($news==null || $title == null || $class==null)
	{
		print("<script>");
		echo "内容不能为空";
		print("history.go(-1)");
		print("</script>");
	}
	else{
		//判断活动的类型，用数字将活动的类型那个进行添加到表中，以致后面识别的到
		if($class=="活动公告")
			$cs=1;
		else if($class=="新闻公告")
			$cs=2;
		else
			$cs=3;
		echo $cs;
	$sql="update news set news_title='".$title."', news_content='".$news."', news_publish='".$publisher."', class='".$cs."' where id='".$sid."'";
	mysql_query($sql);
		print("<script>");
		print ("alert('修改成功')");
		print("</script>");
		print("<script>");
		print("setTimeout('window.location=\"shownews.php\"',0);");
		print("</script>");
	}
?>
</body>
</html>