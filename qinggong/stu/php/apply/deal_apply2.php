<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//获取关于贫困生困难程度
  	require_once('../connect.php');
	session_start();
	$apply_grade=$_POST["apply_grade"];
	$time=date('Y-m-d H:i:s');
	$type=1;
	$year=date('Y');
	$state=1;
	//echo $apply_grade;
	$family_intro=$_POST["family_intro"];
	$stu_id=$_SESSION["stu_id"];
	//echo $family_intro;
	//判断此学生的贫困程度是否已经存放，只需要更改信息即可
	$sql0="select *from stu_define where stu_id=".$stu_id."";
	$rs = mysql_query($sql0);
	$row=mysql_fetch_array($rs);
	if($row==null)
		$sql="insert into stu_define(stu_id,defineDetail_id)values('".$stu_id."','".$apply_grade."')";
	else
		$sql="update stu_define set defineDetail_id='".$apply_grade."' where stu_id=".$stu_id."";
	mysql_query($sql);
	$sql="update student set family_intro='".$family_intro."', type=".$type." where stu_id=".$stu_id."";
	mysql_query($sql);
	//判断此学生今年是否已经申请过入库，申请过了进行改正，没有则进行插入
	$sql0="select *from applyfor where apply_id=".$stu_id." and applyfor_year='".$year."' and apply_type=1";
	$rs = mysql_query($sql0);
	$row=mysql_fetch_array($rs);
	if($row==null)
		$sql="insert into applyfor (applyfor_year,apply_id,stu_time,apply_type,applySch_state)values('".$year."',".$stu_id.",'".$time."',".$type.",".$state.")";
	else 
		$sql="update applyfor set applySch_state=1,applySch_time=null where apply_id=".$stu_id." and applyfor_year='".$year."' and apply_type=1";
	mysql_query($sql);
	print("<script>");
		print ("alert('等待审核')");
		print("</script>");
		print("<script>");
		print("window.location='../../apply3.php'");
		print("</script>");
?>
</body>
</html>