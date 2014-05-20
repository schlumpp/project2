<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.more.js"></script>
<script type="text/javascript">
$(function(){
	$('#more').more({'address': 'php/recommend/book.php'});
});
</script>
<style>
.recom_book{ clear:both; float:left;}

.bookname{claer:both; font-size:20px; font-weight:bold; margin-bottom:8px;}

.bookpic {clear:both; float:left;width:100px;}

.more_content{ float:right; width:600px; margin-left:20px; text-align:justify; line-height:20px; word-break: break-all;}

.get_more{clear:both; text-align:center;}

.single_item{padding:20px; clear:both; border-bottom: 1px dotted #d3d3d3; float:left;}

#more { width: 100%;  border: 1px solid #999; clear:both; float:left;}

.more_loader_spinner{width:20px; height:20px; margin:10px auto; background: url(loader.gif) no-repeat;}
	.backToTop {
		 display: none;
		 width: 18px;
		 line-height: 1.2;
		 padding: 5px 0;
		 background-color: #000;
		 color: #fff;
		 font-size: 12px;
		 text-align: center;
		 position: fixed;
		 _position: absolute;
		 right: 10px;
		 bottom: 100px;
		 _bottom: "auto";
		 cursor: pointer;
		 opacity: .6;/*元素的透明度，取值为1表示完全不透明，取值为0表示完全透明*/
		 filter: Alpha(opacity=60);/*CSS静态滤镜样式，设置图片或文字的不透明度*/
	}
	</style>
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
                         <li><a href="recombook.php">励志书籍推荐</a></li>
                         <li><a href="recomMovies.php">励志电影推荐</a></li>                                   
                    </ul>

                      <?php
					    include("php/common_threeImg.php");
                      ?>

           	 	</div>
             
            	

        		<div class="right_content">
                	<div class="position">
                     	<a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> <a href="recombook.php">励志部落</a> ><a href="recombook.php">励志书籍推荐</a></p></span>
                   	</div>	
                    <div class="detail_latestNews_title">
           		<ul>
            		<li class="detail_latestNews_title_f1"></li>
                	<li class="detail_latestNews_title_f2">书籍推荐</li>
            	</ul>
             </div>
      
                <div class="recom_book">
				<div id="more">
                          <div class="single_item">
                          <div class="bookname"></div>
                          <div class="bookpic"></div>
                          <div class="more_content"></div>
                         </div>
                    <a href="javascript:;" class="get_more">::点击加载更多内容::</a>
      	 		</div>
               </div> 
        </div>
       </div>
        <!--content 结束-->
        <br/>
        <br/>
        <br/>        
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
