<?php
/*******************************************************
*陈敏清
*网站基本资料更新
*updater 陈烘
*update  5.20
********************************************************
*/
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>网站基本资料更新</title>
    
    <link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css"/>
    <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
	<script charset="utf-8" src="js/kindEditor.js"></script>
</head>
<body>
	<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	session_start();
/*	if(!isset($_SESSION["admin_name"]))
 {
	 print("<script>");
	 print("setTimeout('window.location=\"admin.php\"',0);");
	 print("</script>");
 }
  else
 {*/
	$sql="select *from basic_info";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	
	?>
    <div>
<center>
	<form action="update_info.php" method="post" enctype="multipart/form-data">
	<span style="font:14px; font-weight:bold; color:#CCCCCC ">网站更改信息类型:</span><select name="type" style="color:#CCCCCC;" >
        <option value="1">部门设置</option>
        <option value="2">中心简介</option>
        </select>
    <table>
    <tr><td><br/><textarea name="content1" style="width:500px;height:400px;visibility:hidden;"><?php echo $row['center_info']; ?></textarea></td></tr>
    <tr><td><br/><input type="submit" value="更 新" style="width:100px;" /></td></tr>
    </form>
    </table>
    </center>
</div>

</body>
</html>

