<?php
/*******************************************************
这个php文件处理修改密码
返回1代表 旧密码输入错误
返回2代表 密码错误
返回3代表 密码修改成功
返回4代表 密码修改失败
*********************************************************/
?>	
 <?php
 session_start();
 if(isset($_SESSION["stno"]))
 {
  $opwd=$_REQUEST["old_pwd"];
  $npwd=$_REQUEST["new_pwd"];
  require_once('connect.php');
  
  $sql="select * from student where stu_num ='".$_SESSION["stno"]."'";
  
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
			if($opwd!= $row['stu_password'])
			{
	 
				 print('1');
			}
			else
			{
				
				$sql="update student set stu_password = '".$npwd."' where  stu_num ='".$_SESSION["stno"]."'"; 
				$result=mysql_query($sql);
				if($result)
				  {
					print('2');
				  }
				else
				  {
					print('3');
				  }	
				
			 }	 
		
	 }
 else
 {
	print('4');
}
 

?>
