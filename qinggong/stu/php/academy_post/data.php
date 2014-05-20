<?php
require_once('connect.php');

$last = $_POST['last'];
$amount = $_POST['amount'];

//$user = array('demo1','demo2','demo3','demo3','demo4');
//"<td align='left'><a href='news.php?mid=".$row["news_id"]."' target='_blank'>  ".$row['news_title']."</a></td>"
$query=mysql_query("select * from work where work_classify=1 order by work_id desc limit $last,$amount");
while ($row=mysql_fetch_array($query)) {
	$sayList[] = array(
		'more_content'=>$row['work_content'],
		'author'=>"<a href='job_detail.php?mid=".$row['work_id']."'>".$row['work_name']."</a>",
		'date'=>$row['work_publish']
      );
}
echo json_encode($sayList);
?>