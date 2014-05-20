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
	      <?php error_reporting(0);
                //include("config.php");
	            //include("../public/conn.php");
				include('php/connect.php');
		   		include("php/common_header.php");
				$sql = "select * from basic_info ";
				$rs = mysql_query($sql);
				$row = mysql_fetch_array($rs);
				//echo $row['center_info'];
         ?>
        <!--header 结束-->
        <!--content 开始-->
        <div class="content">
        	<div class="content_resize">
                <!--content区上半部分左边区开始-->
        		<div class="left_nav">

                	<ul>
                         <li><a href="introduce.php">中心介绍</a></li>
                         <li><a href="department_info.php">部门介绍</a></li>
                         <li><a href="note.php">在线留言</a></li>                                         
                    </ul>

                    <?php include("php/common_threeImg.php") ?>


           	 	</div>
             
            	

        		<div class="right_content">
                	<div class="position">
                    	<a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> <a href="introduce.php">勤工简介</a> ><a href="department_info.php">部门介绍</a></p></span>
                   	</div>	
                    <div class="detail_latestNews_title">
             </div>
      
                <div class="fl tj" id="introduce_content">
                	<p><?php echo $row["depar_info"]; ?></p>
                	
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
</body>
</html>
