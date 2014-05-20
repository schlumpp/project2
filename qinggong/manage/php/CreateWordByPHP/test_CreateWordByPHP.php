<?php
/*******************************************************
这个php文件通过查询数据库，找出要生成word的数据，然后调用CreateWordByPhp来生成word文档
author 陈烘
time 5.1
update 5.15
********************************************************
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
//引用必要的文件
require_once 'CreateWordByPHP.php';
require_once '../connect.php';
//查询 applyfor表中，审核通过的记录,然后把记录传给CreateWordByPhp类的create方法，该方法会生成相应的word
$sql ="select * from applyfor";
$result = mysql_query($sql,$link);
$flag = false;
if($result)
{    
	$cwbp = new CreateWordByPHP(); //获得CreateWordByhPhp对象
	while($myrow = mysql_fetch_row($result))
	{     
		if($myrow[5]=="2")  //$myrow['3']=="3" 表示该条记录审核已通过
        $cwbp->Create($myrow,$link);		
	}
	$flag=true;
}
//若出现错误，打印错误信息.
else
{
	echo $sql."'s result is:".$result."<br> error :".mysql_error() ;  //
}

if($flag)
 echo "WORD成功生成！";

?>
</body>
</html>
