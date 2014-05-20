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
	<link href="images/style.css" rel="stylesheet" type="text/css" />	
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

	<form action="deal_work.php" method="post" enctype="multipart/form-data">
		  <div id="widget table-widget">
    <div class="pageTitle">基本信息更新</div>
    <div class="pageColumn">
      <div class="pageButton">
			 岗位类型： 
							<select name="classify" style=" color:#CCCCCC ">   
							<option selected>请选择岗位类型</option>         
							<option id="1">院内岗</option>         
							<option id="2">校内岗</option> 
							<option id="3">校外岗</option>              
							</select> 
			
			岗位名称：<input name="workname" type="text" size="40">
			
			截至时间：	<input id="d11" type="text" onClick="WdatePicker()" readonly  name="gdowntime" />
    </div>
   
	<center>
<textarea name="content1" id="news" style="width:700px;height:400px;visibility:hidden;"></textarea></td></tr>
<input type="submit" value="提  交" style="width:100px; font-weight:bold;  " /><input type="reset" value="重  置" style="width:100px; font-weight:bold; margin-left:10px;" />
	</center>
</form>
    </div>
  </div><!-- #widget -->

</body>
</html>

