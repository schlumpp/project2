<?php
/*******************************************************
*陈敏清
*文件上传处理页面
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文件资料上传</title>
</head>

<body>
<?php
  session_start();
include("config.php");
include("conn.php");
/*if(!isset($_SESSION["admin"]))
 {
	 print("<script>");
	 print("setTimeout('window.location=\"Admin.php\"',0);");
	 print("</script>");
 }
else{
*/	$user=$_SESSION["admin"];
$time=date('Y-m-d H:i:s',time());
$file=$_FILES["file"]["name"];
$filename=$_POST["filename"];
print($_FILES["file"]["name"]);
if (($_FILES["file"]["size"] > 0)&&($_FILES["file"]["size"] < 10000000))
{
  if ($_FILES["file"]["error"] > 0)
    {
    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
      if (file_exists("data/" . $_FILES["file"]["name"]))
      {
      		echo $_FILES["file"]["name"] . " already exists. ";
      }
      else
      {
		$newfile     = explode(".",$_FILES["file"]["name"]);
		$explodename = array_pop($newfile);//抽出后缀
		$newfile     = array_pop($newfile);//抽出文件名称
		$newfile = iconv("UTF-8","gb2312", $newfile);
        move_uploaded_file($_FILES["file"]["tmp_name"],"data/".$newfile.".".$explodename);
		$file='../../../manage/data/'.$_FILES["file"]["name"];
		echo $file;
		$sql="insert into data(data_file,da_publish,da_name,da_time) values('".$file."','".$user."','".$filename."','".$time."')";
	    mysql_query($sql);
		print("<script>");
		print("setTimeout('window.location=\"showdata.php\"',2000);");
		print("</script>");

      }
    }
  }
  else
   {
     echo "Invalid file"."    ".$_FILES['upfile']['error'];
	  print_r($_FILES);
   }

?>
</body>
</html>