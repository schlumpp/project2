<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
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
                 	<?php
					  include("php/apply_left_nav.php");
                    ?>
           	 	</div>
        		<div class="right_content">
                	<div class="position">
                    	<a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> <a href="applyfor.php">奖助中心</a> ><a href="applyfor.php">申请入库</a></p></span>
                   	</div>
                   
                    <div class="detail_latestNews_title">
           		<ul>
            		<li class="detail_latestNews_title_f1"></li>
                	<li class="detail_latestNews_title_f2">申请入库</li>
            	</ul>
             </div>
      
                <div class="introduce_content h500 fr">
                <p>为了响应国家政策，为了关怀广大寒门学子，学院搜集并建立了贫困生信息库，凡入库我院学生即可申请每年的国家励志奖学金和国家助学金，其中励志奖学金和助学金不冲突，能够同时申请，在此郑重申明的是，本资助项目只针对家庭真正贫困的学生，凡有以下行为之一者，不能认定为家庭经济困难学生：</p>
                <p>1.“一卡通”消费过高或明显消费不足，经常在校外大额就餐（请客、大吃大喝）、吸烟者。</p>
				<p>2.有高档消费行为或奢侈消费行为的；在校外租房或经常出入营业性网吧、迪吧等娱乐场所的；经常更换高档通讯工具的。</p>
				<p>3.节假日经常外出旅游的。</p>
                <p>4.直接或间接利用资助金投资股票、基金等风险投资的。</p>
                <p>5.因父母违反国家计划生育政策而造成的家庭经济困难。</p>
                <p>6.家庭因投资、做生意、购置房产和贵重财务等非不可抗拒因素而造成的暂时经济困难。</p>

                <p><input type="button" value="我没有以上行为，立即申请"  class=" w200 ht  m0" onclick="javascript:window.location.href='apply1.php'"></p>
                
      	 	</div>
            
        </div>
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
