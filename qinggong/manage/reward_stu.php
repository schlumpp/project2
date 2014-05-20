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
					
				
					$sql = "select count(*) as amount  from student left join applyfor on  student.stu_id=applyfor.apply_id  where applySch_state=2 and type=2 and applyfor_year ='".$year."' and   apply_type=2   ";
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
    <div class="pageTitle">申请奖学金成功学生</div>
    <div class="pageColumn">
      <div class="pageButton"></div>
      <table>
        <thead>
        <th width="25"><input class="select-all" name="" type="checkbox" value="" /></th>
          <th width="">编名</th>
          <th width=""> 学号 </th>
          <th width="">姓名</th>
          <th width="">班级</th>
          <th width="">生源地</th>
          <th width="">身份证号</th>		  
          <th width="10%">操作</th>
         </thead>
        <tbody>

	<?php	
		              if($amount )
                        {
                

                        $query=mysql_query("select *   from student left join applyfor on  student.stu_id=applyfor.apply_id  where applySch_state=2 and type=2 and applyfor_year ='".$year."' and   apply_type=2   order by  student.stu_id  limit ". ($page-1)*$page_size .", $page_size");
                         while ($row=mysql_fetch_array($query)) 
						 {
						$num++;
        				 print(" <tr>");
           				 print("<td class='checkBox'><input name='checkbox[]' type='checkbox' value=".$row['stu_id']." /></td>");

			
						 print("<td>".$num."</td>");
						 print("<td>".$row['stu_num']."</td>");
						 print("<td>".$row['stu_name']."</td>");
						 print("<td>".$row['stu_class']."</td>");
						 print("<td>".$row['stu_hometown']."</td>");
						 print("<td>".$row['stu_idCard']."</td>");
						 
						 print("<td><a href='read_reward.php?sid=".$row["stu_id"]."'target'='_blank'><img src='img/view.gif' border='0'/></a></td>");						 
        				 print(" </tr>");					 	
                        }
                    }
					        
								
		?>

					 
      
					  
					  <tr class=" ">

						<td colspan="8" class="checkBox"><?php   echo ".$page_string.";  ?>　</td>
						
					  </tr>

  
        </tbody>
      </table>
    </div>
  </div><!-- #widget -->
</div>

</body>
</html>
