<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除图片</title>
</head>
<body>
<?php
				 include("config.php");
				 include("conn.php");

							print("<table border='0'  cellpadding='5' align='center'>");
							print("<tr>");
							print("<td>编号</td>");
							print("<td>上传时间</td>");
							print("<td>预览</td>");
							print("<td>删除</td>");
							print("</tr>");
				$page_string = '';
					$page_size =10; 
					if(isset($_GET['page']) )
					{
   			       		 $page = intval( $_GET['page'] );
					}
					else
					{
						$page = 1;
					} 
					
				
					$sql = "select count(*) as amount from pic";
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
							$page_string .= '第一页|上一页|';
						}
						else
						{
							$page_string .= '<a href=?page=1>第一页</a>|<a href=?page='.($page-1).'>上一页</a>|';
						} 
						if( ($page == $page_count) || ($page_count == 0) )
						{
							$page_string .= '下一页|尾页';
						}
						else
						{
							$page_string .= '<a href=?page='.($page+1).'>下一页</a>|<a href=?page='.$page_count.'>尾页</a>';
						}
						
			
						if($amount )
						{
							 $sql = "select * from pic order by pno desc limit ". ($page-1)*$page_size .", $page_size";
							 $rs = mysql_query($sql);
	
			

							while($row=mysql_fetch_array($rs))
							{
							print("<tr>");
							print("<td>".$row['pno']."</td>");
							print("<td>".$row['pti']."</td>");
						    print("<td><img src= '".$row['ppa']."' width='100' height='100'></td>");
							print("<td><a href=\"javascript:if(confirm('是否要删除？')) window.location='delete2.php?sid=".$row['pno']."';\"><img src = 'images/del.png' ></a></td>");
							print("</tr>");
							}

						}
						print("</table>");
													print "<div class='disppages'>".$page_string."</div>";
                ?>

</body>
</html>