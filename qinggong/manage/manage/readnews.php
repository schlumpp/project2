<?php
/*******************************************************
*陈敏清
*显示公告具体信息
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/manage.css" media="screen"/>
<title>公告信息</title>
</head>
<body>

<?php
	include("config.php");
	include("conn.php");
	$sid=$_GET["id"];
	$sql="select *from news where id='".$sid."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	switch($row["class"])
	{
		case 1:$cs="新闻公告";break;
		case 2:$cs="活动策划";break;
		case 3:$cs="工作总结";break;
		case 4:$cs="心路勤工";break;
	}
	echo"<center><h1>".$row['news_title']."</h1></center>";
	echo"类型：$cs<br/>";
	echo $row['news_content'];
	
?>
</body>
</html>