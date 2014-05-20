<?php
require_once('../connect.php');

$last = $_POST['last'];
$amount = $_POST['amount'];

//$user = array('demo1','demo2','demo3','demo3','demo4');
//"<a href='job_detail.php?mid=".$row['work_id']."'>".$row['work_name']."</a>"
$query=mysql_query("select * from news where class=4 order by news_time desc limit $last,$amount");
while ($row=mysql_fetch_array($query)) {
	$sayList[] = array(
		//'more_content'=>$row['work_content'],
		'news_title'=>"<a href=activities_plan.php?news_id=".$row['id'].">".$row['news_title']."</a>",
		'date'=>$row['news_time']
      );
}
echo json_encode($sayList);
?>