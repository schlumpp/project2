<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>推荐作品上传</title>
	<link href="images/style.css" rel="stylesheet" type="text/css" />
<style> table td{ padding-bottom:20px;  font:14px; font-weight:bold;}
body {
	background:#FFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;

	}</style>
</head>

<body>
 <div id="widget table-widget">
    <div class="pageTitle">推荐信息发布</div>
    <div class="pageColumn">
      <div class="pageButton">
<form action="recommend_upload3.php" method="post" enctype="multipart/form-data" >
<!--表单中enctype="multipart/form-data"的意思，是设置表单的MIME编码。默认情况，这个编码格式是application/x-www-form-urlencoded，不能用于文件上传；只有使用了multipart/form-data，才能完整的传递文件数据-->
<table>
<tr>
	<td>推荐作品类型:</td>
    <td><select name="recom_type">
        <option value="1">推荐电影</option>
        <option value="2">推荐书籍</option>
        </select>
     </td>
    <td>推荐作品名称：</td>
    <td><input type="text" name="recom_name"></td>
</tr>

<tr >
	<td>自定义作品封面：</td>
    <td><iframe width='300px' height='300px'  style="border:#CCCCCC solid 1px;"src='recomPic_upload.php' id='pic'  name='picframe' scrolling=no frameborder=0></iframe></td>
    <td>推荐作品描述：</td>
	<td><textarea style="height:200px; width:300px; border:#CCCCCC 1px solid;" name="recom_content"></textarea></td>
</tr>

<tr>
	<td colspan="2" align="center"><input type="submit" value="上传"></td>
</tr>
</table>
</form>
	</div>
	</div>
</div>
</body>
</html>