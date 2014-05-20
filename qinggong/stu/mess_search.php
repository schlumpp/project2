<?php 
$type=$_POST["type"];
$text=$_POST["key"];

require_once('php/connect.php');
?>
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
	     <?php
		   include("php/common_header.php");
         ?>
	<div class="main">
            <div class="content">
                <div class="content_resize">
    				<img src="img/sr.png" class="ml50">
                       <div class="searchlist" style="height:400px;">
    					<ul>
                     
                        <?php
					if($text==null)
					print("<p style='font-size:30px; font-weight:bold; text-align:center;'>请输入关键查找字</p>");
					else
					{
						switch($type){
								case 1:{
													$sql = "select * from work where work_name  like '%%".$text."%%' and work_classify=1 order by work_id DESC";
													print $sql;
													$rs=mysql_query($sql);
													$row=mysql_fetch_array($rs);
													if($row == null)
													{
														
														print("<p style='font-size:30px; font-weight:bold; text-align:center;'>没有搜索到结果</p>");}
													 while($row=mysql_fetch_array($rs)){
													print("<li><img src='img/icon.jpg'><a href='job_detail.php?mid=".$row['work_id']."'>".$row['work_name']." </a></li>");
															
														
														}						
													
													}
													break;
								case 2:{
													$sql = "select * from news where news_title   like '%".$text."%'  and class=2  order by id DESC";	
											
													$rs=mysql_query($sql);
													$row=mysql_fetch_array($rs);
													if($row == null)
													{
														
														
														print("<p style='font-size:30px; font-weight:bold; text-align:center;'>没有搜索到结果</p>");}
							
													 while($row=mysql_fetch_array($rs)){
							
													print("<li><img src='img/icon.jpg'><a href='activities_plan.php?news_id=".$row['id']."'>".$row['news_title']." </a></li>");
															
														
														}	
													}			
								
													break;
								
							/*	case '::下载资料::':{
													$sql = "select * from data where da_name  like '%".$text."%'   order by da_id  DESC";
																	
													$rs=mysql_query($sql);
							
													}
								
													break;		*/	
							
								}
					}
?>

						
						
						
	
						
				
                    
                        
                        </ul>
                     </div>
    
    
                </div>
       		</div>
        <?php
		     include("php/common_foot.php");
          ?>
        <!--footer 结束-->
        
    </div>
</body>
</html>
