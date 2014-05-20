<?php
/*******************************************************
*陈敏清
*留言信息
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="images/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="javascript/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('tbody tr:odd').addClass("trLight");
		
		$(".select-all").click(function(){
			if($(this).attr("checked")){
				$(".checkBox input[type=checkbox]").each(function(){
					$(this).attr("checked", true);  
					});
				}else{
					$(".checkBox input[type=checkbox]").each(function(){
					$(this).attr("checked", false);  
					});
				}
			});
		
		})
</script>
<style type="text/css">
body {
	background:#FFF;

}
</style>
</head>
<?php
					error_reporting(0);
					include("config.php");
					include("conn.php");
					
					function tranTime($time) {  //时间转换
							
						$rtime = date("m-d H:i",$time);
						$htime = date("H:i",$time);
						$time = time() - $time;
					
						if ($time < 60) {
							$str = '刚刚';
						}
						elseif ($time < 60 * 60) {
							$min = floor($time/60);
							$str = $min.'分钟前';
						}
						elseif ($time < 60 * 60 * 24) {
							$h = floor($time/(60*60));
							$str = $h.'小时前 '.$htime;
						}
						else {
							$str = $rtime;
						}
						return $str;
					}
			
					$sql = "select count(*) as amount  from  note where note_reply ='' ";
					
					$year=date('Y');
 					$num=0;
					$page_string = '';
					$page_size =8; 
					if(isset($_GET['page']) )
					{
   			       		 $page = intval( $_GET['page'] );
					}
					else
					{
						$page = 1;
					} 
					
				

				//	print $sql;
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


<body>
<div id="contentWrap">
	<!--表格控件 -->
  <div id="widget table-widget">
    <div class="pageTitle">留言信息查询</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <table>
        <thead>
        <th width="25"><input class="select-all" name="" type="checkbox" value="" /></th>
          <th width="">编号</th>
          <th width=""> 留言者 </th>
          <th width="">留言时间</th>
	  		   
          <th width="15%">操作</th>
         </thead>
        <tbody>
			
		<?php	
		              if($amount )
                        {
                

                        $query=mysql_query("select * from note left join student on note.user_no  = student.stu_num where note_reply =''  order by note_id DESC limit ". ($page-1)*$page_size .", $page_size");
                         while ($row=mysql_fetch_array($query)) 
						 {
						$num++;

        				 print(" <tr>");
           				 print("<td class='checkBox'><input name='checkbox[]' type='checkbox' value=".$row['stu_id']." /></td>");

			
						 print("<td>".$num."</td>");
						 print("<td>".$row['stu_num']."</td>");
						 print("<td>".tranTime($row['note_date'])."</td>");					 
						 print("<td><a href=\"javascript:window.location='reply_note.php?sid=".$row['note_id']."';\"><img src='img/edit.gif' border='0'/></a>
						 <a href=\"javascript:if(confirm('是否要删除？')) window.location='delete_note.php?sid=".$row['note_id']."';\"><img src='img/delete.gif' border='0'/></a>
									 </td>");						 
        				 print(" </tr>");					 	
                        }
                    }
					        
								
		?>



				  <tr class=" ">

						<td colspan="7" class="checkBox"><?php   echo ".$page_string.";  ?>　</td>
						
					  </tr>
					  
        </tbody>
      </table>
    </div>
  </div><!-- #widget -->
</div>


	  
</body>
</html>