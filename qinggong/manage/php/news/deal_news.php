<?php
/*******************************************************
*陈敏清
*上传公告处理页面
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
	include("../config.php");
	include("../conn.php"); 
	error_reporting(0);
	//session_start();
	//获取公告时间，标题，内容和发布者，并将内容添加到数据库中
	//$publisher=$_SESSION["admin"];
	$publisher='1';
	$title=$_POST["title"];
	$news =$_POST["content1"];
	$time =date("Y-m-d h:i:s");
	$class=$_POST["class"];
	//echo"$class$title$news";
	if($news==null || $title == null || $class==null)
	{
		print("<script>");
		print("setTimeout('window.location=\"../../updatenews.php\"',2000);");
		print("</script>");
	}
	else{
		//判断活动的类型，用数字将活动的类型那个进行添加到表中，以致后面识别的到
		if($class=="新闻公告")
			$cs=1;
		else if($class=="活动策划")
			$cs=2;
		else if($class=="工作总结")
			$cs=3;
		else if($class=="心路勤工")
			$cs=4;			
		//echo $cs;
	$sql="INSERT INTO news (news_title,news_time,news_content,news_publish,class)VALUES('".$title."','".$time."','".$news."','".$publisher."',".$cs.")";
	//print $sql;
	if(mysql_query($sql)){
		
		print("<script>");
		print ("alert('添加成功')");
		print("</script>");
		print("<script>");
		print("setTimeout('window.location=\"../../shownews.php\"',0);");
		print("</script>");
	}
	else
	{
		print("<script>");
		print ("alert('添加失败')");
		print ("history.go(-1);");		
		print("</script>");
		
		}
	}
?>
</body>
</html>