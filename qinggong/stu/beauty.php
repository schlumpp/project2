<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<link href="css/getmore.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.more.js"></script>
<script type="text/javascript">
$(function(){
	$('#more').more({'address': 'php/activities/activities.php'})
});
</script>


</head>

<body>
<!---->
		<div class="main">
		<!--header 开始-->
		 <?php
		   include("php/common_header.php");
         ?>
        <!--header 结束-->
        <!--content 开始-->
        <div class="content">
        	<div class="content_resize">
                <!--content区上半部分左边区开始-->
        		<div class="left_nav">
                 	
                	<ul>
                         <li><a href="beauty.php">活动策划</a></li>
                         <li><a href="work_report.php">工作总结</a></li>
                         <li><a href="heart.php">心路勤工</a></li>                                                               
                    </ul>

                     <?php include("php/common_threeImg.php"); ?>
                    

           	 	</div>
             
            	

        		<div class="right_content">
                	<div class="position">
                  	<a href="main.php"><img class=" fl" src="img/home.png"></a><span><p class="position_now">当前位置:> <a href="main.php">首页 </a>> <a href="beauty.php">勤工风采</a> ><a href="beauty.php">活动策划</a></p></span>
                   	</div>	
                    <div class="detail_latestNews_title">
                        <ul>
                            <li class="detail_latestNews_title_f1"></li>
                            <li class="detail_latestNews_title_f2">活动策划</li>
                        </ul>
             		</div>
             <div id="plan_content" class="fl h400 cb">        
 			  <div id="more">
      		  <div class="single_item">
             	<div class="element_head">
                     <ul>
                       <li class="img"><img src="img/icon_03.png"></li>
                        <li class="news_title"></li>
                        <li class="date"></li>
                     </ul>
              	</div>
              <div class="more_content"></div>
       		 </div>
        		<a href="javascript:;" class="get_more">::点击加载更多内容::</a>
 			 </div>
             </div>
   			</div>
        </div>
              <br />
        <br />
        <br />
       </div>
 
        <!--content 结束-->
        
        <!--footer 开始-->
          <?php
		     include("php/common_foot.php");
          ?>
        <!--footer 结束-->
        
    </div>
    	<script type="text/javascript">
		(function() {
			var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
				.text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
					$("html, body").animate({ scrollTop: 0 }, 120);
			}), $backToTopFun = function() {
				var st = $(document).scrollTop(), winh = $(window).height();
				(st > 0)? $backToTopEle.show(): $backToTopEle.hide();
				//IE6下的定位
				if (!window.XMLHttpRequest) {
					$backToTopEle.css("top", st + winh - 166);
				}
			};
			$(window).bind("scroll", $backToTopFun);
			$(function() { $backToTopFun(); });
		})();
	</script>
</body>
</html>
