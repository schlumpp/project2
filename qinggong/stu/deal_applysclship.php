<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>处理页面</title>
</head>

<body>
<?php
//获取关于贫困生申请提交的信息
	require_once('php/connect.php');
	session_start();
	$stu_id=$_SESSION["stu_id"];
	$ranking1 = $_POST["ranking1"];
	$ranking2 = $_POST["ranking2"];
	$Com_Course = $_POST["Com_Course"];
	$pass_num = $_POST["pass_num"];
	$applyReason = $_POST["reson"];
	$year=date('Y');
	//获取家庭信息，需要将每个成员的信息加起来，每条信息用"，"隔开，每个成员用"；"隔开
	$name1=array($_POST["name11"],'-',$_POST["name12"],'-',$_POST["name13"],';');
	$member1=implode($name1);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
	$name2=array($_POST["name21"],'-',$_POST["name22"],'-',$_POST["name23"],';');
	$member2=implode($name2);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
	if($_POST['name31']=="")
		$member3=";";
	else
	{
		$name3=array($_POST["name31"],'-',$_POST["name32"],'-',$_POST["name33"],';');
		$member3=implode($name3);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
	}
	if($_POST['name41']=="")
		$member4=";";
	else
	{
		$name4=array($_POST["name41"],'-',$_POST["name42"],'-',$_POST["name43"],';');
		$member4=implode($name4);  //默认是以空字符合并数组元素	//$s=implode(',',$arr);  //指定以","合并数组元素
	}

	//最后将奖项进行整合
	$members=array($member1,$member2,$member3,$member4);
	$main_award=implode($members);
	$sql="select *from student where stu_id=".$stu_id." and type=2";
		$rs=mysql_query($sql);
		$row=mysql_fetch_array($rs);
		if($row==null)
		{
			print("<script>");
			print ("alert('你还不是贫困生，不能申请奖学金');");
			print("</script>");
		}
		else
		{
	
	
	
	$sql="select *from applyfor where  applyfor_year ='".$year."' and  apply_id  = ".$stu_id." and apply_type =2";

	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if($row==null)
	{
	$sql="insert into national_scholarship(stu_id,nationalSch_applyReason,ranking1,ranking2,Com_Course,pass_num,main_award,nationalSch_year) values(".$stu_id.",'".$applyReason."','".$ranking1."','".$ranking2."',".$Com_Course.",".$pass_num.",'".$main_award."','".$year."')";
	mysql_query($sql);
	//echo $sql;
	$time=date('Y-m-d H:i:s');
	$type=2;
	$year=date('Y');
	$state=1;
	$sql2="insert into applyfor(applyfor_year,apply_id,stu_time,apply_type,applySch_state) values('".$year."','".$stu_id."','".$time."',".$type.",".$state.")";
	$rsl=mysql_query($sql2);
		if($rsl)
		{
		print("<script>");
		print ("alert('等待审核');");
		print("window.location='apply3.php'");
		print("</script>");
		}
		else
		{
		print ("alert('提交失败');");
		print("history.go(-1)");
		print("</script>");	
			
			}
		
	}
	else
	{
		
		print("<script>");
		print ("alert('您已经提交过了');");

		print("history.go(-1)");
		print("</script>");
	
	}
}
	
	
?>
</body>
</html>