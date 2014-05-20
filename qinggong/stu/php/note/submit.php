<?php
session_start();
/**
 * @处理表单提交数据
 * @2010 Helloweba.com,All Rights Reserved.
 * -----------------------------------------------------------------------------
 * @author: Liurenfei
 * @update: 2010-10-16
*/

if(!isset($_SESSION["stno"]))
{
	print("<script>");
	print("alert('请先登录再发表留言');");	
	print("window.location='note.php';");		
	print("</script>");	
	}
	else
	{
		define('INCLUDE_CHECK',1);
		require_once('../connect.php');
		require_once('function.php');
		
		
		$txt=stripslashes($_POST['saytxt']);
		$txt=mysql_real_escape_string(strip_tags($txt),$link); //过滤HTML标签，并转义特殊字符
		if(mb_strlen($txt)<1 || mb_strlen($txt)>140)
			die("0");
		$time=time();

		$userid=$_SESSION["stno"];
		
		
		$query=mysql_query("insert into note(user_no,note_cont,note_date )values('".$userid."','".$txt."','".$time."')");
		if(mysql_affected_rows($link)!=1)
			die("0");
		$apply='';
		echo formatSay($txt,$time,$userid,$apply);
			}
?>
