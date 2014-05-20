<!--
此页面为院内岗位招聘结果公示界面
@作者 蔡优优
@更新 2013.5.26
-->
<?php session_start();
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招聘结果公示</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<link href="css/page/main.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<style>
.jobContent_h1{ clear:both;
                font-size:23px;
				font-weight:bold;
				}
.position_now{ float:left; margin-top:4px; margin-left:14px;}
</style>
</head>

<body>
<div class="main">
		<!--header 开始-->	    
         <?php  
		   include('php/connect.php');
		   include("php/common_header.php");
		   $work_id = $_REQUEST['work_id'];//获取首页招聘结果公示中的传过来的Rec_id值，Rec_id		   
		   //$_SESSION['work_id'] = $work_id;//将work_id 存入到SESSION中
		   
		    $sql = "select * from    work where work_id=".$work_id."";
			
			 $result1 = mysql_query($sql);
			 $row1= mysql_fetch_array($result1);
			 $name=$row1['work_name'];
			
		   $sql2= "select * from recruitment  left join student  on   recruitment.stu_id = student.stu_id   where recruitment.state = 1 and recruitment.Rec_workid=".$work_id."" or die(mysql_error());
		   $rs = mysql_query($sql2) or die(mysql_error());		
		   $num = mysql_num_rows($rs);
		   //echo "人数".$num;
		 
		 ?>
           <div class="content">
        	<div class="content_resize" align="center">
            <div class="position">
                    	<a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> 院内岗位招聘结果公示</p></span>
                   	</div>
             <h1 class="jobContent_h1">关于<span style="color:#00F;"><?php echo $name; ?></span>招聘名单公示的通知</h1>
             
         <?php
		      $i=0;
			  while($row = mysql_fetch_array($rs))
			  {
				  if($i==0)
				  {
         ?>  
             <p style="border: dotted 1px #CCC;">发布日期：<span><?php echo $row['work_time']; ?></span></p>
             <p>以下人员已被录取：</p>
              <ul>
             
             <?php }
			       print "<li>".$row['stu_name']."</li>";
				   if($i==0)
				   $i++;
			  }
			 ?>
            </ul>
            <p>若对上述录取结果有任何异议，请联系管理人员XXX：12345678910</p>
            </div>
        </div>
        <!--content结束-->
         <!--footer 开始-->
        <?php
		     include("php/common_foot.php");
		?>
        <!--footer 结束-->
	</div>
</body>

</html>