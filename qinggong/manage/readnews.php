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
	<link href="images/style.css" rel="stylesheet" type="text/css" />
<title>公告信息</title>
	<style>
	body {
	background:#FFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;

}

	</style>
</head>
<body>
 <div id="widget table-widget">
    <div class="pageTitle">查看公告信息</div>
    <div class="pageColumn">
      <div class="pageButton">
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
	echo"<center style=' font-size:25px; font-weight:bold;'>".$row['news_title']."</center>";
	echo"类型：$cs<br/>";
	echo $row['news_content'];
	
?>
</div>
</div>
</div>
</body>
</html>