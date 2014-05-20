<!--
此页面为详细活动策划界面
@作者 蔡优优
@更新 2013.5.20
-->
<?php session_start();
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>活动策划</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<style> 
.textop{text-indent: 2em ;}
.position_now{ float:left; margin-top:4px; margin-left:14px;}
</style>
</head>

<body>
	<div class="main">
		<!--header 开始-->	    
         <?php  
		   include('php/connect.php');
		   include("php/common_header.php");
		   $news_id = $_REQUEST['news_id'];//获取academy.php中的data.php里穿过来的mid值，即work_id
		   
		   //$_SESSION['work_id'] = $work_id;//将work_id 存入到SESSION中		   
		   $query=mysql_query("select * from news where id = ".$news_id."");
		   $row=mysql_fetch_array($query);
		  // echo $SESSION['work_id'];
		   //$rs = mysql_query($sql);
		   if($row!=null)
		   {
         ?> 
        <!--header 结束-->
         <!--content 开始-->
        <div class="content">
        	<div class="content_resize" >
            <div class="position">
                    <a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> <a href="beauty.php">勤工风采</a> > 活动详情</p></span>
                </div>
            <div class="mt20">
        
                   <div  style="clear:both;" class="w  tc"><span  class="f30";><?php echo $row['news_title']; ?></span></div>
                 <p style="border: dotted 1px #CCC;" align="center">发布日期：<span><?php echo $row['news_time']; ?></span></p>
				<div class="tj">
                    	
                        <?php echo $row['news_content']; ?>                   
                    
                   
                </div>
		</div>
            </div>
        </div>
        <!--content结束-->
         <!--footer 开始-->
        <?php
		   }
		     include("php/common_foot.php");
          ?>
        <!--footer 结束-->
	</div>
</body>
</html>