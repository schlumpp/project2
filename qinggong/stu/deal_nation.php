<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php		   
		   	error_reporting(0);
			require_once('php/connect.php');
			session_start();
			$stu_id=$_SESSION["stu_id"];
			$sql="select *from student where stu_id=".$stu_id."";
			//print $sql;
			$rs=mysql_query($sql);
			$row=mysql_fetch_array($rs);
			if($row["type"]!=2)
			{
				print("<script>");
				print ("alert('对不起，您还未是贫困生，请先申请入库')");
				print("</script>");
				print("<script>");
				print("history.go(-1)");
				print("</script>");
			}
			else
			{
				$text=$_POST["text"];
				$year=date('Y');
				$time=date('Y-m-d H:i:s');
				//判断数据库表中是否已经在本年度申请过助学金了
				$sql="select *from aid_scholarship where stu_id=".$stu_id." and aidSch_time='".$year."'";
				$rs=mysql_query($sql);
				$row=mysql_fetch_array($rs);
				$type=3;
				$state=1;
				echo $row;
				if($row==null)
				{
					$sql="insert into aid_scholarship(aidSch_time,stu_id,aidSch_applyReason)values('".$year."',".$stu_id.",'".$text."')";
					//print $sql;
					mysql_query($sql);
					$sql="insert into applyfor(applyfor_year,apply_id,stu_time,apply_type,applySch_state)values('".$year."',".$stu_id.",'".$time."',".$type.",".$state.")";
										//echo $sql;
					$rs=mysql_query($sql);	
					if($rs){	
						
						
						print("<script>");
						print ("alert('等待审核!');");
						print("window.location='apply3.php'");
						print("</script>");					
								
						}	
						else
						{
							
						print("<script>");
						print ("alert('提交失败');");
						print("history.go(-1)'");
						print("</script>");			
							
							
							}								
				}
				else
				{
					$sql="update aid_scholarship set aidSch_applyReason='".$text."' where stu_id=".$stu_id." and aidSch_time='".$year."'";
					//echo $sql;
					$rs2=mysql_query($sql);
					if($rs2){
						
						
						print("<script>");
						print ("alert('您已提交过，数据已更新');");
						print ("alert('等待审核');");
						print("window.location='apply3.php'");
						print("</script>");						
								
						}
					else
						{
							
						print("<script>");
						print ("alert('提交失败');");
						print("history.go(-1)");
						print("</script>");			
							
							
							}	
					
				}

			}
         ?>
</body>
</html>