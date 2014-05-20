<?php
define('INCLUDE_CHECK',1);
require_once('php/connect.php');
require_once('php/note/function.php');
$page_string = '';
					$page_size =5; 
					if(isset($_GET['page']) )
					{
   			       		 $page = intval( $_GET['page'] );
					}
					else
					{
						$page = 1;
					} 
					
				
					$sql = "select count(*) as amount from note";
					$rs=mysql_query($sql);
					$row=mysql_fetch_array($rs);
					$amount = $row['amount']; 
					if($amount)
					{
			
						 if($amount < $page_size )
						 { 
							 $page_count = 1; 
						 } 
				
							 if( $amount % $page_size )
							 {
					
								 $page_count = (int)($amount / $page_size) + 1;          
							 }
							else
							{
							
								$page_count = $amount / $page_size;                     
							}
						}
						else
						{
						   $page_count = 0;
						}
						if( $page == 1 )
						{
							$page_string .= '第一页 |上一页 |';
						}
						else
						{
							$page_string .= '<a href=?page=1>第一页</a>|<a href=?page='.($page-1).'>上一页</a>|';
						} 
						if( ($page == $page_count) || ($page_count == 0) )
						{
							$page_string .= '下一页 | 尾页';
						}
						else
						{
							$page_string .= '<a href=?page='.($page+1).'>下一页</a> |<a href=?page='.$page_count.'> 尾页</a>';
						}
						
		




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
<script type="text/javascript" src="js/page/global.js"></script>
<style type="text/css">
.notecontent{float:left; color:#51555c}
.notecontent h3{height:32px; line-height:32px; font-size:18px}
.notecontent h3 span{float:right; font-size:32px; font-family:Georgia,serif; color:#ccc; overflow:hidden}
.input{width:594px; height:58px; margin:5px 0 10px 0; padding:4px 2px; border:1px solid #aaa; font-size:12px; line-height:18px; overflow:hidden}
.sub_btn{float:right; width:94px; height:28px;}
.reply{float:right}
.clear{clear:both}
.saylist{margin:8px auto; padding:4px 0; border-bottom:1px dotted #d3d3d3}
.saylist img{float:left; width:50px; margin:4px}
.saytxt{float:right; width:530px; overflow:hidden}
.saytxt p{line-height:18px}
.saytxt p strong{margin-right:6px}
.date{color:#999; width:150px;}
.reply{ float:right;}
.reply a:hover{color:#30C; text-decoration:underline; cursor:pointer;}
.reply_cont{ border:#CCC solid 1px;width:580px; height:50px; background:#fafafa; font:12px; line-height:32px;}
.inact,.inact:hover{background:#f5f5f5; border:1px solid #eee; color:#aaa; cursor:auto;}
#msg{color:#f30}
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
                	<ul>
                         <li><a href="introduce.php">中心介绍</a></li>
                         <li><a href="department_info.php">部门设置</a></li>
                         <li><a href="note.php">在线留言</a></li>                                         
                    </ul>

                    <?php include("php/common_threeImg.php") ?>


           	 	</div>
             
            	

        		<div class="right_content">
                	<div class="position">
                    	<a href="main.php"><img class="fl" src="img/home.png"></a><span><p class="position_now">当前位置: > <a href="main.php">首页 </a>> <a href="introduce.php">勤工简介</a> ><a href="note.php">在线留言</a></p></span>
                   	</div>	
                    
                    
                    <div class="detail_latestNews_title">
           		<ul>
            		<li class="detail_latestNews_title_f1">Message</li>
                	<li class="detail_latestNews_title_f2">在线留言</li>

            	</ul>
             </div>
      
      
      
                 <div class="notecontent">
                    <form id="myform" >
                      <h3><span class="counter">140</span>你有什么想说的...</h3>
                      <textarea name="saytxt" id="saytxt" class="input" tabindex="1" rows="2" cols="40"></textarea>
                      <p>
                      <input type="image" src="images/btn.gif" class="sub_btn" alt="发布" />
                      <span id="msg"></span>
                      </p>
                    </form>
                    <div class="clear"></div>
                    <div id="saywrap">
                     <?php
                     if($amount )
                        {
                
                        
                        $query=mysql_query("select * from note order by note_id desc  limit ". ($page-1)*$page_size .", $page_size");
                         while ($row=mysql_fetch_array($query)) {
                        $sayList=formatSay($row['note_cont'],$row['note_date'],$row['user_no'],$row['note_reply']);
                        echo $sayList;
                        }
                    }
					            echo '<br/><br/>'.$page_string;
                     ?>
                      
                    </div>
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
