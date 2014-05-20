<?php
/*******************************************************
*陈敏清
*编辑更改岗位修改信息
********************************************************
*/
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>修改岗位信息</title>
	
    <link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
    
    <link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css"/>
    <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
    <script charset="utf-8" src="../js/jsdate.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : '../kindeditor/plugins/code/prettify.css',
				uploadJson : '../kindeditor/php/upload_json.php',
				fileManagerJson : '../kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	session_start();
	/*if(!isset($_SESSION["admin"]))
 {
	 print("<script>");
	 print("setTimeout('window.location=\"admin.php\"',0);");
	 print("</script>");
 }
  else
 {*/
    $sid=$_GET["sid"];
	$sql="select *from work where work_id='".$sid."'";
	$rs=mysql_query($sql);
	$_SESSION["work_id"]=$sid;
	setcookie("work_id",$sid.time()+3600*20*30);
	
	$row=mysql_fetch_array($rs);
	switch($row["work_classify"])
	{
		case 1:$cs="院内岗";
		case 2:$cs="校内岗";
		case 3:$cs="校外岗";
	}
	?>	
	<form action="update_work.php" method="post" enctype="multipart/form-data">
<tr><td>岗位类型：
				<select name="classify">   
                <option selected><?php echo $cs; ?></option>         
                <option id="1">院内岗</option>         
                <option id="2">校内岗</option> 
                <option id="3">校外岗</option>              
                </selected>
                </select> 
</td></tr>
<tr><td>岗位名称：<input name="workname" type="text" size="40" value="<?php echo $row["work_name"]; ?>"></td></tr>
<tr><td>截至时间：<input type = "text" name="gdowntime" onClick="SelectDate(this,'yyyy-MM-dd')" value="<?php echo $row["work_endtime"];?>">
</td></tr>
<tr><td><textarea name="content1" id="news" style="width:700px;height:400px;visibility:hidden;"><?php echo $row["work_content"];?></textarea></td></tr>
<tr><td><input type="submit" value="提  交" style="width:100px; font-weight:bold; margin-left:200px;" /><input type="reset" value="重  置" style="width:100px; font-weight:bold; margin-left:10px;" /></td></tr>
</form>
</table>
</body>
</html>

