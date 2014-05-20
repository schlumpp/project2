<!--
此页面为某岗位详细介绍界面
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
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<link href="css/page/main.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<style>
form { width:900px; 
       margin:0 auto;}

.jobContent_h1{ clear:both; 
                font-size:23px;
				font-weight:bold;
				}
th {font-weight:bold;}
.position_now{ float:left; margin-top:4px; margin-left:14px;}
</style>
</head>

<body>
	<div class="main">
		<!--header 开始-->	    
         <?php  
		   include('php/connect.php');
		   include("php/common_header.php");
		   $work_id = $_REQUEST['mid'];//获取academy.php中的data.php里穿过来的mid值，即work_id
		   
		   $_SESSION['work_id'] = $work_id;//将work_id 存入到SESSION中
		   
		   $query=mysql_query("select * from work where work_id = ".$work_id."");
		   $row=mysql_fetch_array($query);
		  // echo $SESSION['work_id'];
		   //$rs = mysql_query($sql);
		   if($row!=null)
		   {
         ?> 
        <!--header 结束-->
         <!--content 开始-->
        <div class="content">
        	<div class="content_resize" align="center">
                <div class="position">
                    <a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> <a href="academy_post.php">岗位招聘</a> > 岗位详情</p></span>
                </div>
            <form action="job_signUp.php" enctype="multipart/form-data">
            	 <h1 class="jobContent_h1">关于招聘<span style="color:#00F;"><?php echo $row['work_name']; ?></span>的通知</h1>
                 <p style="border: dotted 1px #CCC;">发布日期：<span><?php echo $row['work_publish']; ?></span></p>
                 <table class="fl" align="center">
                 	<tr>
                    	
                        <td><?php echo $row['work_content']; ?></td>                        
                    </tr>
                    <tr>
                      <td style="color:#F00;">报名截止时间：<?php echo $row['work_endtime']; ?></td>
                      <td></td>
                    </tr>
                 	
                    <tr>
                    	<td style="color:#F00;">已报名人数：<?php echo $row['work_num']; ?></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                    	<td><input type="submit"   value="岗位报名"></td>
                        <td></td>
                    </tr>
                 </table>
                
               </form>
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
