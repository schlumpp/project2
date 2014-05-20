<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<style>
#introduce_content p{ text-align:justify; line-height: 24px; text-indent: 2em; }
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
                 	<table>
                       <form name="searchinfor" action="goods_search.php" method="post">
                        <tr>                       
                            <td><input type="text" class="text"></input></td>
                            <td><input type="image" src="img/search.png" class="about_search" onClick="document.searchinfor.submit()"> </td>
                            </form>
                         </tr>
                    </table>    
                	<ul>
                         <li><a href="#">中心介绍</a></li>
                         <li><a href="#">部门设置</a></li>                        
                         <li><a href="#">在线留言</a></li>                                         
                    </ul>

                    <?php include("php/common_threeImg.php") ?>


           	 	</div>
             
            	      	<?php
					
						$sid=$_GET["id"];
						$sql="select *from news where id='".$sid."'";
						$rs=mysql_query($sql);
						$row=mysql_fetch_array($rs);
						
	?>
   

        		<div class="right_content">
                	<div class="position">
                    	<a href="main.html"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.html">首页 </a>> <a href="#">个</a> 新闻公告<a href="#">中心介绍</a></p></span>
                   	</div>	
                    <div class="detail_latestNews_title">
           		<ul>
            		<li class="detail_latestNews_title_f1">Introduce</li>
                	<li class="detail_latestNews_title_f2">中心介绍</li>
                	<li class="detail_latestNews_title_f3">作者：<?php echo $row["news_publish"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 发布于：：<?php echo $row['news_time']; ?></li>
            	</ul>
             </div>
      
                <div class="fl" id="introduce_content">
           <?php
			echo "<h1><center>".$row['news_title']."</center></h1></br>";
			echo $row["news_content"];
	
?>
                    
           	 	</div>
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
