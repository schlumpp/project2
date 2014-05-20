<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传图片</title>
</head>

<body>
<table>
	<tr height="200">
    	<td ><?php
        		if(isset($_SESSION["recom_pic"]))   //isset()在php中用来检测变量是否设置，该函数返回的是个布尔值，即true/false。
					{print"<img src='".$_SESSION["recom_pic"]."' height=200 width=150/>";}
			?>
        </td>
    </tr>
    <tr>
    	<td><form action="recommend_upload2.php" method="post" enctype="multipart/form-data" >
<!--表单中enctype="multipart/form-data"的意思，是设置表单的MIME编码。默认情况，这个编码格式是application/x-www-form-urlencoded，不能用于文件上传；只有使用了multipart/form-data，才能完整的传递文件数据-->
<input type="file" name="file" id="file" />
<input type = "submit" value = "上传"/ >
</form></td>
    </tr>
</table>
</body>
</html>