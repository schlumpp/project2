<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
if(!empty($_POST['txt']))
{
$nick=$_POST['nick']; 
$txt=$_POST['txt'];
$color=$_POST['color'];
 if($nick&&$txt) 
  { 
  	/*$txt=nl2br($txt."--$nick"); 
	file_put_contents(__FILE__,"<hr><br><b>$title</b> ".date("Y-m-d H:i:s")."<br><font color=$color>$txt<hr></font>",FILE_APPEND); 
	header('refresh:1');*/
	     include("../../candy/upload/config.php");
 		 include("../../candy/upload/conn.php");

 		 $nowtime=date("Y-m-d H:i:s"); 
	
 		$sql="insert into mess values(null,'".$nick."','".$nowtime."','<font color=$color>".$txt."</font>','')";
  		$result=mysql_query($sql);

	  if($result)
	  {
		print("<script>");
		print("alert('留言成功！！');");
		print("window.location='leavemess.php';");	
		print("</script>");	
	  }
	  else
	  {
		print("<script>");
		print("alert('留言失败！！');");
		print("window.location='leavemess.php';");
		print("</script>");	
		  
		  
		  }
} 
}
?>
<title>最简留言本(PHP5)</title>
<b>最简留言本(PHP5)</b> 
<hr> 
<body bgcolor=#BEBEBE> 
<form method=post action="">
呢称:<input type="text" name="nick" size=6>
内容:<textarea name="txt" rows="10" cols="40"></textarea><br>
颜色:
<select name=color>
<option value='red'>红色
<option value='blue'>兰色
<OPTION value='yellow'>黄色
<option value='green'>绿色
<option value='orange'>橙色
</select>
操作:<input type="submit" value="提交"> <input type="reset"> 
</form>

</body>
</html>
