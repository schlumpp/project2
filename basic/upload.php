<?php
//�жϴ���
//���ж��ļ�����

$type = array('image/jpeg','image/jpg','image/png','image/gif');
if(is_array($type))
{
	if(!in_array($_FILES['userfile']['type'],$type))
	{
		echo "<script>alert('�˴�ֻ����jpg,png,gif���͵�ͼ��!');history.back();</script>";
	}
}


  if($_FILES['userfile']['error'] > 0)
{
	switch($_FILES['userfile']['error'])
	{
	case 1:
		echo "<script>alert('�ļ���С����Լ��ֵ1!');history.back();</script>";
		break;
    case 2:
		echo "<script>alert('�ļ���С����Լ��ֵ2!');history.back();</script>";
		break;
	case 3:
		echo "<script>alert('�����ļ����ϴ�!');history.back();</script>";
		break;
	case 4:
	    echo "<script>alert('û���κ��ļ����ϴ�!');history.back();</script>";
		break;
	}
}



//���ж��ļ���С
define('MAX_SIZE','2000000');
if($_FILES['userfile']['size'] > MAX_SIZE)
{
	echo "<script>alert('�ļ�����');history.back();</script>";
}
//�ж�Ŀ¼�Ƿ����
//if(!is_dir(URL))
	//mkdir(URL,0777);//0777�����Ȩ�ޣ���������ڸ�Ŀ¼�ͽ���
if(is_uploaded_file($_FILES['userfile']['tmp_name']))
{
	if(!move_uploaded_file($_FILES['userfile']['tmp_name'], 'upload/'.$_FILES['userfile']['name']))
	{
		echo "<script>alert('��ʱ�ļ��޷�ת�ƣ�');history.back();</script>";
		exit;
	}
}
else
{
	echo "<script>alert('��ʱ�ļ��޷��ϴ���');history.back();</script>";
	exit;
}

echo "<script>alert('�ļ��ϴ��ɹ���');location.href = 'upload2.php?url=".'upload/'.$_FILES['userfile']['name']."';</script>";

 
 

   	?>