<?php
/*******************************************************
*陈敏清
*将申请批准的学生转换成贫困生
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>岗位处理</title>
</head>
<body>
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	session_start();
	$select=$_POST['identity'];
	$checkbox = $_POST['checkbox'];
	$applytype=$_REQUEST['action'];
	$work_time=date('Y-m-d H:i:s',time());
	//获取checkbox的内容到数组当中
	for($i=0;$i<=count($checkbox);$i++) 

		{ 
		
		if(!is_null($checkbox[$i])) 
		
		{$chechvalue=$checkbox[$i];break;} 
		
		} 
		
		//echo $chechvalue; 
	if($select==1)
	{	
	for($i=1;$i<=count($checkbox);$i++)
	{
		$sql0="update applyfor set applySch_state=2 where apply_id=".$chechvalue." and apply_type= ".$applytype."";
		print  $sql0;
		$rs1=mysql_query($sql0);

		$sql="update student set type=2 where stu_id=".$chechvalue."";
		$rs=mysql_query($sql);
		

	}


	if($rs)
	{
		print("<script>");
		print ("alert('审核成功';");
		print("history.go(-1);");
		print("</script>");
	}
	else
	{
		
		print("<script>");
		print ("alert('审核失败');");
		print("history.go(-1)");
		print("</script>");	
		
		
		}
	}
	if($select==2)
	{
	for($i=1;$i<=count($checkbox);$i++)
		{
			$sql0="update applyfor set applySch_state=3 where apply_id=".$chechvalue."  and apply_type= ".$applytype."";
			print $sql0;
			$rs1=mysql_query($sql0);

		
		}
	if($rs1)
		{
			print("<script>");
			print ("alert('审核成功');");
			print("history.go(-1)");
			print("</script>");
		}
		else
		{
			
			print("<script>");
			print ("alert('审核失败');");
			print("history.go(-1)");
			print("</script>");	
			
			
			}	
	}

		
	?>
</body>
</html>