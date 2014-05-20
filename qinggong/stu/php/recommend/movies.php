<?php
require_once('connect.php');



$last = $_POST['last'];
$amount = $_POST['amount'];

//$user = array('demo1','demo2','demo3','demo3','demo4');
$query=mysql_query("select * from recom_infos where recom_type=1 order by recom_id desc limit $last,$amount");
//echo $last."::".$amount;
//return ;

while ($row=mysql_fetch_array($query)) {
	$sayList[] = array(
		'more_content'=>$row['recom_content'],
		'bookname'=>$row['recom_name'],
		'bookpic'=>"<img  width='100px' height='150px;' src ='../manage/".$row['recom_pic']."'>"
      );
}
echo json_encode($sayList);
?>