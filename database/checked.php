<?php

//$_REQUEST用于收集html表单提交的内容
$uname=$_REQUEST["name"];
$upwd=$_REQUEST["pwd"];
//require_once表示导入数据库,require与require_once的不同在于，它表示只导入一次就不再导入,但是效率可能会降低
require_once('connect.php');
//mysql查询语句
$sql="select * from student where stu_num ='".$uname."'";
//mysql_query()表示发送一条查询语句
$rs=mysql_query($sql);
//mysql_fetch_array()表示从查询结果中取出一行作为数组,即将密码和用户名传入数组
$row=@mysql_fetch_array($rs);
//如果用户名不正确则返回1
if($uname == "")
{

	echo"<script type='text/javascript'>alert('请填写用户名');location='login.php';
            </script>";
	
}

	if($upwd = "")
	{
		echo"<script type='text/javascript'>alert('请填写密码!');location='login.php';</script>";		
	}

else
{
	//如果输入的密码不等于数据库中的密码，则返回2
	if($upwd!= $row['stu_password'])
	{

		echo"<script type='text/javascript'>alert('密码错误!');location='login.php';</script>";
	}
	//登陆成功返回3
	else
	{
		echo"<script type='text/javascript'>alert('登陆成功');location='index.php';</script>";
		session_start();
		//将session传给$uname,$row
		//因为session数据是保存在服务器端的，关闭网站数据就会消失，但是cookies是保存在客户端的，可以设置时效，对于用户名密码账号这种数据用session比较安全，但是容易增加服务器负担
		$_SESSION["stno"]= $uname;
		$_SESSION["stu_id"]=$row['stu_id'];
			


	}

}

?>


