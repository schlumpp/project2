<?php
//$a = 4;
//echo is_numeric($a);
//$username = array("as","wre","wret");
//print_r($username);
$usernames = range(1,10,2);
//print_r($usernames);
//for($i = 0;i < count($usernames);$i++)
//{
	//echo $usernames[$i];
//	echo "<br/>";
//}
foreach($usernames as $key => $value)
{
	echo $key."__".$value.'<br/>';
echo '<br/>';
}
?>