<?php
//判断错误
//先判断文件类型

$type = array('image/jpeg','image/jpg','image/png','image/gif');
if(is_array($type))
{
	if(!in_array($_FILES['userfile']['type'],$type))
	{
		echo "<script>alert('此处只接受jpg,png,gif类型的图像!');history.back();</script>";
	}
}


  if($_FILES['userfile']['error'] > 0)
{
	switch($_FILES['userfile']['error'])
	{
	case 1:
		echo "<script>alert('文件大小超过约定值1!');history.back();</script>";
		break;
    case 2:
		echo "<script>alert('文件大小超过约定值2!');history.back();</script>";
		break;
	case 3:
		echo "<script>alert('部分文件被上传!');history.back();</script>";
		break;
	case 4:
	    echo "<script>alert('没有任何文件被上传!');history.back();</script>";
		break;
	}
}



//再判断文件大小
define('MAX_SIZE','2000000');
if($_FILES['userfile']['size'] > MAX_SIZE)
{
	echo "<script>alert('文件过大！');history.back();</script>";
}
//判断目录是否存在
//if(!is_dir(URL))
	//mkdir(URL,0777);//0777表最大权限，如果不存在该目录就建立
if(is_uploaded_file($_FILES['userfile']['tmp_name']))
{
	if(!move_uploaded_file($_FILES['userfile']['tmp_name'], 'upload/'.$_FILES['userfile']['name']))
	{
		echo "<script>alert('临时文件无法转移！');history.back();</script>";
		exit;
	}
}
else
{
	echo "<script>alert('临时文件无法上传！');history.back();</script>";
	exit;
}

echo "<script>alert('文件上传成功！');location.href = 'upload2.php?url=".'upload/'.$_FILES['userfile']['name']."';</script>";

 
 

   	?>