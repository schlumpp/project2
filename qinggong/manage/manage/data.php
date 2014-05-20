<?php
/*******************************************************
*陈敏清
*资料上传
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>资料上传</title>
<style>table td{padding:20px; color:#CCCCCC; font:14px; font-weight:bold; }</style>
</head>
<body>
<center>
<table >
<form action="deal_data.php" method="post" enctype="multipart/form-data">
<tr>	<td>文件名称:</td><td><input type="text" size="30" name="filename" /></td></tr>
<tr>	<td>    上传文件:</td><td><input type="file" name="file" /></td></tr>
<tr>	<td colspan="2"><input type="submit" value="上传" /></td></tr>
</form>
<tr>	<td colspan="2">注意事项：上传文件大小不得超过10M</td></tr>

</table>
</center>
</body>
</html>