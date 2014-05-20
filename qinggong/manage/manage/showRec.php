<?php
/*******************************************************
*陈敏清
*显示岗位招聘
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>岗位招聘</title>
</head>

<body>
<form method="post" action="deal_Rec.php">
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	session_start();
	$num=1;
	//从岗位信息获取岗位的ID
	$sid=$_GET["sid"];
	$sql="select *from recruitment where Rec_workid='".$sid."'";
	$rs=mysql_query($sql);
	echo"<table border='border'>";
	//显示指定的招聘岗位的报名学生的和相应的岗位，此项进行预览报名以及可以进行批准那些学生易受到招聘
	echo"<tr><td>编号</td><td>岗位名称</td><td>申请时间</td><td>申请人</td><td>申请状态</td><td>聘请</td></tr>";
	while($row=mysql_fetch_array($rs))
	{
		switch($row['state'])
		{
			case 0:$state="审核中";break;
			case 1:$state="已招聘";break;
			case 2:$state="招聘失败";break;
		}
		$sql0="select *from student,work where stu_id='".$row['stu_id']."' and work_id='".$sid."'";
		$rs0=mysql_query($sql0);
		$row_stu=mysql_fetch_array($rs0);
		echo"<tr><td>".$num."</td><td>".$row_stu['work_name']."</td><td>申请时间</td><td>".$row_stu['stu_name']."</td><td>".$state."</td>";
		$stu=$row['stu_name'];
		echo"<td><input type='checkbox' name='checkbox[]' value=".$row['stu_id']."></td></tr>";
		$num++;
	}
	echo"";
	echo"</table>";
?>
<input type="submit" value="提交" />
</form>
</body>
</html>