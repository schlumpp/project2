<?php
/*******************************************************
*陈敏清
*回复留言页面
********************************************************
*/
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>留言回复</title>
	
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

	function tranTime($time) {
    $timezone="Asia/Shanghai";
    date_default_timezone_set($timezone); //北京时间
	$rtime = date("m-d H:i",$time);
	$htime = date("H:i",$time);
	$time = time() - $time;

	if ($time < 60) {
		$str = '刚刚';
	}
	elseif ($time < 60 * 60) {
		$min = floor($time/60);
		$str = $min.'分钟前';
	}
	elseif ($time < 60 * 60 * 24) {
		$h = floor($time/(60*60));
		$str = $h.'小时前 '.$htime;
	}
/*		elseif ($time < 60 * 60 * 24 * 3) {
		$d = floor($time/(60*60*24));
	if($d=1)
		   $str = '昨天 '.$rtime;
		else
		   $str = '前天 '.$rtime;
	}*/
    else {
		$str = $rtime;
	}
	return $str;
}
    error_reporting(0);
	include("config.php");
	include("conn.php");
	$sid=$_GET["sid"];
	session_start();
	$_SESSION["nid"]=$sid;
	$sql="select *from note where note_id=".$sid."";

	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
?>
	<form action="deal_reply.php" method="post" enctype="multipart/form-data">
<tr><td><?php print "".$row['user_no'].":".$row['note_cont']."---".tranTime($row['note_date'])."";?></td></tr>
<tr><td><textarea name="content1" id="news" style="width:400px;height:100px;visibility:hidden;"></textarea></td></tr>
<tr><td><input type="submit" value="回  复"/>&nbsp;<input type="reset" value="重  置"/></td></tr>
</form>
</table>
</body>
</html>

