<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭州师范大学 护理学院勤工助学中心</title>
<link href="css/base.css" type="text/css" rel="stylesheet">
<link href="css/common.css" type="text/css" rel="stylesheet">
<link href="css/page/apply3.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/page/apply3.js"></script>

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
                    	<a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> <a href="applyfor.php">奖助中心</a> >申请结果查看</p></span>
                   	</div>
                    <div class="detail_latestNews_title">
           		<ul>
            		<li class="detail_latestNews_title_f1"></li>
                	<li class="detail_latestNews_title_f2">申请结果查看</li>
            	</ul>
             </div>
      
                <div class="result_read h500 fr">
                	<table>
                    <tr class="f_tr">
                    <td><h3>序列号</h3></td>
                    <td><h3>申请项目</h3></td>
                    <td><h3>申请时间</h3></td>
                    <td><h3>申请状态</h3></td>                   
                     </tr>
 <?php                     
 	session_start();
   	require_once('php/connect.php');
	$stu_id=$_SESSION["stu_id"];
	$year=date('Y');	
 	$sql="select *from applyfor where apply_id =".$stu_id." and applyfor_year ='".$year."'";
 
	$rs=mysql_query($sql);
	$i=1;
	while($row=mysql_fetch_array($rs))
	{
		print("<tr>");
		print("<td>".$i." </td>");
		
		if($row['apply_type']==1)
		$type='申请入库';
		if($row['apply_type']==2)	
		$type='奖学金';	
		if($row['apply_type']==3)	
		$type='助学金';							
		print("<td> ".$type."</td>");		
		print("<td> ".$row['stu_time']."</td>");
		if($row['applySch_state']==1)
		$state='待审核';
		if($row['applySch_state']==2)	
		$state='审核通过';	
		if($row['applySch_state']==3)	
		$state='审核失败';			
		print("<td>".$state." </td>");
		print("</tr>");
		$i++;
		}
	
	
 
 ?>                    
                     
                     
                     
                                                                  
                    </table>
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
