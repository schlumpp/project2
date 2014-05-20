<?php
require 'config.php';
$query = "SELECT * FROM GRADE";
$result = @mysql_query($query) or die('SQL错误'.mysql_error());
print_r(mysql_fetch_array($result,MYSQL_ASSOC));
echo '<br/>';
print_r(mysql_fetch_row($result));
echo '<br/>';
print_r(mysql_fetch_assoc($result));
echo '<br/>';
while(!!$row = mysql_fetch_array($result))
{
	echo $row['id'].'---'.$row['name'];
	echo mb_strlen($row['name'],'utf-8');
	echo '<br/>';
}
//输出字段名
for($i = 0;$i < mysql_num_fields($result);$i++)
{
	echo mysql_field_name($result,$i);
	echo '---';
}

mysql_get_client_info();//客户端信息
mysql_get_host_info();//主机信息
mysql_get_proto_info();//协议信息
mysql_get_server_info();//服务器信息
mysql_close();

//
?>