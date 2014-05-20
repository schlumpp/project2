<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传图片处理</title>
</head>

<body>
<?php
 if(empty($_FILES["file"]["name"])) //显示客户端文件的原名称
 {
 		print("<script>");
		print("alert('您没有选择图片，请重新上传！！');");
		print("window.parent.frames['picframe'].location='recomPic_upload.php'");	//name=picframe的frame页面
		print("</script>");
 }
 else
 {
		
  $filearray=explode(".",$_FILES["file"]["name"]);  //explode()函数将字符串分割为数组存放在 $filearray 中explode(separator,string),separator规定在哪里分割字符串,string 要分割的字符串。
   $today=idate("Y").idate("m").idate("d").idate("H").idate("i").idate("s"); //idate() 函数将本地时间/日期格式化为整数,只接受一个参数
  $filename=$today.".".$filearray[1]; 
  iconv('UTF-8','gb2312',$filename); //将 $filename 的编码从GB2312转到UTF-8 
  $bool = ($filearray[1] == "png"|| $filearray[1] == "jpg"||$filearray[1] == "JPG"||$filearray[1] == "PNG");
	  if (!$bool )
	  {
		print("<script>");
		print("alert('您上传的图片格式错误，请重新上传！！');");
		print("window.parent.frames['picframe'].location='recomPic_upload.php'");	
		print("</script>");
	  }
	else
	{
	
	  if (file_exists("upload_images/" .$filename))
	  {
		echo $_FILES["file"]["name"] . " already exists. ";
	  }
	
	  else
	  {
		 move_uploaded_file($_FILES["file"]["tmp_name"],"upload_images/".$filename);
		 //echo "上传成功" . "images/".$filename; 将上传的文件移动到新位置
		 
	  }
	
	
		
		// 获取图片宽高 
		list($width_orig, $height_orig) = getimagesize("upload_images/".$filename); 
		if($width_orig<100||$height_orig<50)
		{
			unlink("upload_images/".$filename);  //unlink()会删除参数pathname指定的文件
			print("<script>");
			print("alert('您上传的照片像素太小，请重新上传！！');");
			print("window.parent.frames['picframe'].location='recomPic_upload.php'");		
			print("</script>");
			
		}
		if($width_orig>600||$height_orig>600)
		{
			print("<script>");
			print("alert('您上传的照片像素太大，需要进行剪切！');");
			print("</script>");
			$width = 200; 
			$height =100; 
			if ($width && ($width_orig < $height_orig)) 
			{ //高比宽，宽按比例缩小 
			$width = ($height / $height_orig) * $width_orig; 
			}
			else 
			{ 
			$height = ($width / $width_orig) * $height_orig; 
			} 
		// 改变大小。和上例一样。 
			$image_p = imagecreatetruecolor($width, $height); //imagecreatetruecolor 新建一个新的 GD 图像流并输出图像
			$type=$filearray[1];
		
		
			switch ($type){//判断图像类型
			case 'JPG':
				$image=imagecreatefromjpeg("upload_images/".$filename);
					break; 
			case 'jpg':
				$image=imagecreatefromjpeg("upload_images/".$filename);
				   break; 
			break;
			case 'png':
				$image=imagecreatefrompng("upload_images/".$filename);
				break; 
			case 'PNG':
				$image=imagecreatefrompng("upload_images/".$filename);
				break; 
		}
	
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig); 
	
		switch ($type){//判断图像类型
			case 'JPG':
			imagejpeg($image_p,"upload_images/".$filename);	
				break; 
			case 'jpg':
			imagejpeg($image_p,"upload_images/".$filename);	
				break;
			case 'png':
			imagepng($image_p,"upload_images/".$filename);
				break;  
			case 'PNG':
			imagepng($image_p,"upload_images/".$filename);
				break; 
				}
	
			
		}
		// 最大宽高 
	}
  session_start();
  $_SESSION["recom_pic"]="upload_images/".$filename;
  //$_SESSION["picname"]=$filename;
/*  echo "<img src='".$_SESSION["picpath"]."'>";*/
			print("<script>");
/*			print("top.location.reload();");*/
			print("window.parent.frames['picframe'].location='recomPic_upload.php'");
			print("</script>");
 }
  ?>
</body>
</html>