<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript">
$(function(){
	$.ajax({
		type: 'GET',
		url: 'php/download/filelist.php',
		dataType: 'json',
		cache: false,
		beforeSend: function(){
			$(".filelist").html("<li class='load'>正在载入...</li>");
		},
		success: function(json){
			if(json){
				var li = '';
				$.each(json,function(index,array){
					li = li + '<li><a href="php/download/download.php?id='+array['id']+'">'+array['file']+'<span class="downcount" title="下载次数">'+array['downloads']+'</span><span class="download">点击下载</span></a></li>';
        		});
				$(".filelist").html(li);
			}
		}
	});
	$('ul.filelist a').live('click',function(){
		var count = $('.downcount',this);
		count.text( parseInt(count.text())+1);
	});
});
</script>
<style>
#demo {width:800px;}
ul.filelist li{background:url("img/bg_gradient.gif") repeat-x center bottom #F5F5F5;
border:1px solid #ddd;border-top-color:#fff;list-style:none;position:relative;}
ul.filelist li.load{background:url("img/ajax_load.gif") no-repeat; padding-left:20px; border:none; position:relative; left:150px; top:30px; width:200px}
ul.filelist li a{display:block;padding:8px;}
ul.filelist li a:hover .download{display:block;}
span.download{background-color:#057eef;border:1px solid #057eef;color:white;
display:none;font-size:12px;padding:2px 4px;position:absolute;right:8px;
text-decoration:none;text-shadow:0 0 1px #315d0d;top:6px;
-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
span.downcount{color:#999;font-size:10px;padding:3px 5px;position:absolute; margin-left:10px;text-decoration:none;}

</style>
</head>

<body>
<!---->
	<div class="main">
		<!--header 开始-->
		<!--header 开始-->
		 <?php
		   include("php/common_header.php");
         ?>
            <!--nav 结束-->    	
 
        <!--header 结束-->
        <!--content 开始-->
        <div class="content">
        	<div class="content_resize">
              <div class="position">
                            <a href="main.php"><img class=" fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> 下载中心</p></span>
                        </div>	 
            	
<!--
                	<div class="position">
                    	<a href="main.html"><img class="home" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.html">首页 </a>> <a href="#">网站导航</a> 
                   	</div>	-->
   
                  	 <img src="img/xzzx.png" style="margin-left:36px;"/>
 
                  <div id="demo">
    				<ul class="filelist">
       				 </ul>
				  </div>
			</div>
                    <br/>
                    <br/>
       </div>
        <!--content 结束-->
        
        <!--footer 开始-->
        <?php
		     include("php/common_foot.php");
          ?>
        <!--footer 结束-->
        
    </div>
</body>
</html>
