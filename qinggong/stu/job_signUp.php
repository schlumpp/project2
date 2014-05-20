<?php error_reporting(0); 
session_start();
include('php/connect.php');
$work_id = $_SESSION['work_id'];//获得work_id
$Rec_time=date('Y-m-d H:i:s',time());//获取系统当前时间

//echo $_SESSION["stu_id"];
//echo $Rec_time ;
//echo $work_id;

if(!isset( $_SESSION["stu_id"]))//必须登录后才能报名
{
print("<script>");
print ("alert('请先登录再报名');");
print("history.go(-1);");
print("</script>");
}
else//若已登录
	{
    $sql1 = "select * from work where work_id='".$work_id."'";//判断报名时间是否截止
	$rs1  = mysql_query($sql1 );
	$row1 = mysql_fetch_array($rs1);
	if($row1["work_endtime"] < $Rec_time)
	 {
		print("<script>");
		print ("alert('报名日期已经截止');");
		print("history.go(-1)");
		print("</script>");
	 }
	 else//若没有超过报名时间
	  {
		$sql2="select * from  recruitment where Rec_workid=".$work_id." and stu_id=".$_SESSION["stu_id"]."";	
		$rs2=mysql_query($sql2);	
		$row2=mysql_fetch_array($rs2);
		
		//先判断是否已经报过名
			if($row2==null)//若没有报过名
			{
				//将记录插入recruitment表中
			   $sql3="insert into recruitment (stu_id,Rec_workid,state,Rec_time)  values (".$_SESSION["stu_id"].",".$work_id.",0,'".$Rec_time."')";
			   $rs3  = mysql_query($sql3);
			   if($rs3 )
			   {
			    //work表中的该岗位的报名人数应加1
			    $sql = "select * from work where work_id = ".$work_id."";
				//print $sql ;
				$rs4  = mysql_query($sql);
				$row4 = mysql_fetch_array($rs4);//取出原来已经报名的人数
				echo $row4['work_num'];
				$worknum=$row4['work_num'] +1;//报名人数加1
				//echo $row['work_num'];
				$sql="update work set work_num=".$worknum." where work_id=".$work_id."";
				mysql_query($sql);//将修改后的报名人数加入到数据库汇中
				
				//$sql="select * from  recruitment set work_num=".$row['work_num']." where work_id='".$work_id."'";
				print("<script>");
				print ("alert('报名成功，请准时面试');");
				print("</script>");
				print("<script>");
				print("setTimeout('window.location=\"academy_post.php\"',0);");
				print("</script>");
			   }
			   else
			   {
				   
				print("<script>");
				print ("alert('报名失败');");
				print("</script>");				   
				   }

				}
				else
				{
					print("<script>");
		            print ("alert('您已经报过名，无需重新报名！');");
					print("history.go(-1)");
					print("</script>");}
		}
	}

?>