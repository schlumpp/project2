<?php
/*******************************************************
*陈敏清
*岗位添加
********************************************************
*/
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>添加岗位</title>


    <link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
    
    <link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css"/>
	<script language="javascript" type="text/javascript" src="../stu/My97DatePicker/WdatePicker.js"></script>    
    <script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
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
	<center>
	<form action="deal_work.php" method="post" enctype="multipart/form-data">
<span style="font:14px; font-weight:bold; color:#CCCCCC ">岗位类型：</span>
				<select name="classify" style=" color:#CCCCCC ">   
                <option selected>请选择岗位类型</option>         
                <option id="1">院内岗</option>         
                <option id="2">校内岗</option> 
                <option id="3">校外岗</option>              
                </select> 

<span style="font:14px; font-weight:bold; color:#CCCCCC ">岗位名称：</span><input name="workname" type="text" size="40">

	<span style="font:14px; font-weight:bold; color:#CCCCCC ">截至时间：</span> 	<input id="d11" type="text" onClick="WdatePicker()" readonly  name="gdowntime" />
    
   
<table style="margin-top:20px;">
</tr>
<tr><td><textarea name="content1" id="news" style="width:700px;height:400px;visibility:hidden;"></textarea></td></tr>
<tr><td><input type="submit" value="提  交" style="width:100px; font-weight:bold; margin-left:200px;" /><input type="reset" value="重  置" style="width:100px; font-weight:bold; margin-left:10px;" /></td></tr>
</form>
</table>
</center>
</body>
</html>

