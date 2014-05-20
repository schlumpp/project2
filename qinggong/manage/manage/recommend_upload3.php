<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传zip文件</title>
</head>

<body>
<?php
	include("config.php");
	include("conn.php");
	error_reporting(0);
	session_start();
	$recom_type=$_POST["recom_type"];
	$recom_pic =$_SESSION["recom_pic"];//自定义图片路径
	print $recom_pic;
	//$recom_pic2 =$_POST["recom_pic2"];
	$recom_name =$_POST["recom_name"];
	$recom_content=$_POST["recom_content"];
	//echo "$recom_type,$recom_pic,$recom_name,$recom_content";
	if ($recom_pic == null || $recom_name==null || $recom_content == null)
		{
			print("<script>");
			print("alert('信息未填写完整，请重新填写！')");
			print("</script>");
		    print("<script>");		   
			//print("window.history.go(-1)");
			print("setTimeout('window.location=\"recommend_upload.php\"',2000);");
			print("</script>");
		}
	else
	  {
		   $sql="insert into recom_infos (recom_type,recom_pic,recom_name,recom_content) values ('".$recom_type."','".$recom_pic."','".$recom_name."','".$recom_content."')";
		   $rs=mysql_query($sql);
		   $row=mysql_fetch_array($rs);
		   echo mysql_error();
		   print("<script>");
		   print ("alert('上传成功')");
		   print("</script>");
		   print("<script>");
		   print("history.go(-1)");
		   print("</script>");
	  }
		
			
		
	//echo"$recom_type $recom_name $recom_pic2 $recom_pic1   $recom_content";
	
	//if($recom_type = null || $recom_pic = null || $recom_name)


?>
</body>
</html>