<?php
error_reporting(E_ALL^E_NOTICE);
require('connect.php');
$id = (int)$_GET['id'];

if(!isset($id) || $id==0) die('参数错误!');
$query = mysql_query("select * from data where da_id='$id'");
$row = mysql_fetch_array($query);
if(!$row) exit;
$filename = iconv('UTF-8','GBK',$row['da_name']);//中文名称注意转换编码
//$savename = $row['data_file']; //实际在服务器上的保存名称
$savename = iconv('UTF-8','GBK',$row['data_file']);
$myfile = $savename;
print $myfile;
if(file_exists($myfile)){//
	mysql_query("update data set da_num =da_num +1 where da_id='$id'");
	//header("Location: ".$myfile);
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=" .$filename );
	exit;
}else{
	echo '文件不存在！';
}
?>