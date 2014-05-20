<?php
/*******************************************************
*陈敏清
*显示招聘岗位的具体信息
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
	$sid=$_GET["sid"];
	$sql="select *from work where work_id='".$sid."'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	switch($row["work_classify"])
	{
		case 1:$cs="院内岗";break;
		case 2:$cs="校内岗";break;
		case 3:$cs="校外岗";break;
	}
	echo"岗位名称：".$row['work_name']."<br/>";
	echo"岗位类型：$cs<br/>";
	echo "岗位具体信息：".$row['work_content']."<br/>";
	echo"岗位信息发布时间:". $row['work_publish']."<br/>";
	echo"岗位招聘截止时间:". $row['work_endtime']."<br/>";
	
?>
</body>
</html>