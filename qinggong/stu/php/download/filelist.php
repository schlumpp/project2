<?php
require 'connect.php';

$result = mysql_query("SELECT * FROM data");

if(mysql_num_rows($result)){
	while($row=mysql_fetch_assoc($result)){
		$data1[] = array(
			'id' => $row['da_id'],
			'file' => $row['da_name'],
			'downloads'=> $row['da_num']
		);
	}
	echo json_encode($data1);
}
?>