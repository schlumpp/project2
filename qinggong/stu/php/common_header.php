<?php 
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
<script>
$(function(){
	common_fn(); //调用的是common.js中的fn方法
}); 
</script>
<div class="header h110">
	<div class="m0 w1000">
		 <img class="w100 h100 pb5 pt5 fl" src="img/护理学院院徽.png"  />
		<img class="fl w264 h66 ml20 mt10" src="img/学校名.png">
		<p class="color_fff fl fb ml48 f30 mt40 fm1">护理学院勤工助学中心</p>    
		<ul  class=" mr30 mt50 fr  w120"> 
        
		<?php
		session_start();
		 if(!isset($_SESSION["stu_id"])) 
				{?>
        <li><span onclick="popSignFlow(1);" class="color_fff f16 fr mr15" >登录</span></li> 
        <?php
                 }
			  else
			    {
					$stno = $_SESSION["stu_id"];					
					$sql = "select * from student where stu_id= ".$stno."";
					$rs = mysql_query($sql);
					$row = mysql_fetch_array($rs);
					//echo $row['stu_name']; 
		?> <li class="color_fff f10 fl"><?php echo $row['stu_name']; ?>,欢迎登录！</li>
           <li><span onclick="popSignFlow(0);" class="color_fff f10 fr" >修改密码</span></li>
           <li><span  class="color_fff f10 fl"><a href="logout.php">退出登录</a></span></li> 
            
        <?php } ?>            
		</ul>    
	</div>
         	<!--nav 开始-->
	<div class="nav color_000 fl h34 w">
		<div class="m0 w1000">
			<ul id = "firstnav" class=" m0 p0">
				<li><a href="main.php">首页</a></li>
				<li><a href="introduce.php"><span>勤工简介</span></a>
					<ul>
						<li><a href="introduce.php">中心介绍</a></li>
						<li><a href="department_info.php">部门设置</a></li>                                   
						<li><a href="note.php">在线留言</a></li>                         
					</ul>
				</li>
				<li><a href="beauty.php">勤工风采</a>
					<ul>
						<li><a href="beauty.php">活动策划</a></li>
						<li><a href="work_report.php">工作总结</a></li>                                   
						<li><a href="heart.php">心路勤工</a></li>                         
					</ul>   
				</li>                    
				<li><a href="applyfor.php">奖助中心</a>
					<ul>
						<li><a href="applyfor.php">申请入库</a></li>
						<li><a href="applysclship.php">励志奖学金申请</a></li>                                   
						<li><a href="applynation.php">国家助学金申请</a></li>                         
					</ul>   
				</li>                    	
				<li><a href="loan_condition.php">贷款资助</a>
					<ul>
						<li><a href="loan_condition.php">贷款条件</a></li>                                   
						<li><a href="Loan_fund.php">贷款流程</a></li>                         
					</ul>
				</li>
				<li><a href="academy_post.php">岗位招聘</a>
					<ul>
						<li><a href="academy_post.php">院内岗位</a></li>
						<li><a href="insideSch_post.php"> 校内岗位</a></li>                                   
						<li><a href="outsideSch_post.php">校外岗位</a></li>                         
					</ul>
				</li>
				<li><a href="recombook.php">励志部落</a>
					<ul>
						<li><a href="recombook.php">励志书籍推荐</a></li>
						<li><a href="recomMovies.php">励志电影推荐</a></li>                                                          
					</ul>
				</li>
				<li><a href="downloading.php">下载中心</a></li>
				<li><a href="department_nav.php">网站导航</a></li>
			</ul>                    
		</div>
	</div>
            <!--nav 结束-->    	
</div>