<?php
/*******************************************************
*陈敏清
*编辑更改公告信息
********************************************************
*/
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>
	
    <link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
    
    <link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css"/>
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
	$sql="select *from news where id='".$sid."'";
	$rs=mysql_query($sql);
	$_SESSION["news_id"]=$sid;
	setcookie("news_id",$sid.time()+3600*20*30);
	
	$row=mysql_fetch_array($rs);
	switch($row["class"])
	{
		case 1:$cs="活动公告";
		case 2:$cs="新闻公告";
		case 3:$cs="活动策划";
	}
	?>
	<form action="update_news.php" method="post" enctype="multipart/form-data">
<tr><td>公告类型：
				<select name="class">   
                <option selected><?php  echo $cs; ?></option>         
                <option id="1">活动公告</option>         
                <option id="2">新闻公告</option> 
                <option id="3">活动策划</option>              
                </selected>
                </select> <br/><br/>
</td></tr>
<tr><td>公告标题：<input type='text'  name='title' id="title" size="40" value="<?php echo $row['news_title']; ?>"/></td></tr>
<tr><td><br/><textarea name="content1" id="news" style="width:700px;height:400px;visibility:hidden;"><?php echo $row['news_content']; ?></textarea></td></tr>
<tr><td><br/><input type="submit" value="提  交" style="width:100px;" /><input type="reset" value="重  置" style="width:100px; margin-left:10px;" /></td></tr>
</form>
</table>
</body>
</html>

