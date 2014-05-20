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
<script type="text/javascript" src="js/page/main.js"></script>
<!--图片轮换-->


</head>

<body>
<?php
					  
					  
/***********************************************
*
*截取一定长度的字符串，确保截取后字符串不出乱码
*
***********************************************/
function cutstr($str,$cutleng)
{
$str = $str; //要截取的字符串
$cutleng = $cutleng; //要截取的长度
$strleng = strlen($str); //字符串长度
if($cutleng>$strleng)return $str;//字符串长度小于规定字数时,返回字符串本身
$notchinanum = 0; //初始不是汉字的字符数
for($i=0;$i<$cutleng;$i++)
{
if(ord(substr($str,$i,1))<=128)
{
$notchinanum++;
}
}
if(($cutleng%2==1)&&($notchinanum%2==0))//如果要截取奇数个字符，所要截取长度范围内的字符必须含奇数个非汉字，否则截取的长度加一
{
$cutleng++;
}
if(($cutleng%2==0)&&($notchinanum%2==1))//如果要截取偶数个字符，所要截取长度范围内的字符必须含偶数个非汉字，否则截取的长度加一
{
$cutleng++;
}
$str = substr($str,0,$cutleng);
return $str."...";
}
?>
<!---->
    <?php include("php/connect.php"); 
	?>
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
        		<div class="notice">
                	<p>新闻公告</p>
<!--            			<marquee behavior="scroll" onmouseover=this.stop() onmouseout=this.start() height="120" direction="up" onscroll="if(this.start>1){this.scrollAmount=2;this.onstart=null;this.onscroll=null;}this.start++;" --> 
						<div id=demo style="overflow:hidden; width:180px; height:150px;">
            			 <div id=demo1>
                         <?php
                           $sql ="select * from news where class =1";
						   $result= mysql_query($sql);
						   echo "<ol>";
						   while($row=mysql_fetch_row($result))
						   {
							  echo "<li class='news'><a href='activities_plan.php?news_id=".$row[0]."'>".$row[1]."</a></li>";
							}
						   echo "</ol>";
						 ?>
   <!--                  </marquee>-->
   						</div>
                        <div id=demo2></div>
                       	</div>
           	 	</div>
                <!--content区上半部分左边区结束-->
                <!--content区上半部分中间区开始-->    	            
                 <div class = "round_robin">
                      <div id="fade_focus">
                          <div class="loading">Loading...<br />
                              <img src="img/1.jpg" height="233"   width="478"/>
                          </div>
                          <ul id = "picture">
                                   <li><img src="img/1.jpg" width="478" height="233" alt="123445" /></li>
                                   <li><img src="img/2.jpg" width="478" height="233" alt="djfjdsf" /></li>
                                   <li><img src="img/3.jpg" width="478" height="233" alt="fdsf" /></li>
                                   <li><img src="img/4.jpg" width="478" height="233" alt="fdsfdf" /></li>
                          </ul>
                       </div>
                   </div>
                <!--content区上半部分中间区结束-->
                <!--content区上半部分右边区开始-->    	            
            	<div class="search">         
            		<div class="connectUs">
                    	<img src="img/phone.png"  class="mt10 ml15"/>
            			<p class="font_connect">联系我们</p>
                        <img src="img/connectUs_bgd.png" class="devive">
               	    	<table>
                          <tr>
                            <td>电&nbsp;&nbsp;话：</td>
                            <td>0571-828865535</td>
                         </tr>
                         <tr>
                            <td>邮&nbsp;&nbsp;箱：</td>
                            <td colspan="4">0571-828865535</td>
                         </tr>
                         <tr>
                            <td>QQ&nbsp;&nbsp;群：</td>
                            <td colspan="4">0571-828865535</td>
                         </tr>
                         <tr>
                            <td>地&nbsp;&nbsp;址：</td>
                            <td colspan="4">0571-828865535</td>
                         </tr>
                       </table>            	
                  </div>
           		</div>
           <!--content区上半部分右边区结束-->    	            
           <!--下半部分content开始-->
           <div class="latestNews">
           <!--左半部分开始-->
           <div class="left">
           	<div class="latestNews_title">
           		<ul>
            		<li class="latestNews_title_f1">Recrutment</li>
                	<li class="latestNews_title_f2">院内岗位招聘</li>
                	<li class="latestNews_title_f3"><a href="academy_post.php"> >>MORE </a></li>
            	</ul>
             </div>
             <div class="latestNews_content">           
             	<!--@院内岗位招聘信息版块
                    @作者 蔡优优
                    @时间 2013/05/26
                -->  
                                  
                <?php $sql = "select * from work where work_classify = 1 order by work_publish DESC";//查询语句
                      $result = mysql_query($sql) OR die("<br/>ERROR: <b>".mysql_error()."</b><br/>产生问题的SQL：".$sql);


					  
					  
					  print("<ul>"); 
					  if(($num = mysql_num_rows($result)) != null)//取出的记录不为空
						{  
							for( $shu=0 ;$shu<6;$shu++)
   						     {  $row = mysql_fetch_array($result);//取出一条记录
						        
							    print("<li class='solid'><a href='job_detail.php?mid=".$row["work_id"]."'>");
								print mb_substr($row['work_name'],0,15,'utf-8')."......";//($row['work_name'],10);
							    //print $row['work_name']."";							
							    print " <span class='latestNews_date'>截止时间：".$row['work_endtime']."</span>"; 
							    print("</a></li>");
						      }
					      }
						  else {print ("当前没有院内岗位信息");}
						  print("</ul>");
					    ?>
             </div>
             </div>
             <!--左半部分结束-->
              <!--右半部分开始-->
           	<div class="right">
           	<div class="latestNews_title">
           		<ul>
            		<li class="latestNews_title_f1">Result</li>
                	<li class="latestNews_title_f2">岗位招聘结果公示</li>
                	<li class="latestNews_title_f3"><a  href="#"> >>>>>>>> </a></li>
            	</ul>
             </div>
             <div class="latestNews_content">           
             	<ul>
                	<?php 
					//$sql = "select distinct (work_name)work_time,Rec_id from recruitment join work on recruitment.Rec_workid = work.work_id where recruitment.state = 1 order by Rec_time DESC " or die("<br>ERROR:".mysql_error()."</br>"); 
					$sql = "select distinct work_time,work_name,Rec_workid from recruitment join work on recruitment.Rec_workid = work.work_id where recruitment.state = 1 order by Rec_time DESC " or die("<br>ERROR:".mysql_error()."</br>");
				      $result = mysql_query($sql) OR die("<br/>ERROR: <b>".mysql_error()."</b><br/>产生问题的SQL：".$sql);
					  print("<ul>"); 
					  if(($num = mysql_num_rows($result)) != null)//取出的记录不为空
						{  
							for( $shu=0 ;$shu<6;$shu++)
   						     {  $row = mysql_fetch_array($result);//取出一条记录
							    print("<li class='solid'><a href='recruitment.php?work_id=".$row["Rec_workid"]."'>");
							    print mb_substr($row['work_name'],0,5,'utf-8')."..."."招聘结果公告";
								//print $row['work_name']."  招聘结果公告";							
							    print " <span class='latestNews_date'>发布时间：".$row['work_time']."</span>"; 
							    print("</a></li>");
						      }
					      }
						  else {print ("当前没有院内岗位信息");}
						  print("</ul>");
					    ?>
                </ul>
             </div>
             </div>
             <!--右半部分结束-->
           </div>
           <!--下半部分content结束-->
        </div>
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
