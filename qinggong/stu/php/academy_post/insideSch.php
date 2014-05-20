<?php
require_once('connect.php');

$last = $_POST['last'];
$amount = $_POST['amount'];

//$user = array('demo1','demo2','demo3','demo3','demo4');
$query=mysql_query("select * from work where work_classify=2 order by work_id desc limit $last,$amount");
while ($row=mysql_fetch_array($query)) {
	$sayList[] = array(
		'more_content'=>$row['work_content'],
		'author'=>$row['work_name'],
		'date'=>$row['work_publish']
      );
}
echo json_encode($sayList);
?>