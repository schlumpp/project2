<?php
/*******************************************************
*陈敏清
*公告更新页面
*updater 陈烘
*update  5.20
********************************************************
*/
?>
<?php
		    if(isset($_POST["content1"]))
			{
		    $content=$_POST["content1"];
			echo"$content";
			}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>上传公告</title>
	
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

	<form action="php/news/deal_news.php" method="post" enctype="multipart/form-data">
	  <div id="widget table-widget">
    <div class="pageTitle">基本信息更新</div>
    <div class="pageColumn">
      <div class="pageButton">
    公告类型：
				<select name="class" style=" color:#CCCCCC ">   
                <option selected>请选择发布类型</option>         
                <option id="1">新闻公告</option>         
                <option id="2">活动策划</option> 
                <option id="3">工作总结</option> 
                <option id="4">心路勤工</option>                        
                </select> 
	   公告标题：<input type='text'  name='title' id="title" size="40"/>		
	</div>


 
	<center>
  	 <center><textarea name="content1" id="news" style="width:700px;height:400px;visibility:hidden;"></textarea> </center>
 <input type="submit" value="提  交" style="width:100px; font-weight:bold;  " /><input type="reset" value="重  置" style="width:100px; margin-left:10px; font-weight:bold;"  /> 
 </center>
</form>

    </div>
  </div><!-- #widget -->

</body>
</html>

