<?php session_start();
error_reporting(0);
require_once('connect.php');
/*******************************************************
这个php文件是网页的头部
author 陈烘
time  2013.4.12
update 2013.5.15
********************************************************
*/	      
?>
<div class="header h110">
	<div class="m0 w1000">
		 <img class="w100 h100 pb5 pt5 fl" src="img/护理学院院徽.png"  />
		<img class="fl w264 h66 ml20 mt10" src="img/学校名.png">
		<p class="color_fff fl fb ml48 f30 mt40 fm1">护理学院勤工助学中心</p>    
		<ul  class=" mr30 mt50 fr  w120">
         

            <?php if(!isset($_SESSION['admin_name'])) 
				{?>
        <?php
                 }
			  else
			    {
					$admin_name = $_SESSION["admin_name"];					
					$sql = "select * from admin where admin_name= ".$admin_name."";
					$rs = mysql_query($sql);
					$row = mysql_fetch_array($rs);
					//echo $row;
					//echo $row['admin_name']; 
		?> <li class="color_fff f10 fl" style="width:150px;"><?php echo $row['admin_name']; ?>,欢迎登录！</li>
          <li><span  class="color_fff f10 fl"><a href="../stu/main.php">返回首页</a></span></li>
           <li><span  class="color_fff f10 fl"><a href="logout.php">退出登录</a></span></li> 
            
        <?php } ?>                       
		</ul>    
	</div>
         
           
</div>