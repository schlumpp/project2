<?php
/*******************************************************
这个php文件处理用户登录，登录成功之后,正确的用户名储存在$_SESSION["stno"]中
返回1代表 用户名不存在
返回2代表 密码错误
返回3代表登录成功
*********************************************************/
?>
 <?php
  $uname=$_REQUEST["name"];
  $upwd=$_REQUEST["pwd"];
  require_once('connect.php');
  
  $sql="select * from student where stu_num ='".$uname."'";
  
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);

	if($row == null)
	{

		 print('1');
	}
	  else
	  {
		
			if($upwd!= $row['stu_password'])
			{
	 
				 print('2');
			}
			else
			{
				 print('3');
			session_start();
			$_SESSION["stno"]= $uname;
			$_SESSION["stu_id"]=$row['stu_id'];	
			

	
			 }	 
		
	}

?>
