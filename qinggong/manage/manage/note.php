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
<title>留言信息</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type=text/javascript>
$(function(){
	$('.result_read table').find('tr:eq(0)').siblings('tr:odd').addClass('tbg');
	
});
</script>
<style>

.result_read table td{text-align:center; height:35px; color:#03C;}
.result_read .f_tr{background:#b5dafd; border:#0033CC solid 1px; color:#FFF; height:34px;  }
.tbg{background:#b5dafd;}
</style>
</head>
<body>
<div class="result_read"> 
<?php
	error_reporting(0);
	include("config.php");
	include("conn.php");
	function tranTime($time) {
		
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
/*	elseif ($time < 60 * 60 * 24 * 3) {
		$d = floor($time/(60*60*24));
		if($d=1)
		   $str = '昨天 '.$rtime;
		else
		   $str = '前天 '.$rtime;
	}*/
    else {
		$str = $rtime;
	}
	return $str;
}
	 $Page_size=12;
 $result=mysql_query("select * from note where note_reply =''");
 $count = mysql_num_rows($result);
 $page_count  = ceil($count/$Page_size);
 $num=0;
 $init=1;
 $page_len=3;
 $pages=$page_count;

 //判断当前页码
 if(empty($_GET['page'])||$_GET['page']<0){
  $page=1;
 }else {
 $page=$_GET['page'];
}

 $offset=$Page_size*($page-1);
/*if(!isset($_SESSION["managename"]))
 {
	 print("<script>");
	 print("setTimeout('window.location=\"manage.php\"',0);");
	 print("</script>");
 }
  else
 {*/
	  $sql="select * from note left join student on note.user_no  = student.stu_num where note_reply =''  order by note_id DESC limit $offset,$Page_size";
      $rs=mysql_query($sql);
	 print("<center>");
	 print("<table width='70%'>");
	 print("<tr  class='f_tr'>");
	 print("<td><h3> 编名</h3></td>");
	 print("<td><h3> 留言者</h3></td>");
	 print("<td><h3>留言时间 </h3></td>");
	 print("<td><h3> 回复 </h3></td>");
	 print("<td><h3> 删除 </h3></td>");
	 print("</tr>");
	 while($row=mysql_fetch_array($rs))
	 {
	    $num=$num+1;
		 print("<td>".$num."</td><td>".$row['stu_num']."</a></td><td>".tranTime($row['note_date'])."</td>");	
		 print("<td>"."<a href=\"javascript:window.location='reply_note.php?sid=".$row['note_id']."';\"><img src='img/edit.gif' border='0'/>"."</td>");	
		 print("<td>"."<a href=\"javascript:if(confirm('是否要删除？')) window.location='delete_note.php?sid=".$row['note_id']."';\"><img src='img/delete.gif' border='0'/>"."</td>");
		   print("</tr>");
		 
	 }
	 print("</table>");
	 print("</center>");
 //}
 print("<br/>");
 print "<div class='centers'>";
 $page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数
 $pageoffset = ($page_len-1)/2;//页码个数左右偏移量

 $page_string='<div class="page">';
 $page_string.="<span>$page/$pages</span>&nbsp;";   //第几页,共几页
 if($page!=1){
	
 $page_string.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">第一页</a> ";    //第一页
 $page_string.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">上一页</a>"; //上一页
}else {
 $page_string.="第一页 ";//第一页
 $page_string.="上一页"; //上一页
}
 if($pages>$page_len){
 //如果当前页小于等于左偏移
 if($page<=$pageoffset){
 $init=1;
 $pages = $page_len;
 }else{//如果当前页大于左偏移
 //如果当前页码右偏移超出最大分页数
 if($page+$pageoffset>=$pages+1){
 $init = $pages-$page_len+1;
 }else{
 //左右偏移都存在时的计算
 $init = $page-$pageoffset;
 $pages = $page+$pageoffset;
 }
 }
  }
  if($page!=$pages){
 $page_string.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">下一页</a> ";//下一页
 $page_string.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">最后一页</a>"; //最后一页
 }else {
 $page_string.="下一页 ";//下一页
 $page_string.="最后一页"; //最后一页
 }
 $page_string.='</div>';
?>
</div>
 <tr height="200px">
 <td></td>
    <td colspan="2"><div align="center"><?php echo $page_string?></div></td>
  </tr>
</table>


</body>
</html>