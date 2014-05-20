<?php
function collect_data(){
	require_once ("connect.php");
	require_once 'login.php';
	$username = $_REQUEST['name'];
	$password = $_REQUEST['pwd'];
	$sql = "select*from user where username = '$username' and passwd = '$password'";
	
	// where username = ".$_POST['name'].'and password = '.$_POST['pwd']
	$result = mysql_query($sql);
	$colum= mysql_fetch_array($result,MYSQL_ASSOC);
	mysql_free_result($result);
	return $colum;
}
?>