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
	<link href="images/style.css" rel="stylesheet" type="text/css" />
    <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
	<script charset="utf-8" src="js/kindEditor.js"></script>
	<style>
	body {
	background:#FFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;

}

</style>
</head>
<body>
	<?php

	error_reporting(0);
	include("config.php");
	include("conn.php");
	$sql="select *from basic_info";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	
	?>
	<form action="update_info.php" method="post" enctype="multipart/form-data">
  <div id="widget table-widget">
    <div class="pageTitle">基本信息更新</div>
    <div class="pageColumn">
      <div class="pageButton">
		网站更改信息类型:</span><select name="type" style="color:#CCCCCC;" >
        <option value="1">部门设置</option>
        <option value="2">中心简介</option>
        </select>	</div>




 	<center>
    <center><textarea name="content1" style="width:800px;height:360px;visibility:hidden;"><?php echo $row['center_info']; ?></textarea></center>
   	<span ><input type="submit" value="更 新" style="width:100px;   font-weight:bold; "   /></span>
 	</center>


    </div>
  </div><!-- #widget -->

    </form>
</body>
</html>

